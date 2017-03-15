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
          <div class="card__item card__item--small description">J'ai fait deux ans en école de bande dessinée. Je publie des illustrations sur la page Facebook <a href="https://www.facebook.com/La-Nuit-Remue-646092082220650/" target="blank">La Nuit Remue</a>, ainsi que sur le blog <a href="http://casesdepart.blog.lemonde.fr" target="blank">Cases Départ</a>, sur la plateforme du journal Le Monde.<br><br></div>
          <div class="card__item card__item--small article-auteur"><b>Illustratrice de :</b> <br><b>Tous les papiers</b></div>
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

      <div class="body-page-auteur">
      <article class="card">
        <div class="card__wrapper">

          <figure class="card__feature-mobile">
            <img src="https://projet-contester.fr/app/uploads/2017/03/Pauline_Jallon_crop.png" class="card__img" alt="waves">
          </figure>



          <div class="card__box">

            <header class="card__item card__header">
              <div class="card__item card__item--small auteur">Pauline Jallon</div>
              <div class="card__item card__item--small description">Étudiante au CFJ, 71e promotion. Je suis branchée longs formats, sujets nouveaux et intéressants. Curieuse invétérée, Alsacienne de cœur mais cosmopolite dans l'âme.<br><br><br></div>
              <div class="card__item card__item--small article-auteur"><b>Auteure de :</b> <a href="https://projet-contester.fr/petitions-en-ligne-trois-petits-clics-et-puis-sen-vont/">Pétitions en ligne :</a> <br><a href="https://projet-contester.fr/petitions-en-ligne-trois-petits-clics-et-puis-sen-vont/">trois petits clics et puis s’en vont</a></div>
            </header>

          </div>

        </div>
        </div>

        <div class="body-page-auteur">
        <article class="card">
          <div class="card__wrapper">

            <figure class="card__feature-mobile">
              <img src="https://projet-contester.fr/app/uploads/2017/03/Romain_Lima_crop.png" class="card__img" alt="waves">
            </figure>



            <div class="card__box">

              <header class="card__item card__header">
                <div class="card__item card__item--small auteur">Romain Lima</div>
                <div class="card__item card__item--small description">Après avoir exploré les amphis de l’Université Paris I Panthéon-Sorbonne et validé un master en Relations internationales, j’ai atterri dans les couloirs du CFJ. À 25 ans passés, je reste curieux de tout, et parfois de n’importe quoi.</div>
                <div class="card__item card__item--small article-auteur"><b>Auteur de :</b> <a href="https://projet-contester.fr/l214-camera-au-poing-contre-les-abattoirs/">L214, caméra au poing contre les abattoirs</a></div>
              </header>

            </div>

          </div>
          </div>

</div>


<?php endwhile; ?>
