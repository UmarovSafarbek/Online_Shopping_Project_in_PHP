<?php 


class Controller {
    public $nameMd = '';
    public $title = '';
    public function Indexs($url, $row=[]){
        include  'view/'. $url . ".php";
        return $row;
    }

    public function header($url, $title){
        include  'view/'. $url . ".php";
        return $title;
    }   

    public function footer($url){
        include  'view/'. $url . ".php";
    }
    
    public static function view($url){
        include  'view/'. $url . ".php";
    }

    public function models($url){
        require "model/".$url."_Model.php";
        $classname = $url."_Model";
        $this->nameMd =  new $classname();
    }
}

?>