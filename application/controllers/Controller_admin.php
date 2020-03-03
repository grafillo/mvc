<?php


class Controller_admin extends Controller
{
       private $login = "admin";
       private $password = '123';


    function __construct(){

    }



    public function Action_entry (){

        $view = new View();
        $view->generate("admin","","","","","");


    }

    public function Action_check (){

           if($_POST['login']==$this->login && $_POST['password']==$this->password ){

               $_SESSION['admin']="yes";

               include Q_PATH.'/application/models/Model_index.php';
               $model = new Model_index();
               $view = new View();
               $view->generate_admin('index_admin',$model->getName(),$model->TotalPages(),'=id',1);


        } else {

               $_SESSION['admin']="";
               $view = new View();
               $view->generate("admin","Логин или пароль введены неверно!","","","","");

           }
    }

    public function Action_exit (){

        $_SESSION['admin']="";

        include Q_PATH.'/application/models/Model_index.php';
        $model = new Model_index();
        $view = new View();
        $view->generate('index',$model->getName(),$model->TotalPages(),'=id',1);

    }


    public function Action_page (){

        if($_SESSION['admin']=="yes"){

            $route_array = explode ('/',$_SERVER['REQUEST_URI']);
            $page = $route_array[3];
            $typesort = $route_array[4];

            $route_array = explode ('=',$_SERVER['REQUEST_URI']);
            $sort = $route_array[1];

            include Q_PATH.'/application/models/Model_page.php';
            $model = new Model_page();
            $view = new View();
            $view->generate_admin('index_admin',$model->getTask($page,$sort),$model->TotalPages(),$typesort,$page);

        }

    }


    public function Action_change ()
    {

        if ($_SESSION['admin'] == "yes") {


            $route_array = explode ('/',$_SERVER['REQUEST_URI']);
            $page = $route_array[4];
            $typesort = $route_array[5];
            $id = $route_array[3];

            $text = htmlspecialchars($_POST['text']);
            if($_POST['status']=="complete"){
                $status = "выполнено";
            } else { $status="в работе"; }

            $model = new Model_admin();
            $view = new View();
            $view -> generate_change_admin("change_admin",$model->change_db($id,$text,$status),$typesort,$page);
        } else{

            include Q_PATH.'/application/models/Model_index.php';
            $model = new Model_index();
            $view = new View();
            $view->generate('index',$model->getName(),$model->TotalPages(),'=id',1);

        }




        }
    }





