<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alice&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGDDNV5');</script>
<!-- End Google Tag Manager -->
  <?php wp_head(); ?>
  <style>
    :root{
      --primary_color:<?php echo get_option( 'primary_color', '' ); ?>;
      --secondary_color:<?php echo get_option( 'secondary_color', '' ); ?>;
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGDDNV5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<view id="load" class="load">
			<div class="circle"></div>
	</view>

  <header class="header">
    <!-- <a class="logo" href="<?php echo site_url(); ?>">
      <img class="logo_img" src="<?php echo get_template_directory_uri() . '/assets/logo_horizontal_navideno.png' ?>" alt="">
    </a> -->
    <div class="logo">
      <?php
      the_custom_logo()
       ?>
    </div>
    <menu class="nav_bar_menu">
      <?php
      $args = array(
        'theme_location' => 'nav_bar',
        'container'	=> false,
        'fallback_cb' => false,
        'menu_class' => 'nav_bar',
        'depth' => 0,
        // This one is the important part:
        'walker' => new Custom_Walker_Nav_Menu,
      );
      // https://stackoverflow.com/questions/12250866/how-to-add-custom-html-to-wp-nav-menu
      wp_nav_menu($args); ?>
      <?php if (get_queried_object()->post_name != "search") { ?>

        <div class="nearch" tabindex="1">
          <!-- <div class="nearch_btn" tabindex="1" onclick="accordionSelector('.nearch_unfold')"> -->

          <div class="nearch_unfold onlyDesktopG">

            <svg class="nearch_illu" width="796px" height="425px" viewBox="0 0 796 425" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>Search</title>
              <defs>
                <polygon id="path-1" points="0.648291082 0.578388889 380.315135 0.578388889 380.315135 358.143729 0.648291082 358.143729"></polygon>
                <filter id="filter-3">
                  <feColorMatrix in="SourceGraphic" type="matrix" values="0 0 0 0 0.952941 0 0 0 0 0.600000 0 0 0 0 0.050980 0 0 0 1.000000 0"></feColorMatrix>
                </filter>
                <polygon id="path-4" points="0 0.0831635831 143.917377 0.0831635831 143.917377 143.914286 0 143.914286"></polygon>
                <filter id="filter-6">
                  <feColorMatrix in="SourceGraphic" type="matrix" values="0 0 0 0 1.000000 0 0 0 0 0.857928 0 0 0 0 0.636928 0 0 0 1.000000 0"></feColorMatrix>
                </filter>
              </defs>
              <g id="Search" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group-24">
                  <path d="M694,399.998872 C694,406.628077 646.991386,412 589.002912,412 C531.009779,412 484,406.628077 484,399.998872 C484,393.370795 531.009779,388 589.002912,388 C646.991386,388 694,393.370795 694,399.998872" id="Fill-1" fill="#FFF3E0"></path>
                  <g id="Group-5" transform="translate(415.000000, 0.000000)">
                    <mask id="mask-2" fill="white">
                      <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-4"></g>
                    <path d="M195.532706,357.745612 C111.639077,363.141171 -24.6303644,313.285925 26.1524945,232.989592 C65.486654,170.798122 33.4031816,126.650507 13.0430558,107.873399 C-22.7931497,74.8219353 14.6254914,-9.31311699 184.047777,1.53666078 C338.755982,11.4420105 396.136218,114.978314 376.651458,208.048478 C359.169869,291.547654 291.819353,351.552275 195.532706,357.745612" id="Fill-3" fill="#FFF3E0" mask="url(#mask-2)"></path>
                  </g>
                  <polygon id="Fill-6" fill="#6A949E" points="486 291.933519 496.066199 302 527 271.066481 516.93265 261"></polygon>
                  <g filter="url(#filter-3)" id="Group-10">
                    <g transform="translate(364.000000, 281.000000)">
                      <mask id="mask-5" fill="white">
                        <use xlink:href="#path-4"></use>
                      </mask>
                      <g id="Clip-9"></g>
                      <polygon id="Fill-8" fill="#41A5B5" mask="url(#mask-5)" points="0 119.027141 24.9025574 143.914876 143.917377 24.9720776 119.012459 0.0831635831"></polygon>
                    </g>
                  </g>
                  <polygon id="Fill-11" fill="#FFDBA2" points="472 291.497885 497.502115 317 506 308.499698 480.497885 283"></polygon>
                  <path d="M605.001165,287.619425 C545.013529,287.619425 496.380575,238.987636 496.380575,179 C496.380575,119.011199 545.013529,70.3794098 605.001165,70.3794098 C664.991132,70.3794098 713.619425,119.011199 713.619425,179 C713.619425,238.987636 664.991132,287.619425 605.001165,287.619425 M605.001165,46 C531.545942,46 472,105.547107 472,179 C472,252.452893 531.545942,312 605.001165,312 C678.456389,312 738,252.452893 738,179 C738,105.547107 678.456389,46 605.001165,46" id="Fill-13" fill="#F3990D"></path>
                  <g filter="url(#filter-6)" id="Group-19">
                    <g transform="translate(635.000000, 95.000000)">
                      <path d="M21.1833,62.9655548 C12.434175,46.7456918 13.124925,29.1029521 22.7268,23.5511712 C32.32305,18.0040479 47.203425,26.6472671 55.951425,42.8659658 C64.703925,59.0811712 64.00755,76.7204178 54.410175,82.2698699 C44.8083,87.8251438 29.93355,79.1795959 21.1833,62.9655548" id="Fill-15" fill="#E1FFF5"></path>
                      <path d="M2.7351,17.664863 C-0.879525,12.9863699 -0.3249,6.31328767 3.973725,2.75609589 C8.266725,-0.794109589 14.6781,0.12109589 18.28935,4.79726027 C21.903975,9.48041096 21.350475,16.1511644 17.05635,19.7025342 C12.757725,23.2585616 6.347475,22.3468493 2.7351,17.664863" id="Fill-17" fill="#E1FFF5"></path>
                    </g>
                  </g>
                  <path d="M398.378461,149.462254 C394.336536,172.497994 423.884596,191.185709 429.214862,165.90379 C435.559973,135.786722 401.45442,131.93484 398.378461,149.462254 Z" id="Fill-20" fill="#FFF3E0"></path>
                  <path d="M421.436104,193.392751 C409.208718,196.882652 416.925106,209.996324 423.877071,207.740876 C433.012941,204.777284 431.701696,190.46417 421.436104,193.392751" id="Fill-22" fill="#FFF3E0"></path>
                  <path d="M55.2654774,257.410707 C41.7502935,335.377827 140.551619,398.628553 158.374695,313.058981 C179.59116,211.124289 65.5507153,198.087151 55.2654774,257.410707 Z" id="Fill-20" fill="#FFF3E0"></path>
                  <path d="M134.439619,178.576035 C116.50612,183.694557 127.823489,202.927942 138.019705,199.619952 C151.41898,195.27335 149.495821,174.280783 134.439619,178.576035" id="Fill-22" fill="#FFF3E0"></path>
                  <path d="M99.436104,193.392751 C87.2087181,196.882652 94.9251062,209.996324 101.877071,207.740876 C111.012941,204.777284 109.701696,190.46417 99.436104,193.392751" id="Fill-22" fill="#FFF3E0"></path>
                  <path d="M13.7303553,317.837869 C-12.3547348,325.282992 4.10689328,353.258825 18.9377523,348.447203 C38.427608,342.124872 35.6302857,311.59023 13.7303553,317.837869" id="Fill-22" fill="#FFF3E0"></path>
                </g>
              </g>
            </svg>



            <div class="nearch_ufiz">
              <p class="sub_menu_title">¿Que estas buscando?</p>
              <div class="mateput"  data-cycle-container="search">
                <input class="mateputInput Searcher NearchSearcher" data-timer="1" type="text" placeholder="Buscar..." name="name" autocomplete="off" value="" required>
                <label for="name" class="mateputLabel">
                  <span class="mateputName onlyMobileG">¿Buscas Algo?</span>
                </label>
              </div>
              <div class="nearch_tags"></div>
            </div>
            <div class="nearch_ufde onlyDesktopG">

              <p class="sub_menu_title">Articulos Relacionados</p>
              <div class="nearch_cycle" data-card="title_card" data-cycle="search">

                <!-- para hacer un cyclo paginable filtrable y/o buscable -->
                <!-- el cyclo debe estar contenido en una etiqueta que SOLO contenga el cyclo -->
                <!-- colocar en esa etiqueta data-card y data-cycle -->
                <!-- en los argumentos del cyclo va 'cycle' => lo mismo que el cycle de la etiqueta -->
                <!-- agregar la variable a JS con localyze script con el mismo nombre -->
                <!-- colocar la tarjeta en multicards y llamarla con una funcion -->

                <?php
                $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'cycle' => 'search',
                );
                $query = new WP_Query( $args );
                wp_localize_script( 'main', 'search', array('query'=>json_encode($query->query_vars),) );
                ?>
              </div>
              <a class="nearch_all Nearch_link" href="<?= site_url().'/search' ?>">Ver todos los resultados</a>
            </div>
          </div>
          <div class="nearch_btn" tabindex="1" onclick="nearch_button()">
            <svg class="nearch_icon" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
          </div>

          <div class="mobile_search mateput onlyMobileG"  data-cycle-container="search">
            <input class="mateputInput Searcher NearchSearcher" type="text" name="name" autocomplete="off" value="" required>
            <label for="name" class="mateputLabel">
              <span class="mateputName">¿Buscas Algo?</span>
            </label>
          </div>
        </div>
      <?php } ?>
      <div class="nav_bar_foot onlyMobileG">
        <a class="nav_bar_foot_link" href="<?= site_url() . '/contacto' ?>">Contacto</a>
        <p>síguenos</p>
        <div class="social_icons">
          <a class="social_icons_a" href="#">
            <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
          </a>
          <a class="social_icons_a" href="#">
            <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
          </a>
          <a class="social_icons_a" href="#">
            <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
          </a>
        </div>
      </div>
    </menu>

    <button class="burger" onclick="altClassFromSelector('mobile_menu_active', '.header')">
      <div class="burger_bar"></div>
      <div class="burger_bar"></div>
      <div class="burger_bar"></div>
    </button>
  </header>



  	<div class="alert" id="alert">
  		<button class="btn_close" onclick="altClassFromSelector('visible', '.alert')">
  			<div class="btn_close_bar"></div>
  			<div class="btn_close_bar"></div>
  		</button>
  		<h4 class="alert_title">alert title</h4>
  		<p class="alert_txt">alert text</p>
  	</div>
