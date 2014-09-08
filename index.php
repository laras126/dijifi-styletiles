<?php 
$theme = 'Play';
include('include/header.php'); ?>

<div class="container">
	<aside class="col-sm-5 site-sidebar">
			
		<div class="blocks pattern-colorscheme container">
			<h5>Color Scheme</h5>
			<p class="section-desc">These colors would occur througout the site.</p>
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
			<input type="submit" value="Button">&nbsp;
			<input type="submit" value="Another Button" class="btn-alt">	
		</div>
		
	</aside>
	<div class="col-sm-7 site-content">
		<!-- diji&#xFB01;</h2>  -->
		<h1>Example Page Title</h1>
		<p class="lead">Sed posuere consectetur est at lobortis.</p>
		
		<h3>Section Title</h3>
		<p><span class="p-lead">Sed odio dui duis mollis</span> commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
	
		<h4>Subsection Title</h4>
		<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>
		<p class="more"><a href="#">Text link...</a></p>
		<hr>
	</div>

</div>
<br>

<?php include('include/footer.php'); ?>
