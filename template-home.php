<?php
/**
 * Created by PhpStorm.
 * User: streetcoder
 * Date: 5/1/15
 * Time: 4:13 AM
 */

/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>