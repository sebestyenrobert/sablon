<?php $page = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/grids-responsive.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/plugins.css">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="<?php echo $page; ?>">
        <div id="header" class="header">
            <div class="container">
                <div class="wrapper">
                    <div class="pure-g">
                        <div class="pure-u-1-4">
                            <a href="index.php" id="logo" class="logo">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="pure-u-3-4">
                            <div class="menu-container">
                                <ul class="menu list-clear">
                                    <li class="menu-item caps<?php if(basename($_SERVER['PHP_SELF'], '.php') == 'index') : ?> active<?php endif; ?>">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="menu-item caps<?php if(basename($_SERVER['PHP_SELF'], '.php') == 'about') : ?> active<?php endif; ?>">
                                        <a href="about.php">About</a>
                                    </li>
                                    <li class="menu-item caps<?php if(basename($_SERVER['PHP_SELF'], '.php') == 'services') : ?> active<?php endif; ?>">
                                        <a href="services.php">Services</a>
                                    </li>
                                    <li class="menu-item caps<?php if(basename($_SERVER['PHP_SELF'], '.php') == 'contact') : ?> active<?php endif; ?>">
                                        <a href="contact.php">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu-activator">
                                <span class="lines-button x2">
                                    <span class="lines"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page">