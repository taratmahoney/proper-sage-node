<footer class="footer padtop padbottom">
  <div class="container">
    <div class="row">
    <div class="small-12 large-6 columns">
      <h4> Get in touch: </h4>
     <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav no-bullet']);
        endif;
        ?>
      </div>
      <div class="small-12 large-6 columns">
        <p class="footer-right">
          <i class="fa fa-phone" aria-hidden="true"></i> 613-749-5211 <br>
          <i class="fa fa-envelope-o" aria-hidden="true"></i> info@ccprn.com <br>
          <i class="fa fa-map-marker" aria-hidden="true"></i> 30 Colonnade Road,<br>
          Suite 275<br>
          Ottawa, ON<br>
          K2E 7J6
        </p>
      </div>
    </div>
  </div>

  
</footer>

<div class="centered padtop padbottom"><p>Copyright CCPRN 2016</p></div>
