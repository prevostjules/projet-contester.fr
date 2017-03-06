<?php
/**
 * Template Name: Qui suis-je ?
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="center-page1">
  <div class="body-page-auteur">
  <article class="card">
    <div class="card__wrapper">

      <figure class="card__feature-mobile">
        <img src="https://projet-contester.fr/app/uploads/2017/03/Jules_Prévost_crop.png" class="card__img" alt="waves">
      </figure>



      <div class="card__box">

        <header class="card__item card__header">
          <div class="card__item card__item--small auteur">Jules Prévost</div>
          <div class="card__item card__item--small description">Je suis étudiant au Centre de formation des journalistes (<a href="http://www.cfjparis.com/" target="blank">CFJ</a>) et en alternance à GEO Magazine.<br><br>Mon intérêt pour la contestation, la protestation, l’opposition et autres mots en « -tion » signifiant une lutte plus ou moins forte contre les pouvoirs politiques, m’a poussé à créer le média éphémère <a href="https://projet-contester.fr/">CONTESTER</a> dans le cadre de mon projet de fin d’études.</div>
        </header>

      </div>
<?php endwhile; ?>
