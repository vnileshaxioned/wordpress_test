<?php
  $background_image = get_sub_field('background_image');
  $title = get_sub_field('section_title');
  $client_testimonials = get_sub_field('client_testimonial');
  $image_url = $background_image['url'] ? $background_image['url'] : null;
  $image_alt = $background_image['alt'] ? $background_image['alt'] : $title;

  if ($image_url || $title || $client_testimonials) {
  ?>
  <section class="client-testimonials">
    <div class="wrapper inner-wrapper">
      <?php if ($image_url) { ?>
        <figure class="section-background-image">
          <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </figure>
      <?php }
        if ($title || $client_testimonials) {
        ?>
        <div class="client-content">
          <?php
            echo $title ? '<h2 class="client-title">'. $title .'</h2>' : null;

            if ($client_testimonials) {
            ?>
            <ul class="client-outter-box">
              <?php 
                foreach ($client_testimonials as $client_testimonial) {
                  $image = $client_testimonial['image']['url'];
                  $image_alt = $client_testimonial['image']['alt'];
                  $title = $client_testimonial['title'];
                  $description = $client_testimonial['description'];

                  if ($title || $image || $description) {
                ?>
                <li class="client-inner-box">
                  <?php if ($image) { ?>
                    <figure>
                      <img src="<?php echo $image; ?>" class="client-image" alt="<?php echo $image_alt; ?>">
                    </figure>
                  <?php }
                    if ($title || $description) {
                    ?>
                    <div class="content">
                      <?php 
                        echo $title ? '<h4 class="client-heading">'. $title .'</h4>' : null;
                        echo $description ? '<p class="client-paragraph">'. $description .'</p>' : null;
                      ?>
                    </div>
                  <?php } ?>
                </li>
              <?php }
                } ?>
              <li class="client-slider-action">
                <a href="#FIXME" class="client-slider-button previous-slide" title="Previous slide">Previous slide</a>
              </li>
              <li class="client-slider-action">
                <a href="#FIXME" class="client-slider-button next-slide" title="Next slide">Next slide</a>
              </li>
            </ul>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>