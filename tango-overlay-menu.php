<?php
/**
 * Plugin Name: Weibenfalk Overlay Menu
 * Plugin URI: http://weibenfalk.com
 * Description: Creates a mobile overlaymenu for Hagbloms website
 * Version: 1.0
 * Author: Thomas Weibenfalk
 * Author URI: http://weibenfalk.com
 */

// Register style sheets.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

// Register scripts.
add_action( 'wp_enqueue_scripts', 'register_plugin_scripts' );

function register_plugin_styles() {
	wp_register_style('wbn-overlay', plugins_url('hagbloms-overlay-menu/styles/style.css'));
	wp_enqueue_style('wbn-overlay');
}

function register_plugin_scripts() {
	wp_register_script('wbn-overlay', plugins_url('hagbloms-overlay-menu/scripts/wbn-overlay.js'), array ('jquery'), false, false);
	wp_enqueue_script('wbn-overlay');
}

// Initiate the plugin in the footer
add_action( 'wp_footer', 'wbn_overlay_menu' );

function wbn_overlay_menu(){ ?>

	<!-- The Div for the overlay menu -->
	<div id="wbn-ovrly-menu">

			<nav id="wbn-ovrly-nav" role="navigation">
				<div data-simplebar class="wbn-ovrly-wrapper">
				<?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
					</div>
			</nav>

	</div>

	<!-- The Span for the hamburger button -->
	<span class="wbn-ovrly-hamburger">
		<button class="hamburger hamburger--collapse" type="button">
		  <span class="hamburger-box">
			<span class="hamburger-inner"></span>
		  </span>
		</button>
	</span>
<?php }