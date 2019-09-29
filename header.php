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
   <?php wp_head(); ?>
</head>
<body >
  
	<header>
  <div class="navbar-header page-scroll">
  <div id="navigation">
  
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
          <?php wp_nav_menu( array('theme_location' =>'moj_meni' ));  ?>
          
 </div>
</div>
    <div class="container-fluid">
      
 

</header>
  <div class="container">
      <div class="row">
   
