<?php 

class Index_Model extends Model {
    
        public function __construct() {
            parent::__construct();
        }

        public function selectProducts(){
            $query = $this->query("SELECT *FROM products ORDER BY RAND() LIMIT 24");
            return $query;
        }

        public function search($name){
            if($name != ""){           
             $search = $this->query("SELECT *FROM products WHERE name LIKE '$name%' or cat_name='$name'");
                if(mysqli_num_rows($search) > 0){
                    $rows = [];
                  while($row = mysqli_fetch_assoc($search)){
                    $rows[] = $row;
                  }
                    echo json_encode($rows, JSON_UNESCAPED_UNICODE);
                }
                else {
                 echo  json_encode(['massege' => "Not Found Try again"], JSON_UNESCAPED_UNICODE);
                }
        } 
    } 

    public function getProd($name, $id) {
       $prod =  $this->selectAll('products', 'id_prod', $id);
        $prod = $this->fetch($prod);
        echo json_encode($prod, JSON_UNESCAPED_UNICODE);
    }   


    public function setCookie($catname, $id) {
        $prod =  $this->selectAll('products', 'id_prod', $id);
        $prod = $this->fetch($prod);

        setcookie("name", $prod['name'], time() + 600, "/");
        setcookie("price", $prod['price'], time() + 600, "/");
        setcookie("photo", $prod['photo'], time() +600, "/");
        setcookie("id", $prod['id_prod'], time() + 600, "/");


        setcookie("name", '', time() - 300);
    }   



}


?>