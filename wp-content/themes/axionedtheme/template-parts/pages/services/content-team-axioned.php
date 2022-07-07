<?php
  if (get_row_layout() == 'team_axioned_section') {
    $title = get_sub_field('section_title');
    $contents = get_sub_field('section_content');
  ?>
  <section class="team_axioned">
    <div class="wrapper services-wrapper">
      <h2 class="team-heading"><?php echo $title; ?></h2>
      <ul class="team-outter-box">
        <?php
          foreach ($contents as $content) {
            $image = $content['content_image']['url'];
            $image_alt = $content['content_image']['alt'];
            $heading = $content['content_title'];
            $paragraph = $content['content_paragraph'];
            $content_lists = $content['content_list'];
          ?>
          <li class="team-list">
            <figure class="team-img">
              <img src="<?php  echo $image; ?>" alt="<?php  echo $image_alt; ?>">
            </figure>
            <div class="team-content">
              <h3 class="team-title"><?php  echo $heading; ?></h3>
              <p class="team-paragraph"><?php  echo $paragraph; ?></p>
              <ul class="team-content-box">
                <?php
                  foreach ($content_lists as $content_list) {
                    $list = $content_list['list'];
                  ?>
                  <li class="team-content-list"><?php echo $list; ?></li>
                <?php } ?>
              </ul>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>