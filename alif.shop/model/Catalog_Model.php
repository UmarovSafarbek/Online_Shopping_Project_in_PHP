<?php 

class Catalog_Model  extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        echo "<h2>Hello world</h2>";
    }

    public function showPhone($name, $id){
        $test = "SELECT *FROM products WHERE cat_name='$name' AND id_prod='$id'";
        $name = $this->query($test);
        return $this->fetch($name);
    }
}

?>