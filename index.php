<?php
require 'config.php';
spl_autoload_register(function($c){
	if(file_exists('controllers/'.$c.'.php')){
		require 'controllers/'.$c.'.php';
	}else if(file_exists('models/'.$c.'.php')){
		require 'models/'.$c.'.php';	
	}else if(file_exists('core/'.$c.'.php')){
		require 'core/'.$c.'.php';
	}
});
$c = new core();
$c->run();