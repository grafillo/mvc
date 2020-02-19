<?php
class Model_admin extends Model {

	function __construct(){
	
	}
	private function checkPass($login,$password){
	
		
	   if($login=="admin" && $password=="1"){
	   
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$_SESSION['view_class'] = "list";
			$_SESSION['verify'] = "yes";
								
	    }else{
		
		$_SESSION['login'] = "";
		$_SESSION['password'] = "";
		$_SESSION['verify'] = "Неверное имя пользовтеля или пароль.";
		}
		
		return $_SESSION['verify'];		// выводится список новотей
		
	}
	
	
	
	public function entry_model($login,$password){
		
		$req_news = "";
		
	  if($this->checkPass($login,$password)=="yes"){
	  
		$this->connect_db();
	    $req_news = mysqli_query($this->connect_db(),"SELECT * from tb_news");
			  
	  }
	    
		
		return $req_news;
	
	}

    public function del_model($id){	//удаляет модель
		
		if($_SESSION['verify']=="yes"){
		
		 $this->connect_db();
	     mysqli_query("DELETE FROM tb_news WHERE id ='$id' ");
		 
		 $result="Новость успешно удалена.";
		
		}else{
		
		 $result="Неверное имя пользовтеля и пароль, авторизируйтесь пожалуйста.";
		
		}
		
		return $result;
	}
	
	
	
	
	public function addnew_model(){ // добавляет в базу
		if($_SESSION['verify']=="yes"){
				
		$time = time();
		$header =  $_POST['header'];
		$category = $_POST['category'];
		$autor = $_POST['autor'];
		$text = $_POST['text'];
		$begin_text = $_POST['begin_text'];
		
		if(!empty($_FILES['uploadfile']['name'])){
		$img = $this->add_img($_FILES['uploadfile']['name'],$_FILES['uploadfile']['tmp_name']);
		}
		
		$this->connect_db();
		mysqli_query("INSERT INTO tb_news SET time='$time',header='$header' 
		,category='$category',autor='$autor',alltext='$text',begin_text='$begin_text',
		image='$img'"); 
		
		
		 
		 $result= "Новость успешно добавлена.";
		}
		else {
		
		$result="Не удалось добавить новость, авторизируйтесь пожалуйста.";
		}
	
	return $result;
	
	}	
	
	public function topiccontent_model($id){
	

		$mysql= mysqli_query($this->connect_db(),"SELECT * from tb_news WHERE id='$id'");
		$mysql=mysqli_fetch_array($mysql);
		
		return $mysql;
	}
	
	
	public function update_model(){
	//
		$header =  $_POST['header'];
		$category = $_POST['category'];
		$autor = $_POST['autor'];
		$text = $_POST['text'];
		$begin_text = $_POST['begin_text'];
		$id = $_POST['id'];
	
	
		$this->connect_db();
		$mysql=mysqli_query("UPDATE tb_news  SET header='$header',category='$category',
		autor='$autor',alltext='$text',begin_text='$begin_text' WHERE id ='$id' "); 
		
		if(!$mysql){$result="Не удалось обновить новость, попробуйте ещё раз.";}
		else{$result="Новость успешно обновлена.";}
		
		return $result;
	
	}
}	