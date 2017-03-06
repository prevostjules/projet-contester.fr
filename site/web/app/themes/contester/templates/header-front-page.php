<header class="banner">
  <!-- Début de mon code pour le header front-page -->

    <div class="header-container">

<div class="menu-mobile">
                <input id="burger" type="checkbox" />
              <label for="burger">
              <span></span>
              <span></span>
              <span></span>
              </label>



              <nav>
              <ul>
              <div class="test"><a href="https://projet-contester.fr/le-projet/ ">Le projet</a></div class="test">
              <div class="test"><a href="https://projet-contester.fr/qui-suis-je/">Qui suis-je ?</a></div class="test">
              <div class="test"><a href="https://projet-contester.fr/les-auteurs/">Les auteurs</a></div class="test">
              <div class="test"><a href="https://projet-contester.fr/contact/">Contact</a></div class="test">
              </ul>
              </nav>
</div>
      <div class="header-top">
        <div class="align"><img src="https://projet-contester.fr/app/uploads/2017/02/facebook.png"/></div>
        <div class="logo"><a href="https://projet-contester.fr"><img src="https://projet-contester.fr/app/uploads/2017/02/Logo-contester-5.png"/></a></div>
        <div class="header-social-media">
          <div class="facebook"><a href="https://www.facebook.com/projetcontester/" target="_blank"><img src="https://projet-contester.fr/app/uploads/2017/02/facebook.png"/></a></div>
          <div class="twitter"><a href="https://twitter.com/projetcontester" target="_blank"><img src="https://projet-contester.fr/app/uploads/2017/02/twitter.png"/></a></div>
        </div>
      </div>
      </div>

      <div class="title">
  <!-- Fin de mon code pour le header front-page -->
    <a class="brand1" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
      <div class="menu-desktop-container">
      <div class="menu-desktop">
      <div class='menu1'><a href="https://projet-contester.fr/le-projet/ ">Le projet</a></div>
        <div class='menu2'><a href="https://projet-contester.fr/qui-suis-je/">Qui-suis-je ?</a></div>
        <div class="menu3"><a href="https://projet-contester.fr/les-auteurs/">Les auteurs</a></div>
        <div class="menu4"><a href="https://projet-contester.fr/contact/">Contact</a></div>
</div>
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>

</header>
