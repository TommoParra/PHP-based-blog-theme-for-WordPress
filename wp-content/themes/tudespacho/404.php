<?php get_header(); ?>

<main class="outer_space flex_column_center">
  <div class="error_animate">
    <span class="number">4</span>
    <div class="blobsita">
      <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#F3990D" d="M40.4,-69C52,-63.2,60.9,-51.8,67.8,-39.3C74.7,-26.9,79.5,-13.4,78.9,-0.3C78.4,12.8,72.4,25.5,64.8,36.8C57.3,48.1,48.2,58,37.1,67.9C26.1,77.8,13,87.8,0.1,87.6C-12.8,87.4,-25.6,77,-38.9,68.4C-52.1,59.7,-65.7,52.7,-75.8,41.6C-85.9,30.5,-92.5,15.3,-92.9,-0.2C-93.3,-15.7,-87.4,-31.4,-78.5,-44.7C-69.7,-58,-57.9,-68.9,-44.3,-73.5C-30.7,-78.2,-15.4,-76.6,-0.5,-75.8C14.4,-74.9,28.7,-74.8,40.4,-69Z" transform="translate(100 100)" />
      </svg>
    </div>
    <span class="number">4</span>
  </div>

  <div class="ooops">
    <p class="bigooops">¡OOOPS!</p>
    <p class="bigooops">¡Parece que esta página no está disponible!</p>
    <p class="text">¡Inténtalo de nuevo desde la Home Page!</p>
  </div>
</main>

<div class="outer_space flex_column_center">
  <a href="<?= home_url() ?>" class="button button_md button_black">¡Ir a Home!</a>
  <div class="line line_md line_orange"></div>
</div>

<?php get_footer(); ?>
