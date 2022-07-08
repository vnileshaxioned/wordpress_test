<?php
  /* Template Name: Works */

  get_header();

  if (have_rows('work_page')) {
    while (have_rows('work_page')) {
      the_row();
      ?>
        <?php get_template_part('template-parts/pages/work/content', 'work'); ?>
        <?php get_template_part('template-parts/pages/work/content', 'slider'); ?>
      <?php
    }
  }
  get_footer();
?>