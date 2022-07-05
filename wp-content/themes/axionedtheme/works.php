<?php
  /* Template Name: Works */

  get_header();
?>
<main>
  <?php
    if (have_rows('work_page')) {
      while (have_rows('work_page')) {
        the_row();
        echo 'yes';
        ?>
          <?php get_template_part('template-parts/pages/work/content', 'work'); ?>
          <?php get_template_part('template-parts/pages/work/content', 'slider'); ?>
        <?php
      }
    }
  ?>
</main>
<?php get_footer(); ?>