<?php
/**
 * Template Name: Auteurs
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="top-page-auteur">Ils ont enquêté, fouiné, pris des photos ou dessinés : ce sont les journalistes du projet <a href="https://projet-contester.fr/">CONTESTER</a>. La liste est incomplète, mais va s'enrichir au fur et à mesure des publications.</div>
  <div class="center-page">
  <div class="body-page-auteur">
  <article class="card">
    <div class="card__wrapper">

      <figure class="card__feature-mobile">
        <img src="https://projet-contester.fr/app/uploads/2017/03/blanche_sabbah-crop.png" class="card__img" alt="waves">
      </figure>



      <div class="card__box">

        <header class="card__item card__header">
          <div class="card__item card__item--small auteur">Blanche Sabbah</div>
          <div class="card__item card__item--small description">Je suis fan de dessins, j'ai fait des études de BD et de Lettres. Je publie des illustrations sur la page Facebook <a href="https://www.facebook.com/La-Nuit-Remue-646092082220650/" target="blank">La Nuit Remue</a> !<br><br><br></div>
          <div class="card__item card__item--small article-auteur"><b>Illustratrice de :</b> <br>Tous les papiers</div>
        </header>

      </div>

    </div>
    </div>

    <div class="body-page-auteur">
    <article class="card">
      <div class="card__wrapper">

        <figure class="card__feature-mobile">
          <img src="https://projet-contester.fr/app/uploads/2017/03/Cyrielle_Chazal_crop.png" class="card__img" alt="waves">
        </figure>



        <div class="card__box">

          <header class="card__item card__header">
            <div class="card__item card__item--small auteur">Cyrielle Chazal</div>
            <div class="card__item card__item--small description">Diplômée en droit de l'environnement (master 2) et droit public (licence), j'alterne entre le <a href="http://www.cfjparis.com" target="blank">CFJ</a> et <a href="https://www.greenunivers.com/" target="blank">GreenUnivers</a>. Je m'intéresse particulièrement à l'actualité économique de la transition énergétique.</div>
            <div class="card__item card__item--small article-auteur"><b>Auteure de :</b> <a href="https://projet-contester.fr/les-jeunes-font-de-la-politique/">Les « jeûnes » font de la politique</a></div>
          </header>

        </div>

      </div>
      </div>

</div>


<?php endwhile; ?>
