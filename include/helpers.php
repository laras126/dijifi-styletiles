<?php

/** 
 *
 * Define an array of adjectives specific to each theme name
 * Loop through array and print adjectives, each with a unique class
 *
 **/ 

function printAdjectives($theme) {
	if($theme == 'Play') {
	    $adj = ['Retro', 'Nostalgic', 'Friendly', 'Clear', 'Encouraging', 'Con&#xFB01;dent'];
	}

	if($theme == 'Press') {
	    $adj = ['Subtle', 'Artisanal', 'Mature', 'Calming', 'Quality', 'Historical'];
	}

	if($theme == 'Pixel') {
	    $adj = ['Digital', 'Contemporary', 'Connected', 'Modest', 'Millenial', 'Approachable'];
	}


	for ($i=0; $i<=5; $i++) { ?>
	    <div class="adj adj<?php echo $i ?>"><?php echo $adj[$i] ?></div>	
	<?php }
}

?>