<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<p>Bonjour de la front page</p>
<?php endwhile; ?>
