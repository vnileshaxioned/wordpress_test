<?php
  if (get_row_layout() == 'contact_us_section') {
    $title = get_sub_field('section_title');
    $contents = get_sub_field('add_content');
  ?>
  <section class="contact-us">
    <div class="wrapper section-wrapper">
      <h2 class="contact-us-heading"><?php echo $title; ?></h2>
      <ul class="contact-outter-box">
        <?php
          foreach ($contents as $content) {
            $image = $content['image']['url'];
            $image_alt = $content['image']['alt'];
            $heading = $content['title'];
            $address = $content['address'];
            $contact_number = $content['contact_number'];
          ?>
          <li class="contact-list">
            <figure>
              <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
            </figure>
            <div class="contact-content">
              <h3 class="contact-head"><?php echo $heading; ?></h3>
              <p class="contact-address"><?php echo $address; ?></p>
              <p class="tel-number"><a href="tel:+1 917 275 7105" title="<?php echo $contact_number; ?>"><?php echo $contact_number; ?></a></p>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>