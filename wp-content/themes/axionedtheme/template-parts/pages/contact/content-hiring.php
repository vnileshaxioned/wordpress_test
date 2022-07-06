<?php
  if (get_row_layout() == 'hiring_section') {
    $title = get_sub_field('hiring_title');
  ?>
  <section class="hiring">
    <div class="wrapper section-wrapper">
      <h6 class="hiring-heading"><?php echo $title; ?></h6>
    </div>
  </section>
<?php } ?>