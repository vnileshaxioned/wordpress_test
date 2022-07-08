<?php
  $background_image = get_sub_field('background_image');
  $image_url = $background_image['url'];
  $image_alt = $background_image['alt'];
  $title = get_sub_field('section_title');
  $client_testimonials = get_sub_field('client_testimonial');

  if ($image_url != '') {
?>
  <section class="client-testimonials">
    <div class="wrapper inner-wrapper">
      <figure class="section-background-image">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ? $image_alt : $title; ?>">
      </figure>
      <div class="client-content">
        <h2 class="client-title"><?php echo $title ? $title : "Title goes here"; ?></h2>
        <ul class="client-outter-box">
          <?php 
            foreach ($client_testimonials as $client_testimonial) {
              $image = $client_testimonial['image']['url'];
              $image_alt = $client_testimonial['image']['alt'];
              $title = $client_testimonial['title'];
              $description = $client_testimonial['description'];
            ?>
            <li class="client-inner-box">
              <figure>
                <img src="<?php echo $image ? $image : "https://dummyimage.com/200x54/000/fff.jpg"; ?>" class="client-image" alt="<?php echo $image_alt; ?>">
              </figure>
              <div class="content">
                <h4 class="client-heading"><?php echo $title ? $title : "Title goes here"; ?></h4>
                <p class="client-paragraph"><?php echo $description ? $description : "Description goes here"; ?></p>
              </div>
            </li>
            <li class="client-slider-action">
              <a href="#FIXME" class="client-slider-button previous-slide" title="Previous slide">Previous slide</a>
            </li>
            <li class="client-slider-action">
              <a href="#FIXME" class="client-slider-button next-slide" title="Next slide">Next slide</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
<?php } ?>