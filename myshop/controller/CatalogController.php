<?php

class Catalog extends Controller{
    public function __construct() {
        $this->models('catalog');
    }
    public function phone(){
         $about =  $this->nameMd->showPhone($_GET['name'], $_GET['id_prod']);
        $this->header('pages/header', $about['name']);
        $this->Indexs('catalog/phone', $about);
    }
}


?>