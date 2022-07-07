<?php
  $background_image = get_sub_field('background_image');
  $title = get_sub_field('section_title');
  $paragraph = get_sub_field('paragraph');
  $image_url = $background_image['url'];
  $image_alt = $background_image['alt'];
?>
<section class="about">
  <div class="wrapper inner-wrapper">
    <figure class="section-background-image">
      <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
    </figure>
    <div class="about-content">
      <h2 class="about-heading"><?php echo $title; ?></h2>
      <?php echo $paragraph; ?>
    </div>
  </div>
</section>