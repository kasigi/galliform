<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           galliform
 * @wordpress-plugin
 * Plugin Name:       Galliform QA Register
 * Description:       Generate QA Checklists and Registers
 * Version:           1.0.0
 * Author:            Tor N. Johnson
 * License:           GPL-3.0+
 */



function galliform_init(){
	require_once('data-structures/postTypes.php');
	require_once('data-structures/taxonomy.php');
	require_once('galliform-interface.php');
} // end galliform_init

add_action( 'init', 'galliform_init', 0 );



function galliform_process_selection_form(){
    echo json_encode($_POST);
    echo "<pre>";

    if(isset($_POST[qagroup])){
        $qagroup = [];
        if(is_array($_POST[qagroup])){
            // Several QA Groups have been selected
         foreach($_POST[qagroup] as $potentialGroup){
             // Remove all invalid characters
             $potentialGroup = preg_replace('|[;[]]|',"",$potentialGroup);
            if($potentialGroup != ""){
                $qagroup[]=$potentialGroup;
            }
         }
        }else{
            $potentialGroup = preg_replace('|[;[]]|',"",$_POST[qagroup]);
            if($_POST[qagroup] != ""){
                $qagroup[]=$_POST[qagroup];
            }
        }

    }
    echo json_encode($qagroup)."\n\n";

    // Get all gagroups that match the input
    $terms = get_terms( array(
        'taxonomy' => 'qagroup',
        'hide_empty' => false,
        'slug'=>$qagroup,
    ) );
    echo json_encode($terms)."\n\n";

    // Get all steps that are in the selected QA group
    $args = array(
        'post_type' => 'qastep',
        'tax_query' => array(
            array(
                'taxonomy' => 'qagroup',
                'field'    => 'slug',
                'terms'    => $qagroup,
            ),
        ),
    );
    $stepQuery = new WP_Query( $args );
    echo json_encode($stepQuery);
    // Loop through the steps and verify against the mandatory combination rules

        // Create new array of steps


    // Get all items that are part of the finalized steps list

    // Loop through the steps



    echo "</pre>";
}// end galliform_process_selection_form


add_action( 'admin_post_nopriv_galliform_selection', 'galliform_process_selection_form' );
add_action( 'admin_post_galliform_selection', 'galliform_process_selection_form' );