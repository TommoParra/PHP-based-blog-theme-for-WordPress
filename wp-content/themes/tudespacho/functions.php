<?php

require_once 'inc/custom_posts.php';
require_once 'inc/form_handler.php';
require_once 'inc/comment_handler.php';
require_once 'inc/new_ajax.php';

if(!is_admin()){
  require_once 'inc/multi_cards.php';
}

function lattte_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
	wp_enqueue_script('modules', get_theme_file_uri('/js/modules.js'), NULL, microtime(), true);



  // register our main script but do not enqueue it yet
  wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), NULL, microtime(), true );
  // now the most interesting part
  // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
  // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
  wp_localize_script( 'main', 'lt_data', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    'homeurl' => site_url(),
    'front_page' => is_front_page(),
  ) );

  wp_enqueue_script( 'main' );
}
add_action('wp_enqueue_scripts', 'lattte_setup');

// Adding Theme Support

function gp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
  add_theme_support( 'custom-logo' );
  // add_theme_support( 'woocommerce' );
  // add_theme_support( 'wc-product-gallery-zoom' );
  // add_theme_support( 'wc-product-gallery-lightbox' );
  // add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme', 'gp_init');
















function get_img_url_by_slug($slug){
  return wp_get_attachment_url( get_img_id_by_slug($slug));
}

function get_img_id_by_slug( $slug ) {
  $args = array(
   'post_type' => 'attachment',
   'name' => sanitize_title($slug),
   'posts_per_page' => 1,
   'post_status' => 'inherit',
  );
  $_header = get_posts( $args );
  $header = $_header ? array_pop($_header) : null;
  return $header ? $header->ID : '';
}

 // function responsive_img($id, $class, $size){
function get_responsive_img($args){
  if(!isset($args['id']) and !isset($args['slug'])) return '';
  if(!isset($args['id'])){ $args['id'] = get_img_id_by_slug($args['slug']); }
  $id = $args['id'];
  // var_dump(get_img_id_by_slug($args['slug']));
  $defaults = array(
    'class' => 'responsive_img',
    'sizes' => array(
      ['572', '80'],
      ['768', '40'],
    ),
    'default_size' => 30,
    'unit' => 'vw',
    'size_name' => 'Medium',
    'width' => 400,
    'height' => 300,
    'loading' => 'lazy',
  );
  foreach ($defaults as $key => $value) {
    if (!isset($args[$key])) { $args[$key] = $value; }
  }

  $img = '<img';
  $img .= ' class="'.$args['class'].'"';
  $img .= ' loading="'.$args['loading'].'"';
  $img .= ' width="'.$args['width'].'"';
  $img .= ' height="'.$args['height'].'"';

  $src = wp_get_attachment_image_src( $id, $args['size_name'] )[0];
  $img .= ' src="'.$src.'"';

  $srcset = wp_get_attachment_image_srcset( $id, $args['size_name'] );
  $img .= ' srcset="'.$srcset.'"';

  // var_dump($args['sizes']);
  $sizes = array_map(function ($value)use($args){ return "(max-width: ".$value[0]."px) ".$value[1].$args['unit'];}, $args['sizes']);
  $sizes = implode(", ", $sizes) . ", ".$args['default_size'].$args['unit'];
  // var_dump($sizes);
  $img .= ' sizes="'.$sizes.'"';

  $alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
  $img .= ' alt="'.$alt.'"';
  $img .= ' />';

  return $img;
  // return "<img class='$class' loading='lazy' width='400' height='300' src='".esc_attr( $src )."' srcset='".esc_attr( $srcset )."' sizes='".esc_attr( $sizes )."' alt='".esc_attr( $alt )."' />";
}
function responsive_img($args){echo get_responsive_img($args);}
















// this removes the "Archive" word from the archive title in the archive page
add_filter('get_the_archive_title',function($title){
  if(is_category()){$title=single_cat_title('',false);
  }elseif(is_tag()){$title=single_tag_title('',false);
  }elseif(is_author()){$title='<span class="vcard">'.get_the_author().'</span>';
  }return $title;
});






function excerpt($charNumber){
  if(!$charNumber){$charNumber=1000000;}
  $excerpt = get_the_excerpt();
  if(strlen($excerpt)<=$charNumber){return $excerpt;}else{
    $excerpt = substr($excerpt, 0, $charNumber);
    $result  = substr($excerpt, 0, strrpos($excerpt, ' '));
    // $result .= $result . '(...)';
    // return var_dump($excerpt);
    return $result;
  }
}









 function register_menus() {
   register_nav_menu('nav_bar',   __( 'Header' ));
   register_nav_menu('empresa',   __( 'Footer: Empresa' ));
   register_nav_menu('legales',   __( 'Footer: Legales' ));
   register_nav_menu('secciones', __( 'Footer: Secciones' ));
 }
 add_action( 'init', 'register_menus' );













//Second solution : two or more files.
//If you're using a child theme you could use:
// get_stylesheet_directory_uri() instead of get_template_directory_uri()
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
  wp_enqueue_style( 'admin_css_foo', get_template_directory_uri() . '/css/admin.css', false, '1.0.0' );
}









function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');











/*
FUNCTIONALITY: featured post from a column in the general view

thanks to Misha!
https://rudrastyh.com/woocommerce/columns.html
*/
// this part of the code is for creating a column
add_filter( 'manage_edit-post_columns', 'misha_extra_column', 20 );
function misha_extra_column( $columns ) {
	$columns['star'] = '★';
  unset($columns['comments']);
	// remember that you can add this column at any place you want with array_slice() function
	return $columns;
}
// this part of the code adds checkbox to our newly created column
add_action( 'manage_posts_custom_column', 'misha_populate_columns' );
function misha_populate_columns( $column_name ) {
	if( $column_name  == 'star' ) {
		echo '
      <input
        type="checkbox"
        data-productid="' . get_the_ID() .'"
        class="star_checkbox"
        ' . checked( 'yes', get_post_meta( get_the_ID(), 'featured_post', true ), false ) . '/>
      <small style="display:block;color:#7ad03a"></small>';
	}
}
// this code adds jQuery script to website footer that allows to send AJAX request
add_action( 'admin_footer', 'misha_jquery_event' );
function misha_jquery_event(){
	echo "<script>jQuery(function($){
		$('.star_checkbox').click(function(){
			var checkbox = $(this),
			    checkbox_value = (checkbox.is(':checked') ? 'yes' : 'no' );
			$.ajax({
				type: 'POST',
				data: {
					action: 'productmetasave', // wp_ajax_{action} WordPress hook to process AJAX requests
					value: checkbox_value,
					product_id: checkbox.attr('data-productid'),
					myajaxnonce : '" . wp_create_nonce( "activatingcheckbox" ) . "'
				},
				beforeSend: function( xhr ) {
					checkbox.prop('disabled', true );
				},
				url: ajaxurl, // as usual, it is already predefined in /wp-admin
				success: function(data){
					checkbox.prop('disabled', false ).next().html(data).show().fadeOut(400);
				}
			});
		});
	});</script>";
}
// this small piece of code can process our AJAX request
add_action( 'wp_ajax_productmetasave', 'misha_process_ajax' );
function misha_process_ajax(){
	check_ajax_referer( 'activatingcheckbox', 'myajaxnonce' );
	if( update_post_meta( $_POST[ 'product_id'] , 'featured_post', $_POST['value'] ) ) {
		echo '✓';
	}
	die();
}






























class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $item->xfn;
		}
		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
		$atts['aria-current'] = $item->current ? 'page' : '';


		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria_current The aria-current attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );



    // THIS IS MY PART ON THE MATTER
    if (get_term($item->object_id, 'category')) {
      $item_output  = '<div class="sub_menu Sub_menu_' . $item->ID . '">';

      $item_output .= '<div class="sub_menu_col grid auto_rows_min">';
      $item_output .= '<p class="sub_menu_title onlyDesktopG">Categorías</p>';
      $arg = array(
        'parent' => $item->object_id,
        'hide_empty'      => false,
      );
      $categories = get_categories( $arg );
      foreach($categories as $category) {
        $link = get_term_link($category);
        $item_output .= "<a class='sub_menu_link' href='$link'>";
        $config = array(
          'slug'  => get_term_meta( $category->term_id, 'lt_meta_menu_icon', true),
          'class' => 'sub_menu_icon',
          'width' => 30,
          'height' => 30,
        );
        $item_output .= get_responsive_img ($config);
        $item_output .= $category->name;
        // var_dump($category);
        $item_output .= "</a>";
      }
      $item_output .= '</div>';

      $item_output .= '<div class="sub_menu_col onlyDesktopG">';
      $item_output .= '<p class="sub_menu_title">Últimos artículos</p>';

      $config = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => $item->object_id,
          ),
        ),
      );
      $query = new WP_Query( $config );
      if( $query->have_posts() ){
        while ($query->have_posts()) {$query->the_post();

          $item_output .= get_title_card();
        }
      }

      $item_output .= "<a class='sub_menu_all' href='".$atts['href']."'>Ver todo</a>";
      $item_output .= '</div>';
      $item_output .= '</div>';
    }
    // END OF MY PART ON THE MATTER



		$item_output .= $args->before;
    $item_output .= '<p class="menu_item_cont">';
    $item_output .= '<a' . $attributes . ' onclick="menu_action(event)" data-selector=".Sub_menu_' . $item->ID . '">';
		// $item_output .= '<span onclick="menu_action(this)" data-selector=".Sub_menu_' . $item->ID . '" data-href="'.$atts['href'].'">';
		$item_output .= $args->link_before . $title . $args->link_after;
    $item_output .= '</a>';
		// $item_output .= '</span>';
    $item_output .= '<span class="menu_item_arrow onlyMobileG">^</span>';
    $item_output .= '</p>';
		$item_output .= $args->after;


		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

//estimated reading time
function reading_time() {
  $content = get_post_field( 'post_content', $post->ID );
  $word_count = str_word_count( strip_tags( $content ) );
  $words_per_minute = 200;
  $readingtime = ceil($word_count / $words_per_minute);
  return $readingtime;
}

// validate the terms field is required
function custom_validate_term_field() {
  if(empty($_POST['terms'])) {
    wp_die('Por favor, acepta nuestros términos y condiciones antes de enviar comentarios.');
  }
}

add_action('pre_comment_on_post', 'custom_validate_term_field');

// create a banner
function create_banner($terms, $class = 'banner_lg') {
  $args = array(
    'post_type'      => 'banner',
    'posts_per_page' => 1,
    'tax_query'      => array(
      array(
        'taxonomy' => 'ubicacion',
        'field'    => 'slug',
        'terms'    => $terms,
      ),
    ),
  );

  $banner=new WP_Query($args);

  while($banner->have_posts()) {
    $banner->the_post(); ?>
    <a href="<?= get_post_meta(get_the_ID(), 'banner_url', true) ?>" class="banner <?= $class ?>" target="_blank">
      <!-- <img class="simpla_img" loading="lazy" src="<?= get_the_post_thumbnail_url() ?>" alt=""> -->
      <?php
      $config = array(
        'id' => get_post_thumbnail_id(get_the_ID()),
        'class' => 'simpla_img',
        'sizes' => [['992', '94'],['1200', '92'],['1450', '88']],
        'width' => 400,
        'height' => 300,
        'default_size' => '70',
      );
      responsive_img($config);
       ?>
    </a>
  <?php } wp_reset_query();
} ?>

<?php
// add term field in form comments
add_filter('comment_form_after_fields', 'field_terms_to_form_comments');
add_filter('comment_form_logged_in_after', 'field_terms_to_form_comments');

function field_terms_to_form_comments() { ?>
  <div class="mateput_corner full_column_item terms_container">
    <div class="form_pair_elements form_pair_elements_start">
      <input type="checkbox" id="terminos_y_condiciones" value="aceptado" required name="terminos_y_condiciones">
      <label class="mateput_p_xs text_light_color" for="terminos_y_condiciones">Acepto los <a href="<?= home_url('aviso-legal') ?>" target="_blank" class="text_black_color"><b>términos y condiciones.</b></a></label>
    </div>
  </div>
<?php }
