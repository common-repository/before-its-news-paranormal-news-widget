<?php
/*
Plugin Name: Before It's News&reg;: Spirituality
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.3
Author: Before It's News&reg;
Author URI: http://www.beforeitsnews.com
*/

/* Add the widget using widgets_init */
add_action( 'widgets_init', 'bin_load_paranormal_widgets' );

/* Register the widget*/
function bin_load_paranormal_widgets() {
	register_widget( 'Paranormal_Widget' );
} /* End registration of the widget */

/* Paranormal_Widget class */
class Paranormal_Widget extends WP_Widget {

	/* Widget setup */
	function Paranormal_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'paranormal', 'description' => __('Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won\'t bog down your page-load time.', 'paranormal') );

		/* Create the widget */
		$this->WP_Widget( 'paranormal-widget', __('Befroe It\'s News&reg;: Paranormal Widget', 'paranormal'), $widget_ops, $control_ops );
		
	} /* End widget setup */

	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );

		/* Before widget */
		echo $before_widget;

		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/0000000000000143">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';

		/* After widget */
		echo $after_widget;
		
	} /* Stop displaying the widget */
	
} /* End Paranormal_Widget class */

?>