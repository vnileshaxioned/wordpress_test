<?php
  $title = get_sub_field('section_title');
  $contents = get_sub_field('service_content');

  if ($contents != '') {
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
          ?>
          <li class="service-list <?php echo $image_side; ?>">
            <figure class="service-img">
              <img src="<?php echo $image ? $image : "https://dummyimage.com/468x234/000/fff.jpg"; ?>" alt="<?php echo $image_alt ? $image_alt : $heading; ?>">
            </figure>
            <div class="service-content">
              <h3 class="service-title"><?php echo $heading ? $heading : "Heading goes here"; ?></h3>
              <p class="service-paragraph"><?php echo $paragraph ? $paragraph : "Paragraph goes here"; ?></p>
            </div>
          </li>
          <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>