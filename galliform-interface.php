<?php

function galliform_interface_shortcode(){

	$galliformInterface = "";
	$galliformInterface .= "<section><h1>Galliform: Create QA Registry</h1>";

    $galliformInterface .= "<form method='post' action='".esc_url( admin_url('admin-post.php') )."'>";
    $galliformInterface .= "<input type=\"hidden\" name=\"action\" value=\"galliform_selection\">";

    $galliformInterface .= "<label for='gatitle'>Name of Project</label><input type='text' id='gatitle'>";

    $groups = get_terms( array(
        'taxonomy' => 'qagroup',
        'hide_empty' => false,
    ));

    $galliformInterface.= "<fieldset>";
        foreach($groups as $group){
            $galliformInterface.= "<input type='checkbox' name='qagroup[]' value='".$group->slug."' id='".$group->slug."'><label for='".$group->slug."'>".$group->name."</label>";
        }
    $galliformInterface.= "</fieldset>";

    $galliformInterface .= "<button type=\"submit\">Generate</button>";

    $galliformInterface .= "</form>";
    $galliformInterface .="</section>";

	return $galliformInterface;

}

add_shortcode('galliform-interface','galliform_interface_shortcode');
