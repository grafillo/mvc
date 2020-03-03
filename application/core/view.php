<?php
class View {
	
	function __construct(){
	
	}

    public function generate_newtask($view,$array) {

        include Q_PATH.'/application/views/template.php';

    }



	public function generate($view,$data,$totalpages,$typesort,$currentpage) {


	include Q_PATH.'/application/views/template.php';

	}



    public function generate_admin($view,$data,$totalpages,$typesort,$currentpage) {


        include Q_PATH.'/application/views/template_admin.php';

    }


    public function generate_change_admin($view,$data,$typesort,$currentpage) {


        include Q_PATH.'/application/views/template_admin.php';

    }



	
}