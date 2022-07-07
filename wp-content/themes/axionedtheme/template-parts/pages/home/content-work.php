<?php
  if (get_row_layout() == 'work_section') {
    $works = get_sub_field('work_content');
  ?>
  <section class="work">
    <div class="wrapper home-wrapper">
      <ul class="outter-box">
        <?php
          foreach ($works as $work) {
            $post_id = $work->ID;
            $title = $work->post_title;
            $excerpt = $work->post_excerpt;
            $image = get_field('image', $post_id);
          ?>
          <li class="inner-box">
            <a href="#FIXME" class="work-link"><img src="<?php echo $image['url']; ?>" class="work-image" alt="<?php echo $image['alt']; ?>"></a>
            <div class="content">
              <h3 class="work-heading"><?php echo $title; ?></h3>
              <p class="work-paragraph"><?php echo $excerpt; ?></p>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>