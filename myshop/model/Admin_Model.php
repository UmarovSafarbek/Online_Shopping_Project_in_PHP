<?php 

class Admin_Model extends Model{

    public function addProduct($name, $file)
    {
        
        $categoty = $name['category'];
        $name1 = $name['name'];
        $description = $name['description'];
        $price = $name['price'];
        $year = $name['year'];
        $photo = $this->upload_file($file , 'product');
        if($categoty != '' and $name != '' and $name1 != '' and $description != ''
            and $price != '' and $year != '' and $photo != false){
        $sql = "INSERT INTO `products` ( `name`, `description`, `price`, `year`,`photo`, `cat_name` ) VALUES ('$name1', '$description', '$price', '$year', '$photo', '$categoty')";
        $query = $this->query($sql);
        Model::header('admin/addproduct/?added=product');
        }  else {
            Model::header('addproduct/?error=inputs');
        }
    }


    public function selectUsers($id=''){
        $users = $this->selectAll('users');
        return ($users);
    }

    public function seacrTest($searcs){
        if($searcs != ''){
        $user = $this->selectAll("users");
        if(mysqli_num_rows($user) > 0){
            $users = mysqli_fetch_assoc($user);
            $arr = [];
            foreach ($user as $key) {
                unset($key['password']);
                if($searcs !=''){
                if(stristr($searcs,   substr($key['name'], 0, strlen($searcs)))){
                   $arr[] = $key;
                }
              }
            }
        
            echo json_encode($arr);
        } 
    }
    }
}
?>