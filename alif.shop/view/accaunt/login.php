<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo APP; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/accaunt.css?ver1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class='text-  '>
<form action='Accaunt/logined' method='post' class="form-signin">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
 <?php echo !empty($_GET['empty']) ? "<p class='text-danger'>Please enter the inputs</p>" : '' ?>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" name='email' id="inputEmailLogin" class="form-control" placeholder="Email address"  autofocus="">
 <?php echo !empty($_GET['email']) ? "<p class='text-danger'>Please check the email</p>" : '' ?>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name='pwd' id="inputPasswordLogin" class="form-control" placeholder="Password" >
 <?php echo !empty($_GET['pass']) ? "<p class='text-danger'>Please check the password</p>" : '' ?>
  <div class="checkbox mb-3">
    <label>
     <p class='mt-2'><a href="accaunt/singup">New around here? Sign up</a> </p>
     <p><a href="<?php echo APP;?>accaunt/getPass">Forgot password</a></p>
    </label>
  </div>
  <button name='btnlogin' class="btn btn-lg btn-primary btn-block"  type="submit">Sign in</button>
  <p class=" mt-3 text-muted"><a href="<?php echo APP;?>">Home</a></p>

  <p class=" mb-3 text-muted">© 2017-2019</p>
</form>
<script src="public/js/main.js?123"></script>



<div class='div-bob'>

</div>
</body>
</html>