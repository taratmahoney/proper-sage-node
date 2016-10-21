<header class="banner">
<div class="login">
  <p><a href="">Login</a> | <a href="">FR </a></p>
</div>
    <a class="brand" href="/home"><img class="brand-img" src="/wp-content/uploads/2016/10/CCPRN-logo.png"></a>
  <nav class="nav-collapse" role="navigation">    
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
  </nav>
</header>
