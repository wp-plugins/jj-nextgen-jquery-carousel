<?php
/*
Plugin Name: JJ NextGen JQuery Carousel
Description: Allows you to pick a gallery from the 'NextGen Gallery' plugin to use as a JQuery JCarousel.
Author: JJ Coder
Version: 1.0.0
*/

if ( ! defined( 'WPJJNGGJ_CAROUSEL_PLUGIN_BASENAME' ) )
	define( 'WPJJNGGJ_CAROUSEL_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( ! defined( 'WPJJNGGJ_CAROUSEL_PLUGIN_NAME' ) )
	define( 'WPJJNGGJ_CAROUSEL_PLUGIN_NAME', trim( dirname( WPJJNGGJ_CAROUSEL_PLUGIN_BASENAME ), '/' ) );

if ( ! defined( 'WPJJNGGJ_CAROUSEL_PLUGIN_DIR' ) )
	define( 'WPJJNGGJ_CAROUSEL_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . WPJJNGGJ_CAROUSEL_PLUGIN_NAME );

require_once WPJJNGGJ_CAROUSEL_PLUGIN_DIR . '/includes/application.php';