<?php
/*
Plugin Name: Native Custom Fields Meta Box and ACF
Description: Show WordPress native meta box for custom fields when Advanced Custom Fields plugin is active
Author: Konrad Karpieszuk
Author URI: http://muzungu.pl
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) || function_exists( 'classic_editor_init_actions' ) ) {
    add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );
} 

