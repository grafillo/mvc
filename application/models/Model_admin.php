<?php


class Model_admin extends Model
{


    public function change_db ($id,$text,$status){

       $text_tb = mysqli_query( $this->connect_db(),"SELECT * FROM tb_zadachi WHERE id='$id'");
       $myrow = mysqli_fetch_array($text_tb);




       if ($text!=$myrow['text']||$myrow['admin_edit']=='отредактировано администратором'){
        $admin_edit = 'отредактировано администратором';
       } else {

           $admin_edit = 0;
       }

        if ($myrow['status']=="выполнено"){
            $status = "выполнено";
        }


        $req_tb = mysqli_query( $this->connect_db(),"UPDATE tb_zadachi SET admin_edit='$admin_edit', text='$text', status='$status'
        WHERE id='$id' ");

        return $req_tb;

    }




}