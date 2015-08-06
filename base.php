<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?> data-spy="scroll" data-target="#scroll-nav" data-offset="80">
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="wrap" role="document">

      <!--<div class="content row">-->

        <!-- .container -->
        <div class="container">

          <main class="main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->

          <?php if (Config\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>



        </div><!-- /.container -->

      <!--</div>--><!-- /.content -->

    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer-2');
      wp_footer();
    ?>
  </body>
</html>
