<?php
  $show_section = get_sub_field('show_section');

  if ($show_section) {
    $title = get_field('section_title', 'option');
    $contents = get_field('client_testimonial', 'option');

    if ($title || $contents) { ?>
    <section class="client-testimonials">
      <div class="wrapper inner-wrapper">
        <?php echo $title ? '<h2 class="main-heading">'. $title .'</h2>' : null; ?>
        <ul class="client-outter-box">
          <?php
            foreach ($contents as $content) {
              $heading = $content['title'];
              $description = $content['description'];
              $image_url = $content['image']['url'] ? $content['image']['url'] : null;
              $image_alt = $content['image']['alt'] ? $content['image']['alt'] : $heading;

              if ($heading || $description || $image_url) { ?>
              <li class="client-inner-box">
                <?php if ($image_url) { ?>
                  <figure>
                    <img src="<?php echo $image_url; ?>" class="client-image" alt="<?php echo $image_alt; ?>">
                  </figure>
                <?php }
                  if ($heading || $description) { ?>
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
    <?php }
      } ?>