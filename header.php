<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *  
 * @package WordPress
 * @subpackage 
 * @since 1.0
 * @version 1.0
 */ 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Aleksandar Karapandza">
    <title>Krkina tema</title>
            <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
   <?php wp_head(); ?><!-- Ubacivanje funkcija u head sekciju -->
</head>
<body <?php body_class(); ?>>
  
	<header>
  
  <div id="navigation">
  <div id="meni"  class="container">
   <!-- Ubacivanje  loga u temu logo se može  menjati -->
   <div id="logobox">
  <?php if (has_custom_logo()) the_custom_logo();
  else { ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>  
     <?php } ?>  
     </div><!-- /logobox -->
     <div id="navbox">
  <div class="navbar-header page-scroll">
               <?php wp_nav_menu( array('theme_location' =>'moj_meni' )); ?>
               </div> <!-- /navbox -->
  </div><!-- /meni -->
        </div>  <!-- /navigation -->    
        
        </header> 
    <div class="container">
 
    
      <div class="row">
