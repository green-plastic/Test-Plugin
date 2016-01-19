<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * < EE 2.6.0 backward compatibility
 * This allows the module to use ee() rather than declare the EE superobject like so: ee() =& get_instance();
 */
if ( ! function_exists('ee')) {
	function ee()
	{
		static $EE;
		if ( ! $EE) $EE = get_instance();
		return $EE;
	}
}

$plugin_info = array(
	'pi_name'			=> 'Test Plugins',
	'pi_version'		=> '1.0.0',
	'pi_author'			=> 'Erik Wiedeman',
	'pi_author_url'		=> 'http://colepublishing.com',
	'pi_description'	=> 'Test Plugin',
	'pi_usage'			=> Test_plugin::usage()
);

class Test_plugin
{
	public $return_data = "";
	
	function __construct()
	{
	}
	
	/*
	* Plugin Usage
	*/
	function usage()
	{
		ob_start(); 
		?>
		<?php
		$buffer = ob_get_contents();
		ob_end_clean(); 
		return $buffer;
	}
}