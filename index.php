<?php get_header(); ?>
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
 </header>
 <?php get_sidebar(); ?>
 
<?php get_footer(); ?>


