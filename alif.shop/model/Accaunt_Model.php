<?php 

class Accaunt_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function checkLoginUser($email='', $psd){

        if(!(empty($email) && empty($psd))){
        if(!((filter_var($email, FILTER_VALIDATE_EMAIL) == true) and $email != '')) { 
            
            header("Location: login/?email=123");
            ?>
        
        <?php } else {
            if(!empty($psd) and strlen($psd) > 3) {
                if($this->checkEmail($email)){
                    $pas = $this->query("SELECT *FROM users WHERE email='$email'");
                    $row_user = mysqli_fetch_assoc($pas);
                        
                    if($email == "admin@gmail.com" || $email =='admin1@gmail.com')  {
                        if(password_verify($psd, $row_user['password'])){
                            $app = APP . 'admin/controller';
                           header("Location: $app" );
                        } else {
                             header("Location: login/?passValid=123");
                        }
                    } else {
                    if(password_verify($psd, $row_user['password'])){
                    $_SESSION['id_user'] = $row_user['id_user'];
                    $_SESSION['name'] = $row_user['name'];
                    $_SESSION['email'] = $row_user['email'];
                    $_SESSION['lname'] = $row_user['lname'];
                    $_SESSION['avatar'] = $row_user['avatar'];
                    setcookie("user", $_SESSION['name'], time() * 60 * 2 , '/');
                        $app = APP;
                    header("Location: $app");
                } else {
                    header("Location: login/?passValid=123");
                }
            }
               
            } else {
                header("Location: login/?email=123");
            }
              } else { ?>
                <script> window.location = 'login/?pass=123';  </script><?php
            }
        }
    } else {
        header("Location:  login/?empty=inputs");
    }
    }



    public function ChekRegistretion($name, $lname, $email, $pass, $configPass, $avatar = ''){
        $email_exsits = $this->checkEmail($email);   
        if($email_exsits ==  0){
        if(empty($name) || empty($lname) || empty($email) || empty($pass)){
            header("Location: singup/?empty=inputs");
        } else {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) and strlen($pass) >= 3 and strlen($name) >= 3) {
                if($pass == $configPass){
                    if(!$this->checkPassword($pass)){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $namePhoto = $this->upload_file($avatar, "uplodePhotoUser");
                $query = $this->insert_register($name, $lname, $email, $pass, $namePhoto );
                $_SESSION['id_user'] = $query;
                $_SESSION['name'] = $name;
                $_SESSION['lname'] = $lname;
                $_SESSION['email'] = $email;
                $_SESSION['avatar'] = $namePhoto;
                setcookie("user", $_SESSION['name'], time() * 60 * 2 , '/');
                Model::header("main");
                return $query;
               
                    } else {
                      
                        header("Location:   singup/?passExists=erorr");
                    }
            } else {
                    header("Location:   singup/?passNotEquel=eroro");
                }
           
            }  else {
                header("Location: singup/?sintax=eroro");
            }
        }
    } else {
        header("Location: singup/?emailExsists=eroro");
    }

    } 

    public function getPasswordUser($email){
        if(isset($email) && !empty($email)) {
            
        $email_num = $this->checkEmail($email);
        $id = $this->query("SELECT id_user FROM users WHERE email='$email'");
        $id = mysqli_fetch_assoc($id);
        
        if($email_num) {
          header("Location: getPass/?putPass=".$id['id_user']);
        } else {
        header("Location: getPass?"); 
        }
    } else {
        header("Location: getPass"); 
    }
    }

    public function changePass($newpas, $conf, $id){
        if($newpas != '' and $conf != '' and $id != ''){
            if($newpas == $conf){
        if(!$this->checkPassword($newpas)){    
            $newpas = password_hash($newpas, PASSWORD_DEFAULT);
        $this->query("UPDATE users SET password='$newpas' WHERE id_user='$id'"); 
        $loc = APP;
        header("Location: {$loc}accaunt/login");
     } else {
         echo "Password alredy in use";
          }
    } else {
        echo "Passwords is not equel";
    }
    } else {
        echo 'Please input the inputs';
    }
} 
}       
         

?>