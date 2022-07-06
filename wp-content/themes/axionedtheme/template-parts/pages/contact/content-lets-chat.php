<?php
  if (get_row_layout() == 'let_chat_section') {
    $title = get_sub_field('section_title');
    $contents = get_sub_field('section_content');
  ?>
  <section class="lets-chat">
    <div class="wrapper section-wrapper">
      <h4 class="contact-us-heading"><?php echo $title; ?></h4>
      <ul class="contact-outter-box">
        <?php
          foreach ($contents as $content) {
            $image = $content['profile_image']['url'];
            $image_alt = $content['profile_image']['alt'];
            $icon = $content['chat_icon']['url'];
            $icon_alt = $content['chat_icon']['alt'];
            $name = $content['name'];
            $position = $content['position'];
            $url_title = $content['url_title'];
            $chat_url = $content['chat_url'];
          ?>
          <li class="chat-list">
            <figure>
              <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
            </figure>
            <div class="chat-content">
              <h5 class="chat-head"><?php echo $name; ?></h5>
              <p class="chat-position"><?php echo $position; ?></p>
              <p><a href="<?php echo $chat_url; ?>" class="chat-link" target="_blank" title="<?php echo $url_title; ?>"><img src="<?php echo $icon; ?>" alt="<?php echo $icon_alt; ?>"><?php echo $url_title; ?></a></p>
            </div>
          </li>
          <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>