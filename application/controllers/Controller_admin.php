<?php
session_start();

class Controller_admin {

	function __construct(){
	
	
	
	}
	
	
	
		// функция заменяет эту функцию из Controller
  public function Action_index (){
	
	// тут  нужно дописать проверку пароля по функции add
	
	if($_SESSION['view_class']==""){
	
		$_SESSION['view_class'] = "entry";
	}
	
	
	
	$model = new Model_admin();
	
	
	//поверяет логин и пароль первый раз
	if (!empty($_POST['password'])){
			
		$mysql = $model->entry_model($_POST['login'],$_POST['password']); // возвращает mysql запрос
		 if($mysql!=""){$_SESSION['view_class']="list";} 
	}
	
	// проверяет сессию если уже заходили
	if ($_SESSION['view_class']=="list"){
	
		$mysql = $model->entry_model($_SESSION['login'],$_SESSION['password']);
	}
	
	
	
	$view = new View();
	$view->generate_admin($_SESSION['view_class'],$mysql); // тут надо передать данные в модель на проверку
	
	//данные должны передаваться в функцию модели которая проверяет правильность пароля и логина а дальше получается информация 
	//и выводится на экран
	
	}
	
	
	
	public function Action_topic (){
	
	$route_array = explode ('/',$_SERVER['REQUEST_URI']);
	
	
	 if($_SESSION['verify'] == "yes"){
		
		$model = new Model_admin();
		$view = new View();
		$view->generate_add("admintopic",$model->topiccontent_model($route_array[3]));
	 }
	
	
	}
	
	
	public function Action_del (){
	
		$route_array = explode ('/',$_SERVER['REQUEST_URI']);
	
		 if($_SESSION['verify'] == "yes"){
		
		$model = new Model_admin();
		$view = new View();
	    $view->generate_admin("del",$model->del_model($route_array[3]));
		
	    }
		
	}
	
	public function Action_add (){
				
		 if($_SESSION['verify'] == "yes"){
		
		$model = new Model_admin();
		$view = new View();
	    $view->generate_add("add",$data);
		
	    }
		
	}
	
	public function Action_addnew (){
		
		
		$model = new Model_admin();
		$view = new View();
	    $view->generate_admin("addnew",$model->addnew_model());
	
	}
	
	public function Action_exit (){
	
		$_SESSION['login'] = "";
		$_SESSION['password'] = "";
		$_SESSION['view_class'] = "";
		$_SESSION['verify'] = "";
		header ('Location: /admin');
		
	 }
	 
	 
	 public function Action_update(){
	 
		if($_SESSION['verify'] == "yes"){
		
		$model = new Model_admin();
		$view = new View();
	    $view->generate_add("addnew",$model->update_model());
		
	    }
	
	}
}