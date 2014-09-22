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

        <!--<script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
        <script src="//use.typekit.net/yzr4enu.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

    </head>

    <body class="theme-<?php echo $theme ?>">
        <!--[if lt IE 9]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <?php //include_once("assets/img/svgs/arrow-down.svg"); ?>

        <header class="header" role="banner">
            <div class="container">
                <div class="col-sm-5">
                    <h1 class="site-title">DiJiFi</h1>
                </div>
                <div class="col-sm-7 site-desc">
                    <nav class="nav">
                        <ul class="clearfix">
                            <li class="col-xs-6 col-sm-3">Photos</li>
                            <li class="col-xs-6 col-sm-3 active">Video</li>
                            <li class="col-xs-6 col-sm-3">Film</li>
                            <li class="col-xs-6 col-sm-3">Audio</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header> <!-- /.header -->

	<main>

		<header>
			<div class="row no-pad">
				<img class="col-sm-4" src="assets/img/girl-at-bar-wide.jpg" alt="">
				<img class="mobile-hide col-sm-4" src="assets/img/girl-at-bar-wide.jpg" alt="">
				<img class="col-sm-4 mobile-hide " src="assets/img/girl-at-bar-wide.jpg" alt="">
			</div>
			<div class="container">
				<div class="col-sm-12 text-center">
					<h1>Video Transfer</h1>
					<div class="clearfix">
						<div class="note col-sm-8"><img src="http://placehold.it/800x300" alt="" class="full-img">[image of person scratching head looking at a VHS next to their laptop]</div>
						<p class="col-sm-4 lead">Want to watch that copy of Looney Toons again? We've got you covered. VHS to DVD, Blue-Ray</p>
					</div>
					
					<h3>We don't just digitize, we make it <em>better</em>.</h3>
					<p>We clean up the video quality by removing fuzzy edges, reducing the noise, and stabilizing the image.</p>
					<div class="note"><img src="http://placehold.it/800x500" alt="" class="full-img">[side by side same video, before and after]</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="col-sm-6">
				<section class="collection collection--formats">
					<header>
						<h3>Formats</h3>
						<p>We transfer the following formats:</p>
					</header>

					<ul>
						<li>VHS, VHS-C, SVHS</li>
						<li>Video 8, Hi8</li>
						<li>Digital 8, MiniDV</li>
						<li>Betamax, MicroMV</li>
						<li>DVCam, DVC Pro</li>
					</ul>
					<div class="h3 text-center">&darr; To &darr;</div>
					<ul>
						<li>DVD Video (MPEG-2)</li>
						<li>Blu-Ray (MPEG-2)</li>
						<li>MOV or AVI (SD)</li>
					</ul>
					<h4>Know what you want?</h4>
					<p>Head to the estimator to price out your order.</p>
					<h4>Completely confused?</h4>
					<p>Scroll down to out quick quoter and we'll suggest a package for you.</p>
				</section>
				<section class="collection collection--files">
					<header>
						<h3>File Types</h3>
						<p>Here are the file types we can transfer to:</p>

					</header>
					<div class="item item--file">
						...
					</div>
					<p>We can give you these files on DVD or a quality hard drive. Up to you!</p>
				</section>
			</div>
			<div class="col-sm-12">
				<h3>How we do it</h3>
				<p>Using state-of-the-art equipment, no longer in manufacture, we make sure your thing is great</p>
				<img class="col-sm-12" src="http://placehold.it/800x300" alt="">
				<div class="col-sm-4">
					<br>
					<img src="http://placehold.it/300x200" alt="">
					<h4>Canopus ADVC 300</h4>
					<p>Last generation, 2006</p>
					<p>Analog-to-digital converter which performs the bulk of stabilization</p>
				</div>
				<div class="col-sm-4">
					<br>
					<img src="http://placehold.it/300x200" alt="">
					<h4>Digital Rapids DRC-500M</h4>
					<p>Last generation, 2012</p>
					<p>Captures with the highest quality possible by a Digital Rapids DRC-500M broadcast-level capture card.</p>
				</div>
				
				<section class="collection collection--equip">
					<div class="item item--equip">
						
					</div>	
				</section>
			</div>		
		</div>
	
		<footer class="quick-quote">
			<div class="container">
				<h2>Quick Quote</h2>
				<p>Not sure what you need? Answer these few questions and we'll recommend a package for you.</p>
				<p>What are you looking for?</p>
				<input type="radio"><span for="">VHS to DVD</span><br>
				<input type="radio"><span>Mini DVi</label><br>
				<input type="radio"><label for="">Something else</label><br>

				<p>What do you want?</p>
				[options for formats, tool tip description/maybe with pic]
				[What will you use it for?]
				[1. I'm a hobbyist and want the bare-bones so I can work on it myself]
				[2. just want it to be digital so I can watch it again!]
				[3. I want the best of the best. Do everything for me and make it perfect.]
				[Great, thanks! We estimate your cost will be about $x per [format]. Head over to the estimator page, and select the 'X' package and we'll be in touch super soon.]
			</div>
		</footer>

	</main>


<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="assets/js/build/production.min.js"></script> -->

	<script>
    	// Analytics here, sweetie
	</script>
</body>