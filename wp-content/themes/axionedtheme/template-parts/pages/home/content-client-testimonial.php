<?php
  if (get_row_layout() == 'client_testimonials') {
    $client_testimonials = get_sub_field('client_testimonial');
  ?>
  <section class="client-testimonials">
    <div class="wrapper home-wrapper">
      <h4 class="client-title">Client testimonials</h4>
      <ul class="client-outter-box">
        <?php foreach ($client_testimonials as $client_testimonial) { ?>
          <li class="client-inner-box">
            <figure>
              <img src="<?php echo $client_testimonial['image']['url']; ?>" class="client-image" alt="<?php echo $client_testimonial['image']['alt']; ?>">
            </figure>
            <div class="content">
              <h5 class="client-heading"><?php echo $client_testimonial['title'] ?></h5>
              <p class="client-paragraph"><?php echo $client_testimonial['description'] ?></p>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>