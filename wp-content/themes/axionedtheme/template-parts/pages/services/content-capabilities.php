<?php
  if (get_row_layout() == 'services_and_capabilities_section') {
    $title = get_sub_field('section_title');
    $contents = get_sub_field('service_content');
  ?>
  <section class="capabilities">
    <div class="wrapper services-wrapper">
      <h2 class="service-heading"><?php echo $title; ?></h2>
      <ul class="service-outter-box">
        <?php
          foreach ($contents as $content) {
            $image = $content['content_image']['url'];
            $image_alt = $content['content_image']['alt'];
            $heading = $content['content_title'];
            $paragraph = $content['content_paragraph'];
            $image_side = $content['image_side'];

            if ($image_side == 'Left') {
          ?>
          <li class="service-list">
            <figure class="service-img">
              <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
            </figure>
            <div class="service-content">
              <h3 class="service-title"><?php echo $heading; ?></h3>
              <p class="service-paragraph"><?php echo $paragraph; ?></p>
            </div>
          </li>
          <?php } else { ?>
          <li class="service-list">
            <div class="service-content">
              <h3 class="service-title"><?php echo $heading; ?></h3>
              <p class="service-paragraph"><?php echo $paragraph; ?></p>
            </div>
            <figure class="service-img">
              <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
            </figure>
          </li>
        <?php } } ?>
      </ul>
    </div>
  </section>
<?php } ?>