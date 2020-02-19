<?php
class Model_news extends Model {
	
	function __construct(){
	
	}
	
	// в этой функции идёт обращение к бд
	public function get_category($topic){
	

	$req_news = mysqli_query($this->connect_db(),"SELECT * from tb_news WHERE category='$topic'");
		
	return $req_news;
	}
	
	public function get_topic($topic){
	

	$req_news = mysqli_query($this->connect_db(),"SELECT * from tb_news WHERE id='$topic'");
	return $req_news;
	
	}
	
	public function get_autor($autor){
	
	$this->connect_db();
	$req_news = mysqli_query($this->connect_db(),"SELECT * from tb_news WHERE autor='$autor'");
	return $req_news;
	
	}
	
}