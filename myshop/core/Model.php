<?php 


 class Model{
public $db_conn = '';

    public function __construct(){
       $this->db_conn = $this->DB_Connect(); 
    }

    public function DB_Connect(){
      return   $conn = mysqli_connect(HOST, USNAME, PSNAME, DBNAME);
      
    }


    public static function header($url){
        $app = APP . $url; 
        header("Location: $app");
    }

    public function query($sql) {
        $sql =  mysqli_query($this->db_conn, $sql); 
        if($sql){
            return $sql;
        } else {
            $this->checkQuery();
        }
    }

    public function checkQuery(){
            echo mysqli_error($this->db_conn);
       
    }
    public function selectAll($table='', $name_colum='', $where='') {
        $sql = "SELECT *FROM " . $table;
        if(!empty($where)) {
            $sql .= " WHERE $name_colum= '$where'";
        }
        
        return $this->query($sql);
    }

    public function selectId( $table, $id_name='id',  $id){
        $sql = "SELECT *from $table WHERE $id_name='$id'";
        return $this->query($sql);
    }

    public function fetch($row){
        return mysqli_fetch_assoc($row);
    }



    public function delete( $table, $id_name='id',  $id){
    $sql = "DELETE FROM $table WHERE $id_name='$id'";
    $query = $this->query($sql);
    return $query;
    }
    



    public function deletePhoto($paht, $name){
         $a =  dirname(__FILE__); 
         $file = str_replace('\\', '/', rtrim($a, 'core'));
        unlink("$file". "public/imges/$paht/$name");

     }


    public function login_user($email, $pass) {
        $sql = "SELECT  email, lname  FROM users WHERE email='$email' and password='$pass'";
        $resault = $this->query($sql);
        $resault = mysqli_num_rows($resault);
        
        return $resault;
    }

    public function insert_register($name, $lname, $email, $pass, $avatar ='' ) {
        $sql = "INSERT INTO users(name, lname, email, password, avatar) VALUES('$name','$lname','$email','$pass','$avatar')";
        $query =  $this->query($sql);
        $id = mysqli_insert_id($this->db_conn);
        return $id;
    }


// File uplode for easy 
    public function upload_file($file , $url_file){
        if(isset($file) and !empty($file['name'])){
            $name =  $file['name'];
            $type = $file['type'];
            $tmp = $file['tmp_name'];
            $error = $file['error'];
            $size = $file['size'];

            $type =  explode('/' , $type);
            $typeForm = $type[0];
            $nameFormat = explode('.', $name); //explode to array for checking format file
            $nameFormat = strtolower(end($nameFormat));

            $formats_file = ['jpg', 'png', 'jpeg', 'gif', 'tfx' ];

            if(in_array($nameFormat, $formats_file)){
                if($typeForm == 'image'){
                if($error == 0){
                    if($size < 1000000){
                       $uplode = 'public/imges/'.$url_file.'/' . $name;
                       if(move_uploaded_file($tmp, $uplode)){
                           return $name;
                       } 
                    }
                }
            } 
        } 
        } 
        return false;
    }

    public function checkEmail($email, $id='') {
        $sql = $this->selectAll('users', 'email', $email);
        if($id == '') {
        $sql = mysqli_num_rows($sql);
        return $sql;
        } else {
            $sql = mysqli_fetch_assoc($sql);
            return $sql['id'];
        }
    }

    public function checkPassword($pass) {
        $query = $this->selectAll('users');
        $check = false;
        while($row = mysqli_fetch_assoc($query)){
            if(password_verify($pass, $row['password'])){
                $check =  true;
            }
        }
        return $check;
    }

   
}

new Model();
?>