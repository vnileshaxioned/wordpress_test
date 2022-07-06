<?php
  if (get_row_layout() == 'hiring_section') {
    $title = get_sub_field('hiring_title');
  ?>
  <section class="hiring">
    <div class="wrapper section-wrapper">
      <?php echo $title; ?>
    </div>
  </section>
<?php } ?>