<?php
  if (get_row_layout() == 'our_work') {
    $args = array(
      'post_type' => 'work',
      'order' => 'ASC',
      'posts_per_page' => -1
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
      ?>
        <section class="works">
          <div class="wrapper work-wrapper">
            <h2 class="work-title">Our work</h2>
            <ul class="our-work">
            <?php
            while ($query->have_posts()) {
              $query->the_post();
              $image = get_field('image');
              $title = get_the_title();
              $description = get_the_excerpt();
              ?>
                <li class="work-list">
                  <a href="#FIXME"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php echo $title; ?></a>
                  <div class="content">
                    <h2 class="work-heading"><?php echo $title; ?></h2>
                    <p class="work-paragraph"><?php echo $description; ?></p>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        </section>   
      <?php } } wp_reset_postdata(); ?>