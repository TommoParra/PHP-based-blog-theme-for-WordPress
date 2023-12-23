<?php get_header();

$category = get_category(get_query_var('cat'));
?>

  <div class="outer_space">
    <div class="page_section_header flex_column_center">
      <h3 class="text_black_color page_section_title page_title_lg underline"><?= $category->name ?></h3>
      <p class="text_light_color page_section_description text_width_100_to_30rem relative_position">
        <?= $category->description ?>
        <?php
        $icon_name = get_term_meta($category->term_id, 'lt_meta_icon', true);
        $icon_url = get_img_url_by_slug($icon_name);

        if($icon_url) { ?>
          <img src="<?= $icon_url ?>" alt="Icono de la categoría" class="icon category_icon">
        <?php } ?>
      </p>
      <div class="line line_md line_orange"></div>
    </div>

    <?php
    $avoid = array();

    $args = array(
      'posts_per_page' => 1,
      'category_name' => $category->slug,
      'meta_query' => array(
        array(
          'key' => 'category_page',
          'value' => 'arriba',
          'compare' => '=',
        ),
      ),
    );
    $featured_1=new WP_Query($args);

    while($featured_1->have_posts()){ $featured_1->the_post();
      $avoid[] = get_the_ID();

      $args = array(
        'class' => 'simpla_md simpla_horizontal',
        'time' => true,
      );
      simpla_card($args);

    } wp_reset_query();
    ?>
  </div>

  <div class="outer_space"><?php create_banner('category_page_top') ?></div>

  <section class="showcase showcase_3 outer_space">
    <?php

    $args = array(
      'posts_per_page' => 3,
      'category_name' => $category->slug,
      'post__not_in' => $avoid,
    );
    $archive_1=new WP_Query($args);

    while($archive_1->have_posts()){$archive_1->the_post();
      $avoid[] = get_the_ID();

      $args = array(
        'excerpt' => False,
        'class' => 'simpla_sm',
      );

      simpla_card($args);

    } wp_reset_query();
    ?>
  </section>

  <main class="outer_space relative_position">
    <div class="icon plant_2_icon">
      <svg viewBox="0 0 280 507"><defs><path id="prefix__a" d="M.857.057h59.091v111.558H.857z"/><path id="prefix__c" d="M.166.476h102.288v123.802H.166z"/><path id="prefix__e" d="M.499.937h90.488V133H.499z"/></defs><g fill="none" fill-rule="evenodd"><path d="M206 374.5c0 6.904-19.477 12.5-43.499 12.5-24.026 0-43.501-5.596-43.501-12.5 0-6.906 19.475-12.5 43.501-12.5 24.022 0 43.499 5.594 43.499 12.5" fill="#DB976A"/><path d="M129.539 184.997s33.028 1.498-4.386-65.378C87.739 52.742 12.228 32.107 1.957 60.22c-10.271 28.11 64.977 39.796 90.541 81.064 25.565 41.27 37.04 43.712 37.04 43.712M119.588 278.69s27.59-3.768.502-57.293c-34.518-68.213-70.01-75.881-82.836-48.925-14.269 29.988 21.602 27.877 45.313 70.113 23.705 42.23 37.02 36.105 37.02 36.105M184.232 350.601s-8.713-6.903-5.534-26.26c3.173-19.361 12.635-59.4 33.716-53.811 19.656 5.211 10.598 23.728-.04 46.89-7.042 15.326-18.61 36.772-28.142 33.181" fill="#FBF2DF"/><g transform="translate(98)"><mask id="prefix__b" fill="#fff"><use xlink:href="#prefix__a"/></mask><path d="M50.818 111.615s-15.91-.378-28.808-23.858C9.115 64.277-14.24 13.365 14.76 2.272 41.8-8.065 47.22 19.284 54.792 52.927c5.011 22.271 10.051 54.825-3.973 58.688" fill="#FBF2DF" mask="url(#prefix__b)"/></g><path d="M180.12 165.792s-18.127-21.546-3.27-53.076c14.852-31.533 28.838-29.586 37.785-25.39 8.947 4.195 13.797 29.127-1.63 50.65-15.426 21.525-16.657 29.454-32.885 27.816" fill="#FBF2DF"/><g transform="translate(177 113)"><mask id="prefix__d" fill="#fff"><use xlink:href="#prefix__c"/></mask><path d="M9.21 122.501S-5.279 111.103 2.42 89.49C9.966 68.297 63.195-7.287 90.6 1.126c27.407 8.414.441 40.23-12.429 57.513-17.896 24.03-33.531 75.862-68.962 63.862" fill="#FBF2DF" mask="url(#prefix__d)"/></g><path d="M74 193c73.123 79.581 75.543 197.005 72.038 301M53 80s133.74 26.827 88.75 375M131 37s47.282 75.324 16.707 418M241 158s-80.568 42.709-81 298" stroke="#EFCB92" stroke-linecap="round" stroke-linejoin="round"/><path d="M203 110s-22.987 43.104-31.566 92.984C164.544 243.047 153 459 153 459M211 285s-44.251 72.223-42.973 184" stroke="#EFCB92" stroke-linecap="round" stroke-linejoin="round"/><g transform="translate(118 374)"><mask id="prefix__f" fill="#fff"><use xlink:href="#prefix__e"/></mask><path d="M89.388.937c-7.827 8.008-26.683 10.675-43.644 12.118C25.441 12.057 13.32 9.39 2.098.937c0 0-9.428 66.72 17.508 124.099 0 0 10.133 8.58 26.138 7.929 16.006.652 26.136-7.93 26.136-7.93C98.816 67.658 89.388.938 89.388.938" fill="#FFB680" mask="url(#prefix__f)"/></g></g></svg>
    </div>

    <div class="page_section_header flex_column_center">
      <h3 class="text_green_medium_color page_section_title page_section_title_italic relative_position">
        Nuestro artículo destacado
        <span class="icon icon_top_right heart_icon">
          <svg viewBox="0 0 50 50"><defs><polygon id="path-1" points="0.932142832 0.111111111 42.9321428 0.111111111 42.9321428 49.1111111 0.932142832 49.1111111"></polygon></defs><g id="Heart-Green-50" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Group-3-Copy" transform="translate(3.067857, -0.111111)"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Clip-2"></g><path d="M42.6789417,5.37346785 C42.1350762,2.92174086 40.2736878,0.567629252 37.6858248,0.173730594 C33.4786114,-0.466268796 29.4248329,3.93467223 27.8987681,7.20513098 C25.0159211,13.381022 25.1621525,19.7909836 23.6778681,26.2109131 C20.0555802,19.4053342 18.5723763,12.0656204 12.5156603,6.59915948 C8.09234147,2.60724063 2.01725648,0.835040382 1.0174085,8.21050059 C0.717021893,10.4271258 1.25764575,12.6643739 1.90055953,14.813287 C5.79766153,27.8411586 13.7182872,39.0988922 23.4930979,48.7861869 C23.6731858,48.9645756 23.9058594,49.157744 24.1587028,49.1010309 C24.3146589,49.0659718 24.4291948,48.9432652 24.5325652,48.8267454 C32.2727429,40.1248848 37.6454851,29.8309311 40.5254507,18.7649911 C41.6207452,14.5554999 43.6085554,9.88336688 42.7016328,5.48070727 C42.6944292,5.4449608 42.6865054,5.40921432 42.6789417,5.37346785" id="Fill-1" fill="#A5C81A" mask="url(#mask-2)"></path></g></g></svg>
        </span>
      </h3>
      <div class="line line_md line_green"></div>
    </div>

    <?php
    $args = array(
      'posts_per_page' => 1,
      'category_name' => $category->slug,
      // 'post__not_in' => $avoid,
      'meta_query' => array(
        array(
          'key' => 'category_page',
          'value' => 'destacada',
          'compare' => '=',
        ),
      ),
    );
    $archive=new WP_Query($args);

    while($archive->have_posts()){$archive->the_post();
      $avoid[] = get_the_ID();

      $args = array(
        'class' => 'simpla_md simpla_horizontal simpla_reverse',
        'time' => true,
      );
      simpla_card($args);

    } wp_reset_query();
    ?>
  </main>

  <div class="outer_space"><?php create_banner('category_page_bottom') ?></div>

  <section class="outer_space showcase showcase_3 relative_position overflow_hidden" data-card="simpla_card" data-cycle="blog">
    <div class="icon leave_2_normal_icon">
      <svg viewBox="0 0 264 288"><defs><polygon id="path-1" points="0 0 264 0 264 288 0 288"></polygon></defs><g id="O-Leave-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="img---leaf"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Clip-2"></g><path d="M166.821984,49.2078713 C170.710356,48.639069 175.789737,48.3926753 181.713509,49.2734015 C195.67464,51.3572626 193.162314,53.8080929 182.232133,52.9142606 C175.802768,52.3873977 166.303361,55.0164702 159.480468,57.674376 C158.378068,59.1579802 157.29391,60.7411903 156.233208,62.3873095 C164.088136,64.3270041 179.777142,68.7280138 193.089342,75.7974141 C211.699839,85.6741292 211.181215,91.393607 191.020061,80.9952713 C176.51164,73.51172 160.666265,69.5274825 152.918189,67.8839845 C152.501206,68.6231654 152.084222,69.3544827 151.677663,70.1224969 C149.936757,73.399008 148.14894,76.7515342 146.329849,80.1826966 C152.847823,85.446084 169.360372,99.023946 184.301413,113.233519 C203.427928,131.432573 191.538684,125.713095 180.678869,114.793139 C172.274044,106.342361 151.179889,93.5325134 142.071405,88.1721412 C136.796563,98.082932 131.287168,108.436707 125.717831,118.897952 C131.039584,124.557142 142.634333,137.408929 152.245803,151.710244 C165.172293,170.952539 157.932416,166.273681 145.52455,150.674867 C136.280546,139.049806 126.471008,129.744514 122.064013,125.755034 C114.055323,140.785046 106.002328,155.901557 98.4106212,170.137343 C102.231233,175.605185 114.454063,193.363875 118.342435,206.83951 C121.954555,219.358403 119.134704,217.838102 113.745191,205.243193 C109.0854,194.349449 98.1421881,179.765043 95.2702139,176.021957 C73.6808907,216.522255 71.1659587,219.581206 71.1659587,219.581206 C71.1659587,219.581206 97.4254976,163.736351 105.746926,145.71554 C102.478817,143.7208 96.4012818,141.14153 88.702723,140.732622 C77.3659828,140.127122 74.5200701,138.058989 87.0504257,137.456111 C96.5550444,137.00002 105.022417,138.960684 108.558958,139.933153 C114.662555,126.612169 120.703604,113.157504 126.296396,100.274263 C123.150776,98.5835829 116.007327,95.5141473 103.761041,94.2402398 C86.4510119,92.4394693 84.0663872,88.2376715 103.761041,89.4355639 C117.06021,90.2481387 125.444186,91.8785306 129.496745,92.8509991 C132.478177,85.8785835 135.300634,79.1289706 137.898963,72.7017665 C130.812849,67.0399553 111.931313,52.555155 97.1909443,46.81995 C78.6925117,39.616868 76.9046948,37.8134763 97.7929643,43.8186658 C114.042292,48.4870388 133.538879,59.33098 141.401625,63.9180955 C142.386749,61.3833865 143.327568,58.9273138 144.21887,56.5393925 C141.250468,52.127898 135.681132,45.0113159 127.630743,39.616868 C115.095175,31.2106511 116.294003,27.6117313 131.214196,37.2158407 C138.805902,42.1043952 143.450057,46.6731623 146.189117,49.9916127 C149.076728,35.0087828 139.548654,21.2186029 134.198234,15.6039735 C99.2810744,-21.0090721 34.8310549,12.3038715 13.6430784,58.8224654 C-2.70788891,94.7277846 73.9441116,92.0384243 63.8635344,108.696207 C53.7829571,125.353989 -9.28841051,73.0530084 1.16484578,148.567415 C5.90803363,182.829236 46.1417336,156.585693 52.3417577,170.978751 C61.7030384,192.705951 5.90282134,167.309058 11.2558476,201.68097 C13.7447182,217.680829 17.1665894,229.879936 24.3282818,251.489182 C31.4873681,273.101049 39.4204801,288 39.4204801,288 C39.4204801,288 57.8042422,273.709169 78.095704,274.907062 C98.389772,276.110197 126.846293,287.701182 140.632811,268.3986 C164.724036,234.671505 126.747259,198.865792 144.912105,196.994249 C158.959238,195.547342 171.562566,230.204965 170.001484,248.503625 C168.26579,268.87566 214.30338,254.873162 214.162648,223.292838 C213.972399,180.923617 166.686465,157.361571 168.909508,143.550421 C171.817969,125.498156 202.226494,158.467721 212.971638,176.467562 C223.714177,194.48051 264,165.817591 264,118.997558 C264,60.222191 207.222478,9.52276889 166.821984,49.2078713" id="Fill-1" fill="#FFB94C" mask="url(#mask-2)"></path></g></g></svg>
    </div>

    <!-- para hacer un cyclo paginable filtrable y/o buscable -->
    <!-- el cyclo debe estar contenido en una etiqueta que SOLO contenga el cyclo -->
    <!-- colocar en esa etiqueta data-card y data-cycle -->
    <!-- en los argumentos del cyclo va 'cycle' => lo mismo que el cycle de la etiqueta -->
    <!-- agregar la variable a JS con localyze script con el mismo nombre -->
    <!-- colocar la tarjeta en multicards y llamarla con una funcion -->

    <?php
    $args = array(
      'posts_per_page' => 6,
      'category_name' => $category->slug,
      'post__not_in' => $avoid,
      'cycle' => 'blog',
    );
    $blog=new WP_Query($args);
    wp_localize_script( 'main', 'blog', array('query'=>json_encode($blog->query_vars),) );
    while($blog->have_posts()){$blog->the_post();

      $args = array(
        'excerpt' => False,
        'class' => 'simpla_sm',
      );

      simpla_card($args);
    }
    wp_reset_query();
    echo ajax_paginator_2($blog);
    ?>
  </section>

  <section class="totoro outer_space Carousel bg_grey_e">
    <h3 class="totoro_title text_black_color page_section_title page_title_lg">Otras secciones</h3>
    <!-- <section class="showcase showcase_min_2_min"> -->
    <button class="button_icon button_xs PrevButton"><</button>
    <!-- <button class="arrowBtn PrevButton">Anterior</button> -->

    <?php
    // TODO: confirmar con la diseñadora/cliente/Tomas si aqui van categorias o posts
    // if (False) {
      // code...
    $args = array(
      'hide_empty'      => false,
    );
    $categories = get_categories($args);
    ?>

    <div class="totoro_face ">
      <?php
      $i=0;
      foreach ($categories as $key => $value) {
        $config = array(
          'posts_per_page' => 1,
          'cat' => $value->cat_ID,
        );
        
        $article_sections = new WP_Query($config);

        if ($i % 2 == 0 && $article_sections->have_posts()) {
          echo '<div class="totoro_finger rowcol1 Element">';
        }

        while($article_sections->have_posts()) {
          $article_sections->the_post();

          $args = array(
            'excerpt' => false,
            'class' => 'simpla_md',
            'extras' => false,
          );

          simpla_card($args);
          $i+=1;
        }
        
        if(($key == count($categories) - 1) || ($i % 2 == 0 && $article_sections->have_posts())) { echo '</div>'; }
        wp_reset_query();
      } ?>
    </div>

    <button class="button_icon button_xs NextButton">></button>
  </section>

<?php get_footer(); ?>
