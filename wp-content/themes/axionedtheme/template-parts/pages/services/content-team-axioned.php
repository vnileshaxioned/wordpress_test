<?php
  $title = get_sub_field('section_title');
  $contents = get_sub_field('section_content');

  if ($contents != '') {
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
              <img src="<?php echo $image ? $image : "https://dummyimage.com/316x118/000/fff.jpg"; ?>" alt="<?php echo $image_alt ? $image_alt : $heading; ?>">
            </figure>
            <div class="team-content">
              <h4 class="team-title"><?php echo $heading ? $heading : "Heading goes here"; ?></h4>
              <p class="team-paragraph"><?php echo $paragraph ? $paragraph : "Paragraph goes here"; ?></p>
              <ul class="team-content-box">
                <?php
                  foreach ($content_lists as $content_list) {
                    $list = $content_list['list'];
                  ?>
                  <li class="team-content-list">
                    <span><?php echo $list; ?></span>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>