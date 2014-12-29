<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
        	<?php 
		        wp_title( '|', true, 'right'); 
		        bloginfo( 'name');
		    ?>
        </title>

        <?php wp_head(); ?>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-default navbar-fixed-top header headhesive--clone animated slideInDown duration-1 " role="navigation" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-this">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand animated slideInDown delay-2" href="index.php">
            <img class="head-logo" src="http://localhost:8888/www.healthyselfieapp.com/wp-content/uploads/2014/12/HealthySelfie-Logo-e1418723809112.png" >
        </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-this">
	          <?php
		          $defaults = array(
		            'container' => false,
		            'menu_class' => 'nav navbar-nav navbar-right animated fadeInRight'
		          );
		          wp_nav_menu( $defaults );
		        ?>
        </div>
      </div>
    </nav>






