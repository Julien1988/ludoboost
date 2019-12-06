<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#606060","text":"#ffffff","border":"#f9f9f9"},"button":{"background":"#f9f9f9","text":"#000000"}},"position":"bottom","content":{"message":"En accédant à ce site, vous acceptez l'utilisation de cookies.","button":"OK"}})});</script>


</head>
<body <?php body_class(); ?>>

  <!-- header -->

  <header class="header">

  <?php 
  $custom_logo_id = get_theme_mod( 'custom_logo' ); 
  $image = wp_get_attachment_image_src ( $custom_logo_id, 'full' );
  ?>

    <nav class="fixed-top header__nav navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="logo-large-view" src="<?php echo $image[0]; ?>" alt="<?php bloginfo('description') ?>"></a>
      
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">

          <?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>
            <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
          
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

  </header>

  