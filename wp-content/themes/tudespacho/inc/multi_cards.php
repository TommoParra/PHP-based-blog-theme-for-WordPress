<?php

function simpla_card ($args = array()) {

  $defaults = array(
    'class'     => 'simpla_sm',
    'title'     => get_the_title(),
    'link'      => get_the_permalink(),
    'image'     => get_the_post_thumbnail_url(),
    'excerpt'   => get_the_excerpt(),
    'date'      => get_the_date(),
    'time'      => false,
    'underline' => false,
    'extras'    => true,
  );
  foreach ($defaults as $key => $default_value) {
    if (!isset($args[$key])) { $args[$key] = $default_value; }
  }

  $simpla_info = simpla_get_info();
  ?>

  <article class="simpla <?= ( $args['class'] ) ? $args['class'] : ''; ?>">
    <a class="simpla_amg" href="<?= $args['link'] ?>">
      <!-- <img class="simpla_img" loading="lazy" src="<?php echo $args['image']; ?>" alt=""> -->
      <?php
      $config = array(
        'id' => get_post_thumbnail_id(get_the_ID()),
        'class' => 'simpla_img',
        'sizes' => [['768', '94']],
        'width' => 400,
        'height' => 700,
        'default_size' => '30',
      );
      responsive_img($config);
       ?>
    </a>
    <div class="simpla_caption">
      <?php if($args['extras'] != false){ ?>
        <p class="simpla_info text_info_color capitalize">
          <?php // OJO: aqui se mostrará solo una categoria ?>
          <a class="simpla_info text_info_color uppercase" href="<?= $simpla_info['category_link'] ?>">
            <?= $simpla_info['category_name'] ?>
          </a>
          <?= ( $args['date'] ) ? '&middot; ' . $args['date'] : ''; ?>
        </p>
      <?php } ?>

      <?php if($args['title'] != false){ ?>
        <h3 class="simpla_title <?= ($args['underline'] ? 'underline' : '') ?>">
          <a class="text_black_color" href="<?= $args['link'] ?>">
            <?= $args['title'] ?>
          </a>
        </h3>
      <?php } ?>
      <?php if($args['excerpt'] != false){ ?>
        <p class="text_light_color simpla_text"><?= $args['excerpt'] ?></p>
      <?php } ?>

      <?php if($args['time']) { ?>
        <p class="text_light_color simpla_reading_time">
        <?php
        $time = reading_time();
        echo $time . ($time == 1 ? ' Minuto ' : ' Minutos ');
        ?>
        de lectura</p>
      <?php } ?>
    </div>
  </article>

<?php }

function simpla_get_info () {
  $category      = get_the_category(get_the_ID())[0];
  $category_link = get_category_link($category);

  return array(
    'category_link' => $category_link,
    'category_name' => $category->name,
  );
}





function get_title_card ($args = array()) {

  $category      = get_the_category(get_the_ID())[0];
  $category_link = get_category_link($category);
  $defaults = array(
    'class' => '',
    'title' => get_the_title(),
    'link'  => get_the_permalink(),
    'date'  => get_the_date(),
    'category' => $category->name,
    'category_link' => $category_link,
  );


  foreach ($defaults as $key => $default_value) {
    if (!isset($args[$key])) { $args[$key] = $default_value; }
  }
  $card = '';

  $card .= "<div class='title_card $args[class]'>";
  $card .= "<a class='title_card_title' href='$args[link]'>$args[title]</a>";
  $card .= "<p class='title_card_info text_info_color capitalize'>";
  $card .= "<a class='title_card_info text_info_color uppercase' href='$args[category_link]'>";
  $card .= $args['category'];
  $card .= "</a>";
  $card .= ( $args['date'] ) ? '&middot; ' . $args['date'] : '';

  $card .= "</p>";
  $card .= "</div>";

  return $card;
}

function title_card ($args = array()) {
  echo get_title_card($args);
}












function simpla_card_lg($args = array()) {
  $defaults = array(
    'class'     => 'simpla_sm',
    'title'     => get_the_title(),
    'link'      => get_the_permalink(),
    'image'     => get_the_post_thumbnail_url(),
    'excerpt'   => get_the_excerpt(),
    'date'      => get_the_date(),
    'time'      => false,
    'underline' => false,
    'extras'    => true,
  );
  foreach ($defaults as $key => $default_value) {
    if (!isset($args[$key])) { $args[$key] = $default_value; }
  }
  $simpla_info = simpla_get_info(); ?>
  <article class="simpla simpla_lg full_with_hero <?= ( $args['class'] ) ? $args['class'] : ''; ?>">
    <a class="simpla_amg rowcol1" href="<?= get_the_permalink(); ?>">
      <!-- <img class="simpla_img" loading="lazy" src="<?= get_the_post_thumbnail_url(); ?>" alt=""> -->
      <?php
      $config = array(
        'id' => get_post_thumbnail_id(get_the_ID()),
        'class' => 'simpla_img',
        'sizes' => [['992', '94'],['1200', '92'],['1450', '88']],
        'width' => 400,
        'height' => 700,
        'default_size' => '70',
      );
      responsive_img($config);
       ?>
    </a>

    <h3 class="ful_with_hero_title ful_with_hero_title_left rowcol1">
      <a class="text_black_color" href="<?= get_the_permalink(); ?>">
        <?= get_the_title(); ?>
      </a>
    </h3>

    <p class="simpla_info text_info_color capitalize">
      <?php // OJO: aqui se mostrará solo una categoria ?>
      <a class="simpla_info text_info_color uppercase" href="<?= $simpla_info['category_link'] ?>">
        <?= $simpla_info['category_name'] ?>
      </a>
      <?= '&middot; ' . get_the_date(); ?>
    </p>
  </article>
<?php }
