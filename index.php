<?php get_header(); ?>
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

<?php get_footer(); ?>


