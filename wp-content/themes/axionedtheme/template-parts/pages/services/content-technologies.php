<?php
  if (get_row_layout() == 'tools_and_technologies_section') {
    $title = get_sub_field('section_title');
    $contents = get_sub_field('section_content');
  ?>
  <section class="tools">
    <div class="wrapper services-wrapper">
      <h2 class="tools-heading"><?php echo $title; ?></h2>
      <ul class="tools-outter-box">
        <?php
          foreach ($contents as $content) {
            $tab_title = $content['tab_title'];
            $tab_images = $content['tab_images'];
          ?>
          <li class="tools-list"><a href="#FIXME" class="list-name" data-tab-name="<?php echo $tab_title; ?>" title="<?php echo $tab_title; ?>"><?php echo $tab_title; ?></a></li>
        <?php } ?>
      </ul>
      <ul class="tools-image-box">
        <?php
          foreach ($contents as $content) {
            $tab_title = $content['tab_title'];
            $tab_images = $content['tab_images'];
            foreach ($tab_images as $tab_image) {
            $image = $tab_image['image']['url'];
            $image_alt = $tab_image['image']['alt'];
          ?>
          <li class="tools-image-list" data-list-name="<?php echo $tab_title; ?>">
            <figure class="image-list"><img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>"></figure>
          </li>
        <?php } } ?>
      </ul>
    </div>
  </section>
<?php } ?>