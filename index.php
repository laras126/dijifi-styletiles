<?php 

$theme = $_GET['theme'];
include('include/header.php'); ?>

<div class="container">

	<aside class="col-sm-5 site-sidebar">
			
		<div class="blocks pattern-colorscheme container">
			<h5>Color Scheme</h5>
			<p class="section-desc">These colors would occur throughout the site.</p>
		    <div class="light-accent"></div> 
		    <div class="med-accent"></div> 
		    <div class="dark-accent"></div> 
		    <div class="dark-font"></div>    
		</div>
		<div class="container">
			<h5>Form Example</h5>
			<p class="section-desc">Description of the form would be here.</p>
			<label>Name</label>
			<div class="clearfix">
				<input type="text" class="col-sm-11 clearfix" placeholder="Lorem Ipsum">
			</div>
			<label>Message</label>
			<textarea class="col-sm-11 clearfix"placeholder="Etiam porta sem malesuada magna mollis euismod. Cras mattis purus sit amet fermentum!" id="" cols="30" rows="6"></textarea>
			<div class="clearfix">
				<input type="submit" value="Button">&nbsp;
				<input type="submit" value="Another Button" class="btn-alt"	
			</div>
			
		</div>
		
	</aside>
	<div class="col-sm-7 site-content">
		<h1>Digitization is <span class="special">our craft</span>.</h1>
 	   	<p class="lead">It's not just our &lsquo;job&rsquo;. We love working with our clients, and get a perspective that connects us to them like no other work does. It’s as rewarding for us as it is for you.</p>
 
		<h3>Revive your fading photos.</h3>
		<p>Give your memories a new life on the digitial devices we use everyday. We don't just preserve your photos, we improve them. By hand, we remove scratches, scuffs, and damages making your photos looking as fresh as the ones you took with your phone yesterday.</p>
		
		<h3>Customization for every client.</h3>
		<p>Each photo, reel, and slide has its own character and quirks, and the digitization process is not one-size-fits-all. Our approach is a more complex, nuanced system of checks and tweaks, customized for every case. We treat every piece of media as our own, and we report to you directly. No guess work.</p>
	
		<blockquote>
			 I had twenty years of different format videos to be transferred to a hard drive. I walked into the office and was treated like I was bringing a child to the doctor.
		</blockquote>
		<p class="text-right">&dash; Jim R., <a href="http://www.yelp.com/biz/dijifi-brooklyn?hrid=CmJzuJOrbDPOGYnNOIECtQ" target="blank">Yelp review</a></p>

		<h4>Subsection Title</h4>
		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>

		<div class="text-right">&dash; Lorem Ipsum</div>
		<p class="more"><a href="#">Text link...</a></p>
	</div>

</div>
<br>

<?php include('include/footer.php'); ?>
