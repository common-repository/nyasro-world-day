<?php
/*
Plugin Name:  Nyasro World Day
Plugin URI: http://nyasro.com/wordpress-plugin/nyasro-world-day/
Description: Display today or upcoming international/world day event.
Version: 1.0
Author: Nyasro
Author URI: http://nyasro.com/
License: GPL2
*/

	define('NWD_SC','nyday');

	function Nyasro_WorldDayEvent( $atts = array())
	{
		$path 	= 'http://nyasro.com/wordpress-plugin-data/nyasro-world-day/';
		$event	= @file_get_contents($path);
		if(strstr($event,'mysqli::')) return '<a href="http://nyasro.com/wordpress_plugin/download/nyasro-world-day.zip">[Nyasro World Day]</a> Error';
		return 	$event;
	}
	
	function _eNyasro_WorldDayEvent()
	{
		echo Nyasro_WorldDayEvent();
	}

	add_shortcode(NWD_SC, 'Nyasro_WorldDayEvent');

?>