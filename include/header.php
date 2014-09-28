<?php require('include/helpers.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dijifi Style Tile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		
        <link rel="stylesheet" href="assets/css/main-<?php echo $theme ?>.min.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <?php if($theme == 'Pixel') { ?>
            <script src="//use.typekit.net/rnq5vpl.js"></script>
            <script>try{Typekit.load();}catch(e){}</script>
        <?php } else if($theme == 'Press' || $theme == 'PressPlay') { ?>
            <script src="//use.typekit.net/bkb3vps.js"></script>
            <script>try{Typekit.load();}catch(e){}</script>
        <?php } else { ?>
            <script type="text/javascript" src="//use.typekit.net/yzr4enu.js"></script>
            <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <?php }?>
        
    </head>

    <body class="theme-<?php echo $theme ?>">
        <!--[if lt IE 9]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <?php //include_once("assets/img/svgs/arrow-down.svg"); ?>


        <header class="header" role="banner">
            <div class="container">
                <div class="col-sm-8">
                    <h1 class="site-title">Theme <?php echo $theme ?></h1>
                </div>
                <div class="col-sm-4 text-right site-desc">
                    <p>DiJiFi<br>
                    <small>Website and Branding<br>
                    Version 2</small></p>
                </div>
                <div class="col-sm-4">
                        <!-- <nav class="nav">
                            <ul>
                                <li>Link</li>
                                <li>Link</li>
                            </ul>
                        </nav> -->
                </div>
            </div>
        </header> <!-- /.header -->

        <main class="main" role="main">
            <?php if( $contain ) { ?>
                <div class="container">
            <?php } ?>
