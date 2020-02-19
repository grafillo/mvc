<?php
class Controller {
	
	function __construct(){
	
	}
    //функция выведения индекса
    public function Action_index (){
	$header = "Новый проект";
	$model = new Model_index();
	$view = new View();
	$view->generate('index',$model->getName(),$header);
	
	}
	
    

	
}