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
  <div id="navigation">
				  
			 
          <?php wp_nav_menu( array('theme_location' =>'moj_meni' ));  ?>
          <div class="float-right">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
      </div>
</div>
    <div class="container-fluid">
      

      <div class="navbar-header page-scroll">

      <nav class="navbar navbar-default navbar-custom ">
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
		  
      <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</ul>
      </div>
      </div> 
    </div>
  </nav>
</header>
  <div class="container">
      <div class="row">
   
