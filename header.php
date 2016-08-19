<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo moto_favicon(); ?>">

    <title>Moto</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-responsive logo-text" src="<?php echo moto_theme_logo(); ?>" alt="MOTO fleet manager">
                    <img class="img-responsive logo-no-text" src="<?php echo moto_theme_responsive_logo(); ?>" alt="MOTO fleet manager">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbar" class="collapse navbar-collapse">
            <?php
                include 'vendor/menu_walker/menu_walker.php';
                $menu = wp_nav_menu( array(
                    'echo' => false,
                    'items_wrap' => '<ul id="%1$s" class="nav navbar-nav pull-right">%3$s</ul>',
                    'theme_location' => 'main_menu' ,
                    'walker' => new bootsrap_walker_nav_menu()
                ) );
                if ( $menu ){
                    echo $menu;
                }
            ?>
        </div><!--/.nav-collapse -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>