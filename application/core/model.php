<?php
class Model {
	public $address_db  = 'localhost';
	public $username_db = 'root';
	public $password_db = '';
	public $dbname   = 'db_news';
	
	function __construct(){
	
	}

	public function connect_db(){
	
	return $link = mysqli_connect($this->address_db ,$this->username_db,$this->password_db,$this->dbname);

	}

	public function add_img($img_name,$img_tmpname){
	
	$uploaddir = Q_PATH.'/application/views/img/'; 
    $uploadfile = $uploaddir.basename($img_name);

    if (copy($img_tmpname,$uploadfile))
    {
    $load_file= SITE.'/application/views/img/'.$img_name;
    }
    else { $load_file="Error"; exit; }

    //echo "sddsddsd".$load_file;
	return $load_file;
	
	}
}