<?php
class Model_index extends Model {
	
	function __construct(){
	
	}
	
	// в этой функции идёт обращение к бд
		public function getName(){


	    $req_news = mysqli_query( $this->connect_db(),"SELECT * from tb_news ");


	return $req_news;
	}
}