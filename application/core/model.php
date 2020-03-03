<?php
class Model {
	public $address_db  = 'localhost';
	public $username_db = 'root';
	public $password_db = '';
	public $dbname   = 'db_zadachnik';
	
	function __construct(){


    }

	public function connect_db(){

	return $link = mysqli_connect($this->address_db ,$this->username_db,$this->password_db,$this->dbname);


	}


    public function TotalPages(){

        $total_row = mysqli_num_rows(mysqli_query($this->connect_db(),"SELECT * FROM `tb_zadachi`"));
        $total_page =   ceil($total_row / 3 );

        return $total_page;


    }


}