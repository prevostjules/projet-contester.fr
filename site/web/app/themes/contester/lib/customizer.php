<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');

add_action( 'genesis_after_post_title', 'custom_field_before_content' );
/**
* @author Brad Dalton - WP Sites
* @example http://wp.me/p1lTu0-9Yz
*/
function custom_field_before_content() {
  if(is_single() )
   if( get_field('second_image') ):
	?><img src="<?php the_field('second_image'); ?>" alt="" /><?php
endif;
  }
