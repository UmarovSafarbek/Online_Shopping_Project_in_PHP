<?php 

    class Admin extends Controller{
        public function __construct(){
            $this->models("Admin");
        }
        public function controller(){
            $users = $this->nameMd->selectUsers();
            $this->header('admin/header', $this->title = "Adminstration");
            $this->Indexs('admin/order', $users);
            Controller::view('admin/footer');
        }

        public function addproduct(){
            $this->header('admin/header', $this->title = "Product Add");
            Controller::view("admin/addproduct");
            Controller::view('admin/footer');
        }

        public function addded(){
            $this->nameMd->addProduct($_POST, $_FILES['photo']);
        }


        public function deleteUser($id){
            $photo = $this->nameMd->selectId('users', 'id_user', $id);
            $photo = $this->nameMd->fetch($photo);
            $photo = $photo['avatar'];
            $this->nameMd->delete('users',  'id_user', $id);
            $this->nameMd->deletePhoto('uplodePhotoUser', $photo);
            Model::header('admin/controller/?deleted=ok');
        }


        public function searchUser(){
            $this->nameMd->seacrTest($_GET['name']);
        }
    }

?>