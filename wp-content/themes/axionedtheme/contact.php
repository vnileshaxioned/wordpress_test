<?php
  /* Template Name: Contact */

  get_header();

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
  get_footer();
?>