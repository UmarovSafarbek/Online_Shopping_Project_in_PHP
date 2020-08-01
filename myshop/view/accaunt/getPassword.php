<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Document</title>
</head>
<body>
  <?php if(!isset($_GET['putPass'])) :?>
  <div class="container">
  <div class="col-4 mx-auto">
 <form action='<?php echo APP; ?>accaunt/getPassword'      method='post' class="form-signin">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
 <?php echo !empty($_GET['empty']) ? "<p class='text-danger'>Please enter the inputs</p>" : '' ?>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" name='email' id="inputEmailLogin" class="form-control" placeholder="Email address"  autofocus="">
  <div class="checkbox mb-3">
    <label>
     <p class='mt-2'><a href="<?php echo APP; ?>accaunt/singup">New around here? Sign up</a> </p>
    </label>
  </div>
  <button name='btnlogin' class="btn btn-lg btn-primary btn-block"  type="submit">Sent</button>
  </form>
      </div>
      </div>
  <?php  endif;  if(isset($_GET['putPass'])) : 
  $id=$_GET['putPass'];
    ?>
    <div class="container">
  <div class="col-4 mx-auto">
 <form action="<?php echo APP; ?>accaunt/changePassword/?id_email=<?php echo $id; ?>"  method='post' class="form-signin"> 
  <h1 class="h4 mb-3 font-weight-normal">Please paste the new password</h1>
 <?php echo !empty($_GET['empty']) ? "<p class='text-danger'>Please enter the inputs</p>" : '' ?> 
 <label for="inputEmail" class="sr-osnly">New Password</label>
  <input type="text" name='pass' id="inputEmailLogin" class="form-control" placeholder="New Password"  autofocus=""><br>
  <label for="inputEmail" class="sr-">Config Password</label>
  <input type="text" name='passConfig' id="inputEmailLogin" class="form-control" placeholder="Config Password"  autofocus="">
  <div class="checkbox mb-3">
    <label>
     <p class='mt-2'><a href="<?php echo APP; ?>accaunt/singup">New around here? Sign up</a> </p>
    </label>
  </div>
  <button name='btnlogin' class="btn btn-lg btn-primary btn-block"  type="submit">Sent</button>
  </form>
      </div>
      </div>
    <?php endif ?>
</body>
</html>