<?php
  $content = get_sub_field('content');

  if ($content) {
  ?>
  <section class="contact-form">
    <div class="wrapper inner-wrapper">
      <?php echo $content; ?>
    </div>
  </section>
<?php } ?>