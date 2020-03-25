<?php
class core{
	public function run(){
		$url = '/';
		$params = array();
		if(isset($_GET['url']) && $_GET['url'] != '/'){
			$url .= $_GET['url'];
			$url = explode('/', $url);
			array_shift($url);
			$currentController = $url[0].'Controller';
			array_shift($url);
			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
				if(count($url[0]) > 0){
					$params = $url;
				}
			}else{
				$currentAction = 'index';
			}
		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		if(!file_exists('controllers/'.$currentController.'.php') || 
			!method_exists($currentController, $currentAction)){
			$currentController = 'notController';
			$currentAction = 'index';
		}


		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}
}