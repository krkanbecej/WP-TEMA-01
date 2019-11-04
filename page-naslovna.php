<?php get_header(); ?>

    
<!-- Telo 1  main-column -->

  <?php
    if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
<?phpget_template_part ('content', get_post_format());?>
    
    <?php the_content(); ?>
    <?php endwhile;
       endif;
    ?>
 
 
 </div><!-- /.row -->
    </div><!-- /.container -->
    </header>
 
<?php get_footer(); ?>
