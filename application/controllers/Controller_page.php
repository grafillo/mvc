<?php


class Controller_page extends Controller
{

    function __construct(){

    }



    public function Action_sort () {



        $route_array = explode ('/',$_SERVER['REQUEST_URI']);
        $page = $route_array[3];
        $typesort = $route_array[4];

        $route_array = explode ('=',$_SERVER['REQUEST_URI']);
        $sort = $route_array[1];



        $model = new Model_page();
        $view = new View();
        $view->generate('index',$model->getTask($page,$sort),$model->TotalPages(),$typesort,$page);


    }





}

