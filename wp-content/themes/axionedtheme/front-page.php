<?php get_header(); ?>
<main>
  <?php
    if (have_rows('home_page')) {
      while (have_rows('home_page')) {
        the_row();
        ?>
          <?php get_template_part('template-parts/pages/home/content', 'banner'); ?>
          <?php get_template_part('template-parts/pages/home/content', 'work'); ?>
          <?php get_template_part('template-parts/pages/home/content', 'client-testimonial'); ?>
        <?php
      }
    }
  ?>
</main>
<?php get_footer(); ?>