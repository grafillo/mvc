<?php

class Controller_404 extends Controller{

	function __construct(){
	
	}
		// функция заменяет эту функцию из Controller
  public function Action_index (){
	
	$view = new View();
	$view->generate('404',$data,$header);
	
	}

}