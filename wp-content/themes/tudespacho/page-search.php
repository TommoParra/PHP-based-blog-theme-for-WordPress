<?php get_header();
while(have_posts()){the_post(); ?>
<section class=" outer_space">


  <div class="search_title page_section_header flex_column_center">
    <h3 class="text_black_color page_section_title page_title_lg underline"><?= get_the_title(); ?></h3>
    <p class="text_light_color page_section_description text_width_100_to_30rem relative_position">
      <?= get_the_excerpt(); ?>
    </p>
    <?php
    $clase = "";
    $busqueda = "";
    if (isset($_GET['search'])) {
      if (isset(json_decode(stripslashes($_GET['search']))->search)) {
        $busqueda = json_decode(stripslashes($_GET['search']))->search;
        $clase="alt";
      }
    }
     ?>
    <div class="search_mateput mateput <?= $clase ?>"  data-cycle-container="search">
      <input class="mateputInput Searcher" type="text" name="name" autocomplete="off" value="<?= $busqueda ?>" required>
      <label for="name" class="mateputLabel">
        <span class="mateputName">¿Buscas Algo?</span>
      </label>
    </div>
    <div class="line line_md line_orange"></div>
  </div>


  <div class="showcase showcase_3" data-card="simpla_card" data-cycle="search">

    <!-- para hacer un cyclo paginable filtrable y/o buscable -->
    <!-- el cyclo debe estar contenido en una etiqueta que SOLO contenga el cyclo -->
    <!-- colocar en esa etiqueta data-card y data-cycle -->
    <!-- en los argumentos del cyclo va 'cycle' => lo mismo que el cycle de la etiqueta -->
    <!-- agregar la variable a JS con localyze script con el mismo nombre -->
    <!-- colocar la tarjeta en multicards y llamarla con una funcion -->

    <?php
    $args = array(
      'posts_per_page' => 30,
      'cycle' => 'search',
    );
    $search=new WP_Query($args);
    wp_localize_script( 'main', 'search', array('query'=>json_encode($search->query_vars),));
    while($search->have_posts()){$search->the_post();

      $args = array(
        'class' => 'simpla_sm',
      );
      simpla_card($args);

    } wp_reset_query();
    ajax_paginator_2($search);
    ?>
  </div>
</section>

<?php } get_footer();
