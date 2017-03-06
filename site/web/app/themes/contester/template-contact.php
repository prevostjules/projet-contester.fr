<?php
/**
 * Template Name: Contact
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="page-auteur">
    <p>Vous avez une question sur le projet ? Vous voulez signaler une erreur ? Ou tout simplement envoyer un mot gentil à la charmante équipe de <a href="https://projet-contester.fr">CONTESTER</a> ?</p>
    <p>Vous pouvez nous joindre ici : <?php echo "<a href='mailto:projetcontester@gmail.com'>";?>projetcontester@gmail.com</a></p>
    <p>N’hésitez pas également à faire un tour sur notre <a href="https://www.facebook.com/projetcontester/" target="blank">page Facebook</a>.</p>
    <p>Ou sur notre <a href="https://twitter.com/projetcontester">compte Twitter</a>.
  </div>

<?php endwhile; ?>
