
<?php  


    class Main extends Controller{
            public function __construct() {
                $this->models('Index');
            }
            public function index() {
                $this->header('/pages/header', $this->title = "Главный");
                $this->Indexs('/pages/index', $this->nameMd->selectProducts());
                $this->footer('/pages/footer');
               
            }

          public function search(){
            $a = $this->nameMd->search($_GET['search']);

          }
          public function order($catname, $id) {
              $this->nameMd->getProd($catname, $id);
          }

          public function carzina($catname, $id) {
            $this->nameMd->setCookie($catname, $id);
          }


        }
    