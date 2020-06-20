<!doctype html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap Link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-light display-flex container-fluid">
      <a class="navbar-brand ml-lg-4 display-inline-flex " href="#"><?php dynamic_sidebar( 'header-logo' ); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse display-flex flex-fill" id="navbarSupportedContent">
        <?php
         wp_nav_menu( array( 'Top_Menu' => 'header-menu' ,
                             'menu_class'=> 'navbar-nav'
         ));
          ?>
      </div>
      
        <?php dynamic_sidebar( 'Column_2' ); ?>
    
    </nav>
  </head>