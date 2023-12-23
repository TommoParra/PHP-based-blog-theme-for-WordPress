<?php get_header();

while(have_posts()) { the_post();
?>

<div class="outer_space">
  <div class="oniichan relative_position overflow_hidden">
    <div class="img_over_img_container">
      <?php
      $config = array(
        'slug' => get_post_meta(get_the_ID(), 'publicidad_img_lg_slug', true),
        'class' => 'simpla_amg full_with_hero_img_vt',
        'sizes' => [['576', '100']],
        'default_size' => '100',
      );
      responsive_img($config);
      ?>

      <?php
      $config = array(
        'slug' => get_post_meta(get_the_ID(), 'publicidad_img_sm_slug', true),
        'class' => 'simpla_amg img_over_img',
        'sizes' => [['576', '100']],
        'default_size' => '100',
      );
      responsive_img($config);
      ?>
    </div>

    <div class="page_section_header main">
      <div class="icon_hgroup">
        <h1 class="text_black_color page_section_title page_title_lg relative_position">
          <?= get_post_meta(get_the_ID(), 'A_titulo_pagina', true) ?>
        </h1>
        <svg class="icon icon_top_right o_talk_1_icon" viewBox="0 0 183 144" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Talk 1</title>
            <defs>
                <polygon id="path-1" points="0 0 183 0 183 144 0 144"></polygon>
            </defs>
            <g id="Talk-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="img---hablar">
                    <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-2"></g>
                    <path d="M69.5740188,0.335218299 C50.1786408,-1.05739757 21.0879971,1.26525198 7.23253999,19.3578967 C-8.00264661,40.23415 3.07881096,95.9046999 19.6985739,111.215359 C24.6245637,115.750288 32.1161396,118.44138 40.7774159,120.001175 C41.1473902,127.865072 49.3297122,133.836681 49.3297122,140 C49.3297122,140 55.1330372,137.446729 71.5967605,121.914804 C83.9416238,121.758987 95.7775704,120.957178 104.206199,120.957178 C131.917113,120.957178 167.93387,118.171946 179.013712,86.1628811 C190.095169,56.9341788 177.62752,17.9669039 147.1523,9.61607792 L69.5740188,0.335218299 Z" id="Fill-1" fill="#EFF3DE" mask="url(#mask-2)"></path>
                </g>
            </g>
        </svg>
        <h3 class="text_green_medium_color page_section_title page_section_title_italic"><?= get_post_meta(get_the_ID(), 'B_subtitulo_pagina', true) ?></h3>
      </div>

      <?php the_content() ?>

      <div class="page_section_header">
        <p class="page_section_title"><b>¿TIENES DUDAS?</b></p>
        <!-- <p>Telf <?= get_post_meta(get_the_ID(), 'contact_phone', true) ?></p> -->
        <p><a href="mailto:<?= get_post_meta(get_the_ID(), 'contact_email_publicidad', true) ?>" target="_blank"><?= get_post_meta(get_the_ID(), 'contact_email_publicidad', true) ?></a></p>
      </div>

      <div class="flex_column_center relative_position">
        <button class="button button_md button_orange">DESCARGAR PDF</button>
        <div class="icon leaves_1_icon">
          <img src="<?php echo get_template_directory_uri() . '/assets/leaves_1.png' ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="outer_space">
  <div class="form_shadow">
    <div class="flex_column_center page_section_header">
      <h4 class="text_black_color page_title_lg page_section_title relative_position">
        Sponsors
        <svg class="icon heart_sponsor" viewBox="0 0 50 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Heart Green 50</title>
            <defs>
                <polygon id="path-1" points="0.932142832 0.111111111 42.9321428 0.111111111 42.9321428 49.1111111 0.932142832 49.1111111"></polygon>
            </defs>
            <g id="Heart-Green-50" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group-3-Copy" transform="translate(3.067857, -0.111111)">
                    <mask id="mask-2" fill="white">
                        <use xlink:href="#path-1"></use>
                    </mask>
                    <g id="Clip-2"></g>
                    <path d="M42.6789417,5.37346785 C42.1350762,2.92174086 40.2736878,0.567629252 37.6858248,0.173730594 C33.4786114,-0.466268796 29.4248329,3.93467223 27.8987681,7.20513098 C25.0159211,13.381022 25.1621525,19.7909836 23.6778681,26.2109131 C20.0555802,19.4053342 18.5723763,12.0656204 12.5156603,6.59915948 C8.09234147,2.60724063 2.01725648,0.835040382 1.0174085,8.21050059 C0.717021893,10.4271258 1.25764575,12.6643739 1.90055953,14.813287 C5.79766153,27.8411586 13.7182872,39.0988922 23.4930979,48.7861869 C23.6731858,48.9645756 23.9058594,49.157744 24.1587028,49.1010309 C24.3146589,49.0659718 24.4291948,48.9432652 24.5325652,48.8267454 C32.2727429,40.1248848 37.6454851,29.8309311 40.5254507,18.7649911 C41.6207452,14.5554999 43.6085554,9.88336688 42.7016328,5.48070727 C42.6944292,5.4449608 42.6865054,5.40921432 42.6789417,5.37346785" id="Fill-1" fill="#A5C81A" mask="url(#mask-2)"></path>
                </g>
            </g>
        </svg>
      </h4>
      <p class="text_light_color page_section_title page_section_description">Háblanos sobre ti y nos pondremos en contacto</p>
    </div>

    <form class="outer_space form_grid relative_position form_margin_button Formative" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
      <input type="hidden" name="action"   value="tp_form_handler">
      <input type="hidden" name="link"     value="<?php echo home_url( $wp->request ); ?>">
      <input type="text"   name="a00"      value="" placeholder="jeje" hidden>

      <div class="mateput">
        <input class="mateputInput" type="text" name="name" autocomplete="off" value="" required>
        <label for="name" class="mateputLabel">
          <span class="mateputName">Nombre</span>
        </label>
      </div>

      <div class="mateput">
        <input class="mateputInput" type="text" name="business" autocomplete="off" value="" required>
        <label for="business" class="mateputLabel">
          <span class="mateputName">Empresa</span>
        </label>
      </div>

      <div class="mateput">
        <input class="mateputInput" type="text" name="email" autocomplete="off" value="" required>
        <label for="email" class="mateputLabel">
          <span class="mateputName">Email</span>
        </label>
      </div>

      <div class="mateput">
        <input class="mateputInput" type="text" name="sector" autocomplete="off" value="" required>
        <label for="sector" class="mateputLabel">
          <span class="mateputName">Sector</span>
        </label>
      </div>

      <div class="mateput_2_items">
        <div class="mateput">
          <input class="mateputInput" type="tel" name="phone" autocomplete="off" value="" required>
          <label for="phone" class="mateputLabel">
            <span class="mateputName">Teléfono</span>
          </label>
        </div>

        <div>
          <p class="mateput_p page_section_title">Tipo de patrocinio</p>
          <div class="showcase_sm showcase_3">
            <div class="form_pair_elements">
              <input type="radio" id="option1" name="sponsorship" value="Articulo" required>
              <label class="mateput_p" for="option1">Artículo</label>
            </div>

            <div class="form_pair_elements">
              <input type="radio" id="option2" name="sponsorship" value="Banner">
              <label class="mateput_p" for="option2">Banner</label>
            </div>

            <div class="form_pair_elements">
              <input type="radio" id="option3" name="sponsorship" value="Ambos">
              <label class="mateput_p" for="option3">Ambos</label>
            </div>
          </div>
        </div>

      </div>

      <div class="mateput mateput_for_textarea">
        <textarea class="mateputInput" type="text" name="info" autocomplete="off" value="" rows="6" required></textarea>
        <label for="info" class="mateputLabel">
          <span class="mateputName">¿Por qué has elegido nuestro blog?</span>
        </label>
      </div>

      <div class="mateput_corner">
        <div class="form_pair_elements form_pair_elements_start">
          <input type="checkbox" id="accept" name="terms" value="accept" required>
          <label class="mateput_p_xs text_light_color" for="accept">Acepto que mis datos sean tratados con la finalidad de responder mi consulta de acuerdo a la  <a style="text-decoration: underline" href="<?= home_url('politica-de-privacidad'); ?>" target="_blank" class="text_black_color"><b>Política de Privacidad</b></a> de tudespachoencasa.com</label>
        </div>
      </div>

      <!-- <button type="submit" class="button button_sm button_black flex_row_center_between flex_no_wrap absolute_position absolute_corner">SEND MESSAGE <span class="line line_sm line_white line_to_right"></span></button> -->

      <input class="token" type="hidden" name="token" value="">
      <!-- <div class="btn" onclick="send_contact_mail()">Enviar</div> -->
      <div onclick="send_contact_mail()" class="button button_sm button_black flex_row_center_between flex_no_wrap absolute_position absolute_corner">SEND MESSAGE <span class="line line_sm line_white line_to_right"></span></div>
    </form>
  </div>
</div>

<?php } get_footer(); ?>
