<?php


class Model_page extends model

{

    public function getTask($page,$sort){



        if($page==1){
            $from = 0;
                 } else {
            $from = ($page-1)*3;
                }


        if($sort==1){ $field ="username"; $sort="ASC"; }
        else if ($sort==2){ $field ="username"; $sort="DESC"; }
        else if ($sort==3){ $field ="email"; $sort="ASC"; }
        else if ($sort==4){ $field ="email"; $sort="DESC"; }
        else if ($sort==5){ $field ="status"; $sort="ASC"; }
        else if ($sort==6){ $field ="status"; $sort="DESC"; }
        else if ($sort=="id"){ $field ="id"; $sort="DESC"; }



        $req_news = mysqli_query( $this->connect_db(),"SELECT * from tb_zadachi ORDER BY $field $sort LIMIT $from,3 ");


        return $req_news;

    }

}