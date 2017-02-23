<?php
/**
 * Template Name: le-projet
 */
?>
<p>bonjour du template projet</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
