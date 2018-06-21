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
}

add_action( 'init', 'galliform_init', 0 );





