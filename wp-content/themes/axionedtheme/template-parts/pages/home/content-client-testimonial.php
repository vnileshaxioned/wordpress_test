<?php
  $client_testimonials = get_sub_field('client_testimonial');

  if ($client_testimonials) {
  ?>
  <section class="client-testimonials">
    <div class="wrapper home-wrapper">
      <h4 class="client-title">Client testimonials</h4>
      <ul class="client-outter-box">
        <?php
          foreach ($client_testimonials as $client_testimonial) {
            $heading = $client_testimonial['title'];
            $description = $client_testimonial['description'];
            $image_url = $client_testimonial['image']['url'] ? $client_testimonial['image']['url'] : null;
            $image_alt = $client_testimonial['image']['alt'] ? $client_testimonial['image']['url'] : $heading;

            if ($heading || $description || $image_url) {
          ?>
          <li class="client-inner-box">
            <?php if ($image_url) { ?>
              <figure>
                <img src="<?php echo $image_url; ?>" class="client-image" alt="<?php echo $image_alt; ?>">
              </figure>
            <?php }
              if ($heading || $description) {
              ?>
              <div class="content">
                <?php
                  echo $heading ? '<h5 class="client-heading">'. $heading .'</h5>' : null;
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
    </div>
  </section>
<?php } ?>