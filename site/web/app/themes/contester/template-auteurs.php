<?php
/**
 * Template Name: Auteurs
 */
?>
<p>bonkour du template auteurs</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
