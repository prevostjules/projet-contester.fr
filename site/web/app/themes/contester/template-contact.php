<?php
/**
 * Template Name: Contact
 */
?>
<p>bonkour du template contact</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
