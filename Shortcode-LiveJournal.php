<?php
/*
	Plugin Name: LiveJournal Shortcode
	Plugin URI: http://wp.dmonnier.com/shortcodes/livejournal/
	Description: Quickly create text links to LiveJournals in the same format as LJ with this shortcode.
	Version: 1.1.1
	Author: Danielle Monnier
	Author URI: http://www.dmonnier.com

	Special thanks to:
	http://wp.smashingmagazine.com/2012/05/01/wordpress-shortcodes-complete-guide/
	
	http://www.livejournal.com/support/faq/67.html
	
	Format:
	[lj user="frank" title="Frank the Goat" icon="community"]
*/
function lj_shortcode($atts = NULL)
{
	extract(shortcode_atts(array('user' => '', 'title' => '', 'icon' => 'user'), $atts));
	
	if ( empty($user) )
	{
		return '<span class="invalid-lj">[invalid LiveJournal shortcode]</span>';
	}
	
	$userURL = strtolower($user);
	$username = empty($title) ? $user : $title;

	return '<a class="lj-' . $icon . '"' .
				' href="http://' . $userURL . '.livejournal.com"' . 
				' title="Visit ' . $username . '\'s LiveJournal">' .
				$username . '</a>';
}

// register this shortcode and the stylesheet with WordPress
function register_lj_shortcode()
{
	add_shortcode('lj', 'lj_shortcode');
	
	wp_register_style( 'livejournal-style', plugins_url('style.css', __FILE__ ) );
	wp_enqueue_style( 'livejournal-style' );
}

// hook into WordPress
add_action( 'init', 'register_lj_shortcode');
?>