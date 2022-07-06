<?php
/* Template Name: Services */

  get_header();
?>
<main>
  <?php
    if (have_rows('services_page')) {
      while (have_rows('services_page')) {
        the_row();
        ?>
          <?php get_template_part('template-parts/pages/services/content', 'capabilities'); ?>
          <?php get_template_part('template-parts/pages/services/content', 'team-axioned'); ?>
          <?php get_template_part('template-parts/pages/services/content', 'technologies'); ?>
        <?php
      }
    }
  ?>
</main>
<?php get_footer(); ?>