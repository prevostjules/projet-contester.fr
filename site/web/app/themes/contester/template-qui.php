<?php
/**
 * Template Name: Qui suis-je ?
 */
?>
<p>bonkour du template qui suis-je</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
