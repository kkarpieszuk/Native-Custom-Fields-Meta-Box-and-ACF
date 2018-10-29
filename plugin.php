<?php
/**
Plugin Name: Native Custom Fields Meta Box and ACF
Description: Show WordPress native meta box for custom fields when Advanced Custom Fields plugin is active
Author: Konrad Karpieszuk
 */

add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );