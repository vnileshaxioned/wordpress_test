<?php
  if (get_row_layout() == 'banner_section') {
    $video = get_sub_field('banner_video');
    $content = get_sub_field('banner_content');
  ?>
  <section class="banner">
    <div class="wrapper home-wrapper">
      <video class="banner-video" autoplay loop muted>
        <source src="<?php echo $video['url']; ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="banner-content">
        <?php echo $content; ?>
      </div>
    </div>
  </section>
<?php } ?>