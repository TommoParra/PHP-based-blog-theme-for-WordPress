<?php get_header(); ?>


<div class="outer_space_normal_to_sm">
  <?php while(have_posts()){the_post(); ?>
    <section class="main content_box">
      <?php the_content(); ?>
    </section>
    <?php } ?>
</div>

<div class="outer_space flex_column_center">
  <h5 class="text_green_medium_color page_section_title_italic">¿Quieres decirnos algo o contarnos tu experiencia?</h5>
</div>

<div class="outer_space flex_column_center">
  <a href="<?= home_url('contacto') ?>" class="button button_md button_black">¡ESCRÍBENOS!</a>
  <div class="line line_md line_green"></div>
</div>

<?php get_footer(); ?>
