<?php get_header();

while(have_posts()) { the_post();
?>

<div class="outer_space">
  <section class="full_with_hero simpla_lg">
    <?php
    $config = array(
      'id' => get_post_thumbnail_id(get_the_ID()),
      'class' => 'simpla_amg full_with_hero_img_sm rowcol1',
      'sizes' => [['576', '100']],
      'default_size' => '100',
    );
    responsive_img($config);
    ?>

    <div class="ful_with_hero_title ful_with_hero_title_no_bg_center rowcol1">
      <h1 class="page_section_title_md"><?= get_post_meta(get_the_ID(), 'about_claim', true) ?></h1>
      <p class="text_butterscotch_color page_section_title page_section_title_italic relative_position">Trabajar bien es vivir mejor
        <span class="line_vertical line_butterscotch line_vertical_about"></span>
      </p>
    </div>
  </section>
</div>

<div class="outer_space onlyDesktopB">
  <blockquote class="outer_space wp-block-quote about_primary_quote">
    <p><?= get_post_meta(get_the_ID(), 'about_primary_quote', true) ?></p>
  </blockquote>
</div>

<div class="outer_space">
  <section class="main max_width_768">
    <?php the_content(); ?>
  </section>
</div>

<div class="outer_space img_lateral_cite relative_position">
  <div class="img_over_img_container">
    <?php
    $config = array(
      'slug' => get_post_meta(get_the_ID(), 'imagen_inferior_principal', true),
      'class' => 'simpla_amg full_with_hero_img_vt full_with_hero_img_vt_top',
      'sizes' => [['576', '100']],
      'default_size' => '100',
    );
    responsive_img($config);
    ?>

    <?php
    $config = array(
      'slug' => get_post_meta(get_the_ID(), 'imagen_inferior_secundaria', true),
      'class' => 'simpla_amg img_over_img img_over_img_top',
      'sizes' => [['576', '100']],
      'default_size' => '100',
    );
    responsive_img($config);
    ?>
  </div>

  <blockquote class="wp-block-quote about_secondary_quote">
    <p><?= get_post_meta(get_the_ID(), 'about_secondary_quote', true) ?></p>
  </blockquote>
</div>

<div class="outer_space flex_column_center">
  <h5 class="text_green_medium_color page_section_title_italic">¿Quieres decirnos algo o contarnos tu experiencia?</h5>
</div>

<div class="outer_space flex_column_center">
  <a href="<?= home_url('contacto') ?>" class="button button_md button_black">¡ESCRÍBENOS!</a>
  <div class="line line_md line_green"></div>
</div>

<?php } get_footer(); ?>
