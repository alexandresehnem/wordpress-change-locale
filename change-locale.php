<?php
/*
Plugin Name: Change Locale
Description: Changes the language by Wordpress url
Author: Alexandre Antonio Sehnem
Version: 1.0
Author URI: http://alexandresehnem.com.br
License: GPLv2 or later
*/

if (!is_admin()) {
	session_start();

	add_filter('locale', 'set_my_locale');
	function set_my_locale($lang) {

	    if (isset($_GET['locale'])) {
	    	$_SESSION['locale'] = $_GET['locale'];
    	}

    	if (isset($_SESSION['locale'])) {
	    	return $_SESSION['locale'];
	  	} else {
	    	return $lang;
	  	}
	}
}
