<?php


add_action(        'admin_post_tp_form_handler', 'tp_form_handler');
add_action( 'admin_post_nopriv_tp_form_handler', 'tp_form_handler');

function tp_form_handler() {
	$handler = new FormHandler();
	$handler->handle_form($_POST);
	exit();
}

class FormHandler{
	function __construct() {
		$this->site    = get_option('fh_site_key');
		$this->secret  = get_option('fh_secret_key');
		$this->address = get_option('fh_address');
	}

	function handle_form($post){
		$link=$post['link'];

		if ( $this->is_bot($post) ){
			$status = 'bot';
		} else {
			$mail = $this->get_mail($post);
			$status = $this->send($mail);
		}

		$link = add_query_arg( array( 'status' => $status, ), $link );
	 	wp_redirect($link);
	}


	function is_bot($post){
		$is_bot = '';
		$status = '';
		$captcha_is_active = ( get_option('fh_captcha') == 'on' ) ? true : false;
		$capthca_doesnt_verify = !$this->check_captcha($post['token']);
		$dummy_trap = ( $post['a00'] != "" ) ? true : false;

		if ( ( $captcha_is_active && $capthca_doesnt_verify ) || $dummy_trap ){
			$is_bot = true;
		}
		return $is_bot;
	}

	function check_captcha( $token ){
		// get validation from google
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(
		  'secret' => $this->secret,
		  'response' => $token,
		  'remoteip' => $_SERVER['REMOTE_ADDR']
		));
		// save response in a variable
		$response = json_decode(curl_exec($ch));
		curl_close($ch);
		// end of get validation
		return ($response->success) ? true : false;
	}



	function get_mail($data){
		$subject = 'Nuevo Mensaje';
		$message='';

		$ignore_this_keys = array('a00', 'action', 'link', 'status', 'submit', 'g-recaptcha-response', 'token');
	  foreach ($data as $key => $value) {
			if (!in_array($key, $ignore_this_keys)) {
				$message.='<strong>'.$key.':</strong> '.$value.' - <br>';
			}
	  }

		$mail = array(
			'address' => $this->address,
			'subject' => $subject,
			'message' => $message,
		);

		return $mail;
	}


	function send( $mail ){
		$defaults = array(
			'address' => get_option( 'admin_email' ),
			'subject' => 'New message',
			'message' => 'There has been an error with the mail message',
			'headers' => array('Content-Type: text/html; charset=UTF-8'),
		);
		// set defaults if $mail lacks info
		foreach ($defaults as $key => $default_value){if(!isset($mail[$key])){ $mail[$key] = $default_value; }}

		if(wp_mail( $mail['address'] , $mail['subject'] , $mail['message'] , $mail['headers'] )) {
			$status = 'sent';
		} else {
			$status = 'error';
		}

		return $status;
	}
}



add_action('admin_init', 'my_general_section');
function my_general_section() {
    add_settings_section(
        'form_settings', // Section ID
        'Form Settings', // Section Title
        'my_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'fh_address', // Option ID
        'Address', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'form_settings', // Name of our section
        array( // The $args
            'fh_address' // Should match Option ID
        )
    );
    add_settings_field( // Option 1
        'fh_captcha', // Option ID
        'Activate Captcha V3', // Label
        'my_checkbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'form_settings', // Name of our section
        array( // The $args
            'fh_captcha' // Should match Option ID
        )
    );
    add_settings_field( // Option 1
        'fh_secret_key', // Option ID
        'Secret', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'form_settings', // Name of our section
        array( // The $args
            'fh_secret_key' // Should match Option ID
        )
    );
    add_settings_field( // Option 1
        'fh_site_key', // Option ID
        'Site', // Label
        'my_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'form_settings', // Name of our section
        array( // The $args
            'fh_site_key' // Should match Option ID
        )
    );

		register_setting('general','fh_address', 'esc_attr');
		register_setting('general','fh_captcha', 'esc_attr');
		register_setting('general','fh_secret_key', 'esc_attr');
		register_setting('general','fh_site_key', 'esc_attr');
    // register_setting('general','option_2', 'esc_attr');
}

function my_section_options_callback() { // Section Callback
    echo '<p>A little message on editing info</p>';
}

function my_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}


function my_checkbox_callback($args) {  // Textbox Callback
    $option = ( get_option($args[0]) == 'on' ) ? 'checked' : '';
    echo '<input type="checkbox" id="'. $args[0] .'" name="'. $args[0] .'" ' . $option . '/>';
}




function tp_register_captcha_script(){
	$captcha_is_active = ( get_option('fh_captcha') == 'on' ) ? true : false;

	if ($captcha_is_active) {
		$site = get_option('fh_site_key');
		$url = "https://www.google.com/recaptcha/api.js?render=$site";
		wp_enqueue_script( 'recaptcha', $url, false );
		wp_localize_script( 'main', 'captcha', array('site_key'=> $site,) );
	}

}
add_action('wp_enqueue_scripts', 'tp_register_captcha_script', 20);
