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
<h1>OVO JE NA PAGE PHP U</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi non doloremque nobis veritatis porro incidunt in placeat molestiae iure reiciendis. Sequi, nemo dolores doloremque natus laudantium deserunt soluta magnam molestias!</p>
<h2>samo da se zna ovaj teks se nalazi na stranici page .php</h2>
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

