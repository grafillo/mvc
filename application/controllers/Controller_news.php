<?php

class Controller_news extends Controller{

	function __construct(){
	
	}
		
	
	public function Action_show (){
	
	$route_array = explode ('/',$_SERVER['REQUEST_URI']);
	//$show_name = 0;

	if(!empty($route_array[3])){
		$show_name = $route_array[3];
		}
	
	if($show_name=="economics")
	{$header="Новости экономики";}
	if($show_name=="politics")
	{$header="Новости политики";}
	if($show_name=="sport")
	{$header="Новости спорта";}
	
	
	
	$model = new Model_news();
	$view = new View();
	$view->generate('index',$model->get_category($show_name),$header); //news - название виева который подключается
	
	}
	
	public function Action_topic (){
	
	$route_array = explode ('/',$_SERVER['REQUEST_URI']);

	
	if(!empty($route_array[3])){
		$show_topic = $route_array[3];
		}
	
	$model = new Model_news();
	$view = new View();
	$view->generate_topic('topic',$model->get_topic($show_topic),$header);
	
	
	}

	public function Action_autor (){ // недоработана
	
	$route_array = explode ('/',$_SERVER['REQUEST_URI']);
	$show_autor = 0;
	if(!empty($route_array[3])){
		$show_autor = $route_array[3];
		}
	//$show_autor = "Алексей ЕРМОЛИН";
		
	$model = new Model_news();
	$view = new View();
	$view->generate('index',$model->get_autor($show_autor),$show_autor);		
		
	}
}