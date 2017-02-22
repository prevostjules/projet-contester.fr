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
              <li><a href="#">LE PROJET</a></li>
              <li><a href="#">QUI SUIS-JE ?</a></li>
              <li><a href="#">LES AUTEURS</a></li>
              <li><a href="#">CONTACT</a></li>
              </ul>
              </nav>
</div>
      <div class="header-top">
        <div class="align"><img src="https://projet-contester.fr/app/uploads/2017/02/facebook.png"/></div>
        <div class="logo"><img src="https://projet-contester.fr/app/uploads/2017/02/Logo-contester-1.png"/></div>
        <div class="header-social-media">
          <div class="facebook"><img src="https://projet-contester.fr/app/uploads/2017/02/facebook.png"/></div>
          <div class="twitter"><img src="https://projet-contester.fr/app/uploads/2017/02/twitter.png"/></div>
        </div>
      </div>
      </div>

      <div class="title">
  <!-- Fin de mon code pour le header front-page -->
    <a class="brand1" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
      <div class="menu-desktop-container">
      <div class="menu-desktop">
      <div class='menu1'>LE PROJET</div>
        <div class='menu2'>QUI SUIS-JE ?</div>
        <div class="menu3">LES AUTEURS</div>
        <div class="menu4">CONTACT</div>
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
