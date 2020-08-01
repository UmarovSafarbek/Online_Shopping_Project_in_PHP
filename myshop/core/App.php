<?php 
     
class App {

    private $controller = 'main';
    private $action = 'index';
    private $params = [];

    public function __construct() {

        $url = $this->explode($_SERVER['QUERY_STRING']);

        if(isset($url[0]) and $url[0] != "") {  
        $this->controller = $url[0];
        unset($url[0]);

    if(isset($url[1])){
        $this->action = $url[1];
        unset($url[1]);
    }  

    $this->params = array_values($url);
  }

        if(file_exists("controller/".$this->controller."Controller.php")){
            include "controller/".$this->controller."Controller.php";

            $obj = new $this->controller();
            if(method_exists($obj,  $this->action)) {
               call_user_func_array([$obj, $this->action], $this->params);
            } else {
                echo "Method problem";
                include 'view/pages/404.html';
            }

        } else {
            include 'view/pages/404.html';
        }
    }


    public function explode($url) {
        $url = explode('/', rtrim($url, '/'));
        return $url;
    }


}


?>