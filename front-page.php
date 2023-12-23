<?php get_header();

// $test = new FormHandler();
//
// $handler = new FormHandler();
// echo $handler->address;
//
// echo get_option('fh_adress');
// echo '<br>';
// echo '<br>';
//
// echo get_option('fh_secret');
// echo '<br>';
// echo '<br>';
// echo get_option('<fh_captcha></fh_captcha>');
// // echo $test->send_mail(false);

?>
  <div class="outer_space flex_center onlyDesktopF page_section_home">
    <h1 class="page_section_header text_width_100_to_40rem"><?= get_post_meta(get_the_ID(), 'home_title', true) ?></h1>
    <p class="text_butterscotch_color page_section_title page_section_title_italic relative_position"><?= get_post_meta(get_the_ID(), 'home_claim', true) ?></p>
  </div>

  <div class="outer_space">
    <?php
    $args = array(
      'posts_per_page' => 1,
      'meta_query' => array(
        array(
          'key' => 'front_page',
          'value' => '1',
          'compare' => '=',
        ),
      ),
    );
    $front=new WP_Query($args);

    while($front->have_posts()){$front->the_post();
      simpla_card_lg();

    } wp_reset_query();
    ?>
  </div>

  <div class="outer_space"><?php create_banner('home_page_top') ?></div>

  <section class="showcase showcase_3 outer_space">
    <?php
    $args = array(
      'posts_per_page' => 3,
      'meta_query' => array(
        array(
          'key' => 'front_page',
          'value' => '2',
          'compare' => '=',
        ),
      ),
    );
    $front=new WP_Query($args);

    while($front->have_posts()){$front->the_post();

      $args = array(
        'excerpt' => False,
        'class' => 'simpla_sm',
      );

      simpla_card($args);

    } wp_reset_query();
    ?>
  </section>

  <main class="showcase showcase_2 outer_space grid_column_gap_md relative_position">
    <div class="icon leave_2_icon"></div>

    <?php

      $args = array(
        'posts_per_page' => 2,
        'meta_query' => array(
          array(
            'key' => 'front_page',
            'value' => '3',
            'compare' => '=',
          ),
        ),
      );
      $front=new WP_Query($args);

      while($front->have_posts()){$front->the_post();

        $args = array(
          'class' => 'simpla_md',
        );

        simpla_card($args);

      } wp_reset_query();
    ?>
  </main>

  <section class="outer_space overflow_hidden">
    <div class="page_section_header flex_column_center">
      <h3 class="text_butterscotch_color page_section_title page_section_title_italic relative_position">
        Lo mejor de cada sección te lo dejamos aquí
        <span class="icon icon_top_right heart_icon heart_orange_icon"></span>
      </h3>
      <p class="text_light_color page_section_description">Nuestros best sellers por secciones</p>
      <div class="line line_md line_orange"></div>
    </div>

    <div class="showcase showcase_3 relative_position">
      <div class="icon plant_3_icon"></div>

      <?php

        $args = array(
          'posts_per_page' => 6,
          'meta_query' => array(
            array(
                'key' => 'featured',
                'value' => 'yes',
                'compare' => '=',
            ),
          ),
        );
        $featured=new WP_Query($args);

        while($featured->have_posts()){$featured->the_post();

          $args = array(
            'excerpt' => False,
            'class' => 'simpla_xs',
          );

          simpla_card($args);

        } wp_reset_query();
      ?>
    </div>
  </section>

  <div class="outer_space"><?php create_banner('home_page_bottom') ?></div>

  <div class="outer_space flex_column_center">
    <h5 class="text_black_color page_title_md text_width_100_to_20rem">¿Aun no nos sigues en las redes? @tudespachoencasa</h5>
  </div>

  <div class="outer_space flex_column_center">
    <button class="button button_md button_black">¡ESCRÍBENOS!</button>
    <div class="line line_md line_orange"></div>
  </div>

<?php get_footer(); ?>
