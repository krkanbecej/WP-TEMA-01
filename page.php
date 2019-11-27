<?php
/**
 * 
 * 
 * ovaj templejt se pruža kroz sve stranice kao podrazumevani
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link 
 *
 * @package WordPress
 * @subpackage 
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>

<header>
<div class="separator"></div>
<!-- Telo 1  main-column -->
<div class="main-column">
  <?php
    if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
<?phpget_template_part ('content', get_post_format());?>
    
    <?php the_content(); ?>
    <?php endwhile;
       endif;
    ?>
 </div><!-- kraj Telo 1  /main-column -->
 
 <?php get_sidebar(); ?>
 </div><!-- /.row -->
    </div><!-- /.container -->
    </header>
<?php get_footer(); ?>

