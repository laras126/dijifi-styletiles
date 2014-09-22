<?php 

$theme = $_GET['theme'];
include('include/header.php'); ?>

<div class="container main">
	
	<div class="col-sm-7 site-content">
		<h1>Digitization New York City Trusts</h1>
		<p class="lead">We are a small film, photo, video, and audio digitization studio in New York City.</p>
		
		<h3>Section Title</h3>
		<p><span class="p-lead">Sed odio dui duis mollis</span> commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	
		<h4>Care and Attention</h4>
		<blockquote>
			I had twenty years of different format videos to be transferred to a hard drive. I walked into the office and was treated like I was bringing a child to the doctor.
		</blockquote>
		<p class="more"><a href="#">Text link...</a></p>
	</div>
	
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
				<input type="text" class="col-sm-11 clearfix" placeholder="Brad Pitt">
			</div>
			<label>Message</label>
			<textarea class="col-sm-11 clearfix"placeholder="Etiam porta sem malesuada magna mollis euismod. Cras mattis purus sit amet fermentum!" id="" cols="30" rows="6"></textarea>
			<div class="clearfix">
				<input type="submit" value="Button">&nbsp;
				<input type="submit" value="Another Button" class="btn-alt">		
			</div>
			
		</div>
		
	</aside>
</div>
<br>

<?php include('include/footer.php'); ?>
