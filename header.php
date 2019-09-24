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
<nav class="navbar navbar-default navbar-custom ">
    <div class="container-fluid">
      <div class="navbar-header page-scroll">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
      </div>

      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
		  
     <?php wp_nav_menu(array(
        'menu' => 'drugi',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?> 
</ul>
      </div>
    </div>
  </nav>
</header>
  <div class="container">
      <div class="row">
   
