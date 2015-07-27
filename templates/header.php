<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner" role="banner">
  <div class="container">
    <nav class="navbar navbar-default">

      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url') ?>">List Guru</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
          endif;
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </div>
</header>



