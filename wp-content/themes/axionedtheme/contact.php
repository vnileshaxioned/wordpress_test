<?php
  /* Template Name: Contact */

  get_header();
?>
<main>
  <?php
    if (have_rows('contact_page')) {
      while (have_rows('contact_page')) {
        the_row();
        ?>
          <?php get_template_part('template-parts/pages/contact/content', 'contact-us'); ?>
          <?php get_template_part('template-parts/pages/contact/content', 'lets-chat'); ?>
          <?php get_template_part('template-parts/pages/contact/content', 'hiring'); ?>
        <?php
      }
    }
  ?>
</main>
<?php get_footer(); ?>