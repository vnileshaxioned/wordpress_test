<?php
  $args = array(
    'post_type' => 'work',
    'order' => 'ASC',
    'posts_per_page' => 12
  );

  $query = new WP_Query($args);
  if ($query->have_posts()) {
  ?>
  <section class="works">
    <div class="wrapper inner-wrapper">
      <?php echo $title ? '<h2 class="main-heading">'. $title .'</h2>' : null; ?>
      <ul class="our-work">
        <?php
          while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $description = get_the_excerpt();
            $image = get_field('image')['url'] ? get_field('image')['url'] : null;
            $image_alt = get_field('image')['alt'] ? get_field('image')['alt'] : $title;

            if ($title || $description || $image) {
          ?>
          <li class="work-list">
            <?php if ($image) { ?>
              <a href="#FIXME">
                <figure>
                  <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
                </figure>
              <?php echo $image_alt; ?></a>
            <?php }
              if ($title || $description) {
              ?>
              <div class="content">
                <?php 
                  echo $title ? '<h2 class="work-heading">'. $title .'</h2>' : null;
                  echo $description ? '<p class="work-paragraph">'. $description .'</p>' : null;
                ?>
              </div>
            <?php } ?>
          </li>
        <?php }
          } wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>   
<?php } ?>