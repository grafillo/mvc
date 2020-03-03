<?php
class Model_index extends Model {
	
	function __construct(){
	
	}

		public function getName(){

	    $req_news = mysqli_query( $this->connect_db(),"SELECT * from tb_zadachi ORDER BY id DESC limit 3 ");

	return $req_news;

	}
}