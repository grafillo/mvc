<?php
session_start();

class Controller_task {

	function __construct(){
	
	
	
	}

    public function Action_Newtask (){
        $array = array();
        $view = new View();
        $view->generate_newtask("task",$array);
    }

    public function Action_Addtask (){

        $view = new View();
	    $model = new Model_task();

        if($model->cheсk_task()=="correct"){

            $view->generate_newtask('addtask',$model->add_task()); //тут заменил

        } else {

            $view->generate_newtask("task",$model->cheсk_task());
        }

    }



}