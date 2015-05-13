<?php
/**
 * Created by PhpStorm.
 * User: streetcoder
 * Date: 5/1/15
 * Time: 3:58 AM
 */


use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
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


    <?php include Wrapper\template_path(); ?>


</div><!-- /.wrap -->
<?php
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>