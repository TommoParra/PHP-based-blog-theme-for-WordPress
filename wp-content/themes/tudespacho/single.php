<?php get_header();

while(have_posts()) { the_post();
?>

  <section class="full_with_hero outer_space_vertical">
    <?php
    $config = array(
      'id' => get_post_thumbnail_id(get_the_ID()),
      'class' => 'img_redondeada full_with_hero_img rowcol1',
      'sizes' => [['576', '100']],
      'default_size' => '100',
    );
    responsive_img($config);
    ?>

    <h1 class="ful_with_hero_title rowcol1"><?php the_title() ?></h1>
  </section>

  <section class="col_3_irregular outer_space_normal_to_sm">
    <div class="info_box">
      <p class="info_box_title text_light_color">
        <?php
        $categories = get_categories(array('include' => wp_get_post_categories(get_the_ID())));

        foreach ($categories as $category) { ?>
          <a class="text_light_color" href="<?= get_category_link($category) ?>">
            <span><?= $category->name; ?></span>
          </a>
        <?php } ?>
        &nbsp;|&nbsp;

        <?= get_the_date() ?>
      </p>

      <div class="info_box_txt">
        <?php
        $tags = wp_get_post_tags($post->ID);

        foreach ($tags as $tag) {
          if($tag->name != 'Destacada') {
            echo '<span>' . $tag->name . '</span><span class="span_dot">&nbsp;·&nbsp;</span>';
          }
        }
        ?>
        <div class="line line_sm line_black"></div>
      </div>
    </div>

    <div class="sticky_aside">
      <div class="reading_time">
        <p><?= reading_time(); ?>’</p>
      </div>

      <div class="social_sharing">
        <a
          href="https://twitter.com/share?url=<?php the_permalink() ?>"
          class="asocial_link"
          onClick="window.open('https://twitter.com/share?url=<?php the_permalink() ?>', 'Twitter', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
        >
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
        </a>

        <a
          href="https://pinterest.com/pin/create/link/?url=<?php the_permalink() ?>"
          class="asocial_link"
          onClick="window.open('https://pinterest.com/pin/create/link/?url=<?php the_permalink() ?>', 'Pinterest', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
        >
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" class="svg-inline--fa fa-pinterest-p fa-w-12" role="img" viewBox="0 0 384 512"><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
        </a>

        <a
          href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"
          class="asocial_link"
          onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>', 'Facebook', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
        >
          <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
        </a>
      </div>
    </div>

    <div class="main content_box">
      <?php the_content(); ?>

      <?php create_banner('post_page_bottom') ?>
      <!-- Contenido -->
      <!-- <section class="showcase showcase_2">
        <?php /*
        $avoid = array();
        $avoid[] = $queried_object->ID;

        $args = array(
          'posts_per_page' => 2,
          'category_name'  => $categories[0]->slug,
          'post__not_in'   => $avoid,
          'orderby'        => 'rand',
        );
        $featured=new WP_Query($args);

        while($featured->have_posts()){$featured->the_post();
          $avoid[] = get_the_ID();

          $args = array(
            'excerpt' => False,
            'class' => 'simpla_sm',
            'date' => false,
          );

          simpla_card($args);

        } wp_reset_query();
        */ ?>
      </section> -->

      <div class="page_section_header">
        <div class="page_section_title_md">
          <p class="text_butterscotch_color page_section_title_italic social_text">¿Nos ayudas? ¡Compártenos!</p>
        </div>

        <div class="social_sharing_horizontal">
          <a
            href="https://twitter.com/share?url=<?php the_permalink() ?>"
            class="asocial_link"
            onClick="window.open('https://twitter.com/share?url=<?php the_permalink() ?>', 'Twitter', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
          >
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
          </a>

          <a
            href="https://pinterest.com/pin/create/link/?url=<?php the_permalink() ?>"
            class="asocial_link"
            onClick="window.open('https://pinterest.com/pin/create/link/?url=<?php the_permalink() ?>', 'Pinterest', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
          >
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" class="svg-inline--fa fa-pinterest-p fa-w-12" role="img" viewBox="0 0 384 512"><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
          </a>

          <a
            href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"
            class="asocial_link"
            onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>', 'Facebook', 'height=600, width=600, scrollbars=no, resizable=no'); return false;"
          >
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
          </a>
        </div>
      </div>


      <div class="flex_row_center_between flex_no_wrap">
      <?php
      $prev_post = get_adjacent_post(false, '', true);
      if(!empty($prev_post)) {
        echo '<a class="button button_sm button_black button_prev flex_row_center_between flex_no_wrap" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '"><span class="line line_sm line_white line_to_left"></span>Anterior</a>';
      }

      $next_post = get_adjacent_post(false, '', false);
      if(!empty($next_post)) {
        echo '<a class="button button_sm button_black button_next flex_row_center_between flex_no_wrap" href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">Siguiente<span class="line line_sm line_white line_to_right"></span></a>';
      }
      ?>
      </div>

      <div class="line line_light line_complete"></div>

      <?php if(comments_open()) { comments_template(); } ?>
      <!-- <div type="submit" onclick="send_comment_xD()" class="button button_sm button_black flex_row_center_between flex_no_wrap">SEND MESSAGE <span class="line line_sm line_white line_to_right"></span></div> -->
    </div>

    <div class="ads_aside">
      <?php create_banner('post_page_lateral_1', 'banner_sm') ?>
      <?php create_banner('post_page_lateral_2', 'banner_sm') ?>
      <?php create_banner('post_page_lateral_3', 'banner_sm') ?>
    </div>
  </section>
<?php } ?>

<?php /*
if(get_comments_number() > 1) { ?>
  <div class="outer_space page_section_title_md flex_column_center">
    <a href="#" class="text_butterscotch_color page_section_title_italic">Mostrar más comentarios</a>
  </div>
<?php } */ ?>

<section class="relin outer_space bg_grey_e line_margin overflow_hidden onlyDesktopG relative_position">
  <div class="icon o_leave_2_icon">
    <svg viewBox="0 0 264 288" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><polygon id="path-1" points="0 0 264 0 264 288 0 288"></polygon></defs><g id="O-Leave-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="img---leaf"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Clip-2"></g><path d="M166.821984,49.2078713 C170.710356,48.639069 175.789737,48.3926753 181.713509,49.2734015 C195.67464,51.3572626 193.162314,53.8080929 182.232133,52.9142606 C175.802768,52.3873977 166.303361,55.0164702 159.480468,57.674376 C158.378068,59.1579802 157.29391,60.7411903 156.233208,62.3873095 C164.088136,64.3270041 179.777142,68.7280138 193.089342,75.7974141 C211.699839,85.6741292 211.181215,91.393607 191.020061,80.9952713 C176.51164,73.51172 160.666265,69.5274825 152.918189,67.8839845 C152.501206,68.6231654 152.084222,69.3544827 151.677663,70.1224969 C149.936757,73.399008 148.14894,76.7515342 146.329849,80.1826966 C152.847823,85.446084 169.360372,99.023946 184.301413,113.233519 C203.427928,131.432573 191.538684,125.713095 180.678869,114.793139 C172.274044,106.342361 151.179889,93.5325134 142.071405,88.1721412 C136.796563,98.082932 131.287168,108.436707 125.717831,118.897952 C131.039584,124.557142 142.634333,137.408929 152.245803,151.710244 C165.172293,170.952539 157.932416,166.273681 145.52455,150.674867 C136.280546,139.049806 126.471008,129.744514 122.064013,125.755034 C114.055323,140.785046 106.002328,155.901557 98.4106212,170.137343 C102.231233,175.605185 114.454063,193.363875 118.342435,206.83951 C121.954555,219.358403 119.134704,217.838102 113.745191,205.243193 C109.0854,194.349449 98.1421881,179.765043 95.2702139,176.021957 C73.6808907,216.522255 71.1659587,219.581206 71.1659587,219.581206 C71.1659587,219.581206 97.4254976,163.736351 105.746926,145.71554 C102.478817,143.7208 96.4012818,141.14153 88.702723,140.732622 C77.3659828,140.127122 74.5200701,138.058989 87.0504257,137.456111 C96.5550444,137.00002 105.022417,138.960684 108.558958,139.933153 C114.662555,126.612169 120.703604,113.157504 126.296396,100.274263 C123.150776,98.5835829 116.007327,95.5141473 103.761041,94.2402398 C86.4510119,92.4394693 84.0663872,88.2376715 103.761041,89.4355639 C117.06021,90.2481387 125.444186,91.8785306 129.496745,92.8509991 C132.478177,85.8785835 135.300634,79.1289706 137.898963,72.7017665 C130.812849,67.0399553 111.931313,52.555155 97.1909443,46.81995 C78.6925117,39.616868 76.9046948,37.8134763 97.7929643,43.8186658 C114.042292,48.4870388 133.538879,59.33098 141.401625,63.9180955 C142.386749,61.3833865 143.327568,58.9273138 144.21887,56.5393925 C141.250468,52.127898 135.681132,45.0113159 127.630743,39.616868 C115.095175,31.2106511 116.294003,27.6117313 131.214196,37.2158407 C138.805902,42.1043952 143.450057,46.6731623 146.189117,49.9916127 C149.076728,35.0087828 139.548654,21.2186029 134.198234,15.6039735 C99.2810744,-21.0090721 34.8310549,12.3038715 13.6430784,58.8224654 C-2.70788891,94.7277846 73.9441116,92.0384243 63.8635344,108.696207 C53.7829571,125.353989 -9.28841051,73.0530084 1.16484578,148.567415 C5.90803363,182.829236 46.1417336,156.585693 52.3417577,170.978751 C61.7030384,192.705951 5.90282134,167.309058 11.2558476,201.68097 C13.7447182,217.680829 17.1665894,229.879936 24.3282818,251.489182 C31.4873681,273.101049 39.4204801,288 39.4204801,288 C39.4204801,288 57.8042422,273.709169 78.095704,274.907062 C98.389772,276.110197 126.846293,287.701182 140.632811,268.3986 C164.724036,234.671505 126.747259,198.865792 144.912105,196.994249 C158.959238,195.547342 171.562566,230.204965 170.001484,248.503625 C168.26579,268.87566 214.30338,254.873162 214.162648,223.292838 C213.972399,180.923617 166.686465,157.361571 168.909508,143.550421 C171.817969,125.498156 202.226494,158.467721 212.971638,176.467562 C223.714177,194.48051 264,165.817591 264,118.997558 C264,60.222191 207.222478,9.52276889 166.821984,49.2078713" id="Fill-1" fill="#FFB94C" mask="url(#mask-2)"></path></g></g></svg>
  </div>

  <div class="page_section_header flex_column_center">
    <h5 class="text_black_color page_title_lg relative_position">Artículos de <span class="lowercase"><?= $categories[0]->cat_name ?></span>
      <span class="line_vertical line_butterscotch line_vertical_mid"></span>
    </h5>
  </div>

  <div class="showcase showcase_3" data-card="simpla_card" data-cycle="blog">
    <!-- para hacer un cyclo paginable filtrable y/o buscable -->
    <!-- el cyclo debe estar contenido en una etiqueta que SOLO contenga el cyclo -->
    <!-- colocar en esa etiqueta data-card y data-cycle -->
    <!-- en los argumentos del cyclo va 'cycle' => lo mismo que el cycle de la etiqueta -->
    <!-- agregar la variable a JS con localyze script con el mismo nombre -->
    <!-- colocar la tarjeta en multicards y llamarla con una funcion -->

    <?php
    $args = array(
      'posts_per_page' => 3,
      'post__not_in'   => array(get_the_ID()),
      'category_name' => $categories[0]->slug,
      'cycle' => 'blog',
    );
    $blog=new WP_Query($args);
    wp_localize_script( 'main', 'blog', array('query'=>json_encode($blog->query_vars),) );
    while($blog->have_posts()){$blog->the_post();

      $args = array(
        'excerpt' => False,
        'class'   => 'simpla_sm',
        'date'    => False,
        'extras'  => false,
      );

      simpla_card($args);
    }
    wp_reset_query();
    echo ajax_paginator_2($blog);
    ?>
  </div>
</section>



<section class="relcase_container outer_space bg_grey_e line_margin overflow_hidden onlyMobileG">
  <div class="page_section_header flex_column_center">
    <h5 class="text_black_color page_title_lg relative_position">Artículos de <span class="lowercase"><?= $categories[0]->cat_name ?></span>
      <span class="line_vertical line_butterscotch line_vertical_mid"></span>
    </h5>
  </div>

  <div class="relcase">
    <div class="icon o_leave_2_icon">
      <svg viewBox="0 0 264 288" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><polygon id="path-1" points="0 0 264 0 264 288 0 288"></polygon></defs><g id="O-Leave-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="img---leaf"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Clip-2"></g><path d="M166.821984,49.2078713 C170.710356,48.639069 175.789737,48.3926753 181.713509,49.2734015 C195.67464,51.3572626 193.162314,53.8080929 182.232133,52.9142606 C175.802768,52.3873977 166.303361,55.0164702 159.480468,57.674376 C158.378068,59.1579802 157.29391,60.7411903 156.233208,62.3873095 C164.088136,64.3270041 179.777142,68.7280138 193.089342,75.7974141 C211.699839,85.6741292 211.181215,91.393607 191.020061,80.9952713 C176.51164,73.51172 160.666265,69.5274825 152.918189,67.8839845 C152.501206,68.6231654 152.084222,69.3544827 151.677663,70.1224969 C149.936757,73.399008 148.14894,76.7515342 146.329849,80.1826966 C152.847823,85.446084 169.360372,99.023946 184.301413,113.233519 C203.427928,131.432573 191.538684,125.713095 180.678869,114.793139 C172.274044,106.342361 151.179889,93.5325134 142.071405,88.1721412 C136.796563,98.082932 131.287168,108.436707 125.717831,118.897952 C131.039584,124.557142 142.634333,137.408929 152.245803,151.710244 C165.172293,170.952539 157.932416,166.273681 145.52455,150.674867 C136.280546,139.049806 126.471008,129.744514 122.064013,125.755034 C114.055323,140.785046 106.002328,155.901557 98.4106212,170.137343 C102.231233,175.605185 114.454063,193.363875 118.342435,206.83951 C121.954555,219.358403 119.134704,217.838102 113.745191,205.243193 C109.0854,194.349449 98.1421881,179.765043 95.2702139,176.021957 C73.6808907,216.522255 71.1659587,219.581206 71.1659587,219.581206 C71.1659587,219.581206 97.4254976,163.736351 105.746926,145.71554 C102.478817,143.7208 96.4012818,141.14153 88.702723,140.732622 C77.3659828,140.127122 74.5200701,138.058989 87.0504257,137.456111 C96.5550444,137.00002 105.022417,138.960684 108.558958,139.933153 C114.662555,126.612169 120.703604,113.157504 126.296396,100.274263 C123.150776,98.5835829 116.007327,95.5141473 103.761041,94.2402398 C86.4510119,92.4394693 84.0663872,88.2376715 103.761041,89.4355639 C117.06021,90.2481387 125.444186,91.8785306 129.496745,92.8509991 C132.478177,85.8785835 135.300634,79.1289706 137.898963,72.7017665 C130.812849,67.0399553 111.931313,52.555155 97.1909443,46.81995 C78.6925117,39.616868 76.9046948,37.8134763 97.7929643,43.8186658 C114.042292,48.4870388 133.538879,59.33098 141.401625,63.9180955 C142.386749,61.3833865 143.327568,58.9273138 144.21887,56.5393925 C141.250468,52.127898 135.681132,45.0113159 127.630743,39.616868 C115.095175,31.2106511 116.294003,27.6117313 131.214196,37.2158407 C138.805902,42.1043952 143.450057,46.6731623 146.189117,49.9916127 C149.076728,35.0087828 139.548654,21.2186029 134.198234,15.6039735 C99.2810744,-21.0090721 34.8310549,12.3038715 13.6430784,58.8224654 C-2.70788891,94.7277846 73.9441116,92.0384243 63.8635344,108.696207 C53.7829571,125.353989 -9.28841051,73.0530084 1.16484578,148.567415 C5.90803363,182.829236 46.1417336,156.585693 52.3417577,170.978751 C61.7030384,192.705951 5.90282134,167.309058 11.2558476,201.68097 C13.7447182,217.680829 17.1665894,229.879936 24.3282818,251.489182 C31.4873681,273.101049 39.4204801,288 39.4204801,288 C39.4204801,288 57.8042422,273.709169 78.095704,274.907062 C98.389772,276.110197 126.846293,287.701182 140.632811,268.3986 C164.724036,234.671505 126.747259,198.865792 144.912105,196.994249 C158.959238,195.547342 171.562566,230.204965 170.001484,248.503625 C168.26579,268.87566 214.30338,254.873162 214.162648,223.292838 C213.972399,180.923617 166.686465,157.361571 168.909508,143.550421 C171.817969,125.498156 202.226494,158.467721 212.971638,176.467562 C223.714177,194.48051 264,165.817591 264,118.997558 C264,60.222191 207.222478,9.52276889 166.821984,49.2078713" id="Fill-1" fill="#FFB94C" mask="url(#mask-2)"></path></g></g></svg>
    </div>

    <?php
    $args = array(
      'posts_per_page' => 6,
      'post__not_in'   => array(get_the_ID()),
      'category_name' => $categories[0]->slug,
    );
    $blog_2=new WP_Query($args);

    while($blog_2->have_posts()){$blog_2->the_post();

      $args = array(
        'excerpt' => False,
        'class'   => 'simpla_sm',
        'date'    => False,
        'extras'  => false,
      );

      simpla_card($args);

    } wp_reset_query();
    ?>
  </div>
</section>



<?php
if (isset($_GET["q"])) {
    $nCustomer = $_GET["q"];
    $CnAux = new MysqliDb();
    $CnAux->where("id", $nCustomer);
    $aCustomer = $CnAux->getOne("stad_customers", "name, cod_country");
    //var_dump($aCustomer);
    $sCustomer = $aCustomer["name"];
    $CnAux->where("id", $aCustomer["cod_country"]);
    $sCountry = $CnAux->getValue("countries", "name");

    echo "<h2>$aCustomer[cod_country]</h2>";?>

    <script type="text/javascript">
        var test = "<?= $aCustomer["cod_country"]; ?>";
        if (test != '' && parseInt(test)) {
            console.log(test);
            document.querySelector('#cmbCountry').selectedValue = test;
        }
    </script>
<?php } ?>

<?php
$test = "aksdjhakjsdhkj"
?>
<script type="text/javascript">
    var test = "<?= $test; ?>";
    console.log(test);
    if (test != '' && parseInt(test)) {
        document.querySelector('#cmbCountry').selectedValue = test;
    }
</script>


<select name="blah" id="cmbCountry">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>



<?php get_footer(); ?>
