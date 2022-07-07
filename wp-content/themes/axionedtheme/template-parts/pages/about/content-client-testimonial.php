<?php
  $background_image = get_sub_field('background_image');
  $image_url = $background_image['url'];
  $image_alt = $background_image['alt'];
  $title = get_sub_field('section_title');
  $client_testimonials = get_sub_field('client_testimonial');
?>
<section class="client-testimonials">
  <div class="wrapper inner-wrapper">
    <figure class="section-background-image">
      <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
    </figure>
    <div class="client-content">
      <h4 class="client-title"><?php echo $title; ?></h4>
      <ul class="client-outter-box">
        <?php 
          foreach ($client_testimonials as $client_testimonial) {
            $image = $client_testimonial['image']['url'];
            $image_alt = $client_testimonial['image']['alt'];
          ?>
          <li class="client-inner-box">
            <figure>
              <img src="<?php //echo $; ?>" class="client-image" alt="<?php //echo $; ?>">
            </figure>
            <div class="content">
              <h5 class="client-heading"><?php //echo $; ?></h5>
              <p class="client-paragraph"><?php //echo $; ?></p>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>