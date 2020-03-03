<?php
class Model_task extends Model {

	function __construct(){
	
	}

  public function cheсk_task(){

      $username =  $_POST['username'];
      $email = $_POST['email'];
      $text = $_POST['task'];

      if ($username==""||$email==""||$text==""){
          $result =  array(
              "username" => $username,
              "email" => $email,
              "text" => $text,
              "error" =>"Все поля обязательны для заполнения"
              );



      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL))

            $result = array(  "username" => $username,
                              "email" => $email,
                              "text" => $text,
                              "error" => "email указан неверно!");
      else {

          $result = "correct";

      }

      return $result;

  }

    public function add_task(){

        $user_name =  $_POST['username'];
        $email = $_POST['email'];
        $text = htmlspecialchars($_POST['task']);

        $mysqlconnect = $this->connect_db();
        $mysql = mysqli_query($mysqlconnect ,"INSERT INTO tb_zadachi SET username='$user_name',email='$email',text='$text',
 status='в работе', admin_edit='0' ");

        if(!$mysql){$result="Не удалось добавить задание, попробуйте ещё раз.";}
        else{$result="Задание успешно добавлено.";}

        return $result;

    }



}	