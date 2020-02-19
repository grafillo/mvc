<?php
class View {
	
	function __construct(){
	
	}
	
	
	
	public function generate($view,$data,$header) {
	
	include Q_PATH.'/application/views/template.php';
	
	}
	
	public function generate_admin($view,$data) {
	
	include Q_PATH.'/application/views/template_admin.php';
	
	}
    
	public function generate_topic($view,$data) {
	
	include Q_PATH.'/application/views/template.php';
	
	}
	
	public function generate_add($view,$data) {
	
	include Q_PATH.'/application/views/template_admin.php';
	
	}
	
	public function getCategory($category_myrow){
		if($category_myrow=="economics"){
		$category = "Экономика";
		}
		else if($category_myrow=="politics"){
		$category = "Политика";
		}
		else if($category_myrow=="sport"){
		$category = "Спорт";
		}
		return $category;
	}	

	
	
}