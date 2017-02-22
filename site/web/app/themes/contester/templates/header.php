<header class="banner">
  <div class="header-container">

    <div class="logo-page"><a href="https://projet-contester.fr"><img src="https://projet-contester.fr/app/uploads/2017/02/Logo-contester-1.png"/></a></div>

    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
