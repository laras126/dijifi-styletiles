<?php

/** 
 *
 * Define an array of adjectives specific to each theme name
 * Loop through array and print adjectives, each with a unique class
 *
 **/ 

if($theme == '') {
	$theme = 'Play';
}

function printAdjectives($theme) {
	if($theme == 'Play') {
	    $adj = array('Retro', 'Nostalgic', 'Friendly', 'Clear', 'Encouraging', 'Con&#xFB01;dent');
	}

	if($theme == 'Press') {
	    $adj = array('Subtle', 'Artisanal', 'Mature', 'Calming', 'Quality', 'Historical');
	}

	if($theme == 'Pixel') {
	    $adj = array('Digital', 'Contemporary', 'Connected', 'Modest', 'Millenial', 'Approachable');
	}

	for ($i=0; $i<=5; $i++) { ?>
	    <div class="adj adj<?php echo $i ?>"><?php echo $adj[$i] ?></div>	
	<?php }
}

?>