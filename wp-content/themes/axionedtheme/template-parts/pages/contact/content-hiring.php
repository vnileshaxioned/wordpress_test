<?php
  $title = get_sub_field('hiring_title');

  if ($title) {
  ?>
  <section class="hiring">
    <div class="wrapper inner-wrapper">
      <?php echo $title; ?>
    </div>
  </section>
<?php } ?>