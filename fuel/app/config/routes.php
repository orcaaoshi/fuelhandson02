<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	
	'showdata' => 'demo/showdata',
	'select/(:any)' => 'demo/select/$1',
	'select/' => 'demo/select/',
	'select' => 'demo/select/',
);