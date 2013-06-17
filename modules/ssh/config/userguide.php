<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'modules' => array(

		'ssh' => array(
			'enabled' => TRUE,
			'name' => 'SSH',
			'description' => 'Module for Kohana 3.x which provide classes to remotely execute commands by SSH2 protocol',
			'copyright' => '&copy; 2012 Zbigniew Motyka',
		)	
	),
	'transparent_prefixes' => array(
		'kohana' => TRUE,
	)
);