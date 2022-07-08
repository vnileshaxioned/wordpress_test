<?php
  $background_image = get_sub_field('background_image');
  $image_url = $background_image['url'];
  $image_alt = $background_image['alt'];
  $title = get_sub_field('section_title');
  $contents = get_sub_field('section_content');

  if ($image_url != '') {
?>
	<section class="global-team">
    <div class="wrapper inner-wrapper">
      <figure class="section-background-image">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ? $image_alt : $title; ?>">
      </figure>
      <div class="global-content">
        <h2 class="about-heading"><?php echo $title ? $title : "Title goes here"; ?></h2>
        <ul class="global-inner-content">
          <?php
            foreach ($contents as $content) {
              $image = $content['content_image']['url'];
              $image_alt = $content['content_image']['alt'];
              $heading = $content['content_title'];
              $all_list = $content['content_list'];
            ?>
            <li class="global-list">
              <figure>
                <img src="<?php echo $image; ?>" alt="<?php echo $image_alt ? $image_alt : $heading; ?>">
              </figure>
              <h3 class="global-list-heading"><?php echo $heading ? $heading : "Heading goes here"; ?></h3>
              <ul class="global-list-content">
                <?php
                  foreach ($all_list as $lists) {
                    $single_list = $lists['list'];
                  ?>
                  <li class="global-inner-list">
                    <span><?php echo $single_list; ?></span>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
	</section>
<?php } ?>