
<?php get_header(); ?>
<header>
           <h2>da napišemo nešto u hederu</h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non at ut aliquid exercitationem quis voluptatem facilis repellat, incidunt sapiente veniam consequatur illum, itaque magni. Ea ut quaerat repellendus sunt animi.</p>
        </header> 
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
 
 
 <h1> Da vidimo dali ovo radi</h1>

 <?php get_footer(); ?>