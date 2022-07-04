<?php
  if (get_row_layout() == 'client_testimonials') {
    $client_testimonials = get_sub_field('client_testimonial');
    ?>
      <section class="client-testimonials">
        <div class="wrapper home-wrapper">
          <ul class="client-outter-box">
            <?php foreach ($client_testimonials as $client_testimonial) { ?>
              <li class="client-inner-box">
                <figure>
                  <img src="<?php echo $client_testimonial['image']['url']; ?>" class="client-image" alt="<?php echo $client_testimonial['image']['alt']; ?>">
                </figure>
                <div class="content">
                  <h3><?php echo $client_testimonial['title'] ?></h3>
                  <p class="client-paragraph"><?php echo $client_testimonial['description'] ?></p>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </section>
    <?php } ?>