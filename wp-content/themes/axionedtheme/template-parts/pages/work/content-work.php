<?php
  $title = get_sub_field('section_title');
  $all_tags = get_tags();
  $tag_name = $_GET['tag_name'];
  $posts_per_page = 12;
  $args = array(
    'post_type' => 'work',
    'orderby' => 'title',
    'order' =>'ASC',
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'tag' => $tag_name
  );
  
  $query = new WP_Query($args);
  if ($query->have_posts() || $title) { ?>
  <section class="works">
    <div class="wrapper inner-wrapper">
      <?php echo $title ? '<h2 class="main-heading">'. $title .'</h2>' : null; ?>
      <div class="filter-search">
        <ul class="all-tags">
          <?php
            foreach ($all_tags as $tag_list) {
              $tag_slug = $tag_list->slug;
              $tag_name = $tag_list->name; ?>
            <li class="tag-list">
              <a href="#FIXME" class="work-tag" title="<?php echo $tag_name; ?>"><?php echo $tag_name; ?></a>
            </li>
          <?php } ?>
        </ul>
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="s" class="form-content">
          </div>
          <div class="form-group">
            <input type="submit" name="search" class="form-search" value="Search">
          </div>
        </form>
      </div>
      <ul class="our-work">
        <?php
          while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $description = get_the_excerpt();
            $permalink = get_the_permalink();
            $image = get_field('image')['url'] ? get_field('image')['url'] : null;
            $image_alt = get_field('image')['alt'] ? get_field('image')['alt'] : $title;

            if ($title || $description || $image || $permalink) { ?>
            <li class="work-list">
              <a href="<?php echo $permalink; ?>">
                <?php if ($image) { ?>
                  <figure>
                    <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
                  </figure>
                <?php } 
                  if ($title || $description) { ?>
                  <div class="content">
                    <?php 
                      echo $title ? '<h2 class="work-heading">'. $title .'</h2>' : null;
                      echo $description ? '<p class="work-paragraph">'. $description .'</p>' : null;
                    ?>
                  </div>
                <?php } ?>
              </a>
            </li>
          <?php }
            } wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>   
  <?php } ?>