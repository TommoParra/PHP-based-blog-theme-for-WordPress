<?php
if(post_password_required()) {
  return;
}
?>

<div class="comments_area showcase">
  <?php
  $args = array(
    'fields' => array(
      'url' => '',
      'cookies' => '',
      'author' => '<div class="mateput">
                    <input class="mateputInput" type="text" name="author" autocomplete="off" size="30" maxlength="245" required>
                    <label for="author" class="mateputLabel">
                      <span class="mateputName">Nombre</span>
                    </label>
                  </div>',
      'email' => '<div class="mateput">
                    <input class="mateputInput" type="email" name="email" autocomplete="off" size="30" maxlength="100" required aria-describedby="email-notes">
                    <label for="email" class="mateputLabel">
                      <span class="mateputName">Email</span>
                    </label>
                  </div>',
    ),
    'comment_field' => '<div class="mateput full_column_item mateput_for_textarea comment_container">
                          <textarea class="mateputInput" name="comment" autocomplete="off" value="" rows="3" maxlength="1000" required></textarea>
                          <label for="comment" class="mateputLabel">
                            <span class="mateputName">Comentario</span>
                          </label>
                        </div>',
    'comment_notes_before' => '',
    'title_reply_before' => '<div class="flex_column_center page_section_header">
                              <h3 class="comment-reply-title page_title_lg">Comentarios</h3>
                              <p class="text_light_color info_box onlyDesktopB">Déjanos tu opinión o consultas</p>
                            </div>',
    'title_reply_after' => '',
    'title_reply' => '',
    'submit_button' => '<button type="submit" class="button button_sm button_black flex_row_center_between flex_no_wrap">SEND MESSAGE <span class="line line_sm line_white line_to_right"></span></button>',
    'class_form' => 'form_comments',
  );

  comment_form($args);
  ?>

  <?php
  if(have_comments()) { ?>
    <ol class="comment_list">
      <?php
      $args = array(
        'style' => 'ol',
        'reply_text' => __('Reply'),
        'avatar_size' => 64,
        'per_page' => 1,
      );

      wp_list_comments($args);
      ?>
    </ol>

    <?php
    if(!comments_open() && get_comments_number()) { ?>
      <p class="no_comments"><?php esc_html_e('Comentarios están desactivados.', 'homeofficetheme') ?></p>
    <?php } ?>
  <?php } ?>
</div>
