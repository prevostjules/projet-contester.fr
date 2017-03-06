<?php
/**
 * Template Name: le-projet
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="page-auteur">

    <p><a href="https://projet-contester.fr">CONTESTER</a> est mon projet de fin d’études au Centre de Formation des Journalistes (<a href="http://www.cfjparis.com" target="blank">CFJ</a>), à Paris. Il s’agit d’un média éphémère ayant pour thème les modes de contestation du pouvoir politique en France au XXIe siècle. Il s’arrêtera fin mars.</p>
    <p>Chaque mode de contestation, nouveau ou ancien, efficace ou non, sera traité sous la forme d'un reportage ou d'un papier d’analyse.</p>
    <p>Les articles de ce site permettront au lecteur de comprendre comment chaque type de protestation s’inscrit dans le siècle actuel.</p>
    <p><a href="https://projet-contester.fr">CONTESTER</a> est alimenté par des <a href="https://projet-contester.fr/les-auteurs/">journalistes et étudiants</a> bénévoles. En tant que créateur du projet et rédacteur en chef de ce site, je tiens ici à les remercier pour le travail formidable qu’ils ont effectué, et qu'ils continuent de réaliser.</p>
    <p class="signature"><a href="https://projet-contester.fr/qui-suis-je/">Jules Prévost</a></p>

    <div>

<?php endwhile; ?>
