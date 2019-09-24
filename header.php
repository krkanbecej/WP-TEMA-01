
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Aleksandar Karapandza">
    <title>Krkina tema</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
   
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header page-scroll">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="navbar-nav ml-auto">
      <?php wp_nav_menu(array(
        'menu' => 'Top Menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
</ul>
      </div>
    </div>
  </nav>

  <div class="container">
      <div class="row">
   
