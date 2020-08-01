<?php 

class accaunt extends Controller {

    public function __construct() {
        $this->models('accaunt');
    }



    public function login(){
        if(!isset($_SESSION['name'])){
        $this->Indexs('accaunt/login', '');
        } else {
            $app = APP;
            header("Location: $app");
        }
    }

    public function singup(){
        if(!isset($_SESSION['name'])){
        $this->Indexs("accaunt/singup", '');
            } else {
        $app = APP;
        header("Location: $app");
    }
    }

    public function logined(){
        $this->nameMd->checkLoginUser($_POST['email'], $_POST['pwd']);
    } 

    public function registered() {
        //ChekRegistretion it function from model_accaunt to check the data is vakidate and insert in to database
        $this->nameMd->ChekRegistretion($_POST['first_name'], 
        $_POST['last_name'], $_POST['email'], $_POST['password'], 
        $_POST['password_confirmation'], $_FILES['file'] ); // ENTER THE DATA FORMS REGISTER 
        
    }

    public function getPass(){
        $this->Indexs('accaunt/getPassword' ,'');
    }

    
    public function getPassword() {
        $this->nameMd->getPasswordUser($_POST['email']);
    }

    public function changePassword() {
        $this->nameMd->changePass($_POST['pass'], $_POST['passConfig'], $_GET['id_email']);
    }
    public function logaut(){
        $this->header('/pages/header', $this->title='Главный');
        $this->footer('/pages/footer');
    }
}

?>