<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <div class="body-front-page-mobile">
  <article class="card">
    <div class="card__wrapper" onclick="document.location='https://projet-contester.fr/petitions-en-ligne-trois-petits-clics-et-puis-sen-vont/'">

      <figure class="card__feature-mobile">
        <img src="https://projet-contester.fr/app/uploads/2017/03/pétition-en-ligne-mobile.jpg" class="card__img" alt="waves">
        <img src="https://projet-contester.fr/app/uploads/2017/03/pétition-en-ligne-desktop.jpg" class="card__img-desktop" alt="waves">
      </figure>



      <div class="card__box">

        <header class="card__item card__header">
          <h1 class="card__item card__item--small titre">Pétitions en ligne : trois petits clics et puis s’en vont</h1>
          <div class="card__item card__item--small mode">Mode de contestation : Pétitions en ligne</div>
          <div class="card__item card__item--small auteur">Pauline Jallon</div>
        </header>

        <section class="card__item card__body">
          <div class="chapo">Les pétitions en ligne rencontrent de plus en plus de succès et sont désormais une méthode de mobilisation prisée des Français. Un engagement depuis son canapé… à l'efficacité incertaine.</div>
        </section>

      </div>

    </div>

    </div>

  <div class="body-front-page-mobile">
  <article class="card">
    <div class="card__wrapper" onclick="document.location='https://projet-contester.fr/les-jeunes-font-de-la-politique/'">

      <figure class="card__feature-mobile">
        <img src="https://projet-contester.fr/app/uploads/2017/03/greve-de-la-faim-mobile-front-page.png" class="card__img" alt="waves">
        <img src="https://projet-contester.fr/app/uploads/2017/03/greve-de-la-faim-desktop.jpg" class="card__img-desktop" alt="waves">
      </figure>



      <div class="card__box">

        <header class="card__item card__header">
          <h1 class="card__item card__item--small titre">Les « jeûnes » font de la politique</h1>
          <div class="card__item card__item--small mode">Mode de contestation : Grève de la faim</div>
          <div class="card__item card__item--small auteur">Cyrielle Chazal</div>
        </header>

        <section class="card__item card__body">
          <div class="chapo">Cesser de s'alimenter pour contester n'est pas nouveau, mais la recette d’un jeûne efficace a évolué. Au XXIe siècle, les jeûneurs mettent les bouchées doubles sur la communication.</div>
        </section>

      </div>

    </div>

    </div>



  </article>
<?php endwhile; ?>
