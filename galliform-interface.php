<?php

function galliform_interface_shortcode(){

	$galliformInterface = "";
	$galliformInterface .= "<section><h1>Galliform: Create QA Registry</h1>";



	$galliformInterface .="</section>";

	return $galliformInterface;

}

add_shortcode('galliform-interface','galliform_interface_shortcode');
