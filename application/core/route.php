<?php

session_start();
class Route {

    function __construct() {
	
	}
	
	public static function Start(){


		$controller_name = 'index';
		$action_name = 'index';


		$route_array = explode ('/',$_SERVER['REQUEST_URI']);
		
		if(!empty($route_array[1])){
		$controller_name = $route_array[1];

		}
		
		if(!empty($route_array[2])){
		$action_name = $route_array[2];
		}
		

		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'Action_'.$action_name;


        include Q_PATH.'/application/models/'.$model_name.'.php';
        include Q_PATH.'/application/controllers/'.$controller_name.'.php';

		$controller = new $controller_name();
		$controller->$action_name();
	}
	
	
}
