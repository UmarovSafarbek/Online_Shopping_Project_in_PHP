<?php 

if(isset($_GET['logaut'])){
    if(isset($_SESSION["name"])){
        session_destroy();
        header('Location: http://localhost/alif.shop/');
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo APP; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public/css/main.css?vesr=">
<link rel="stylesheet" href="public/css/product.css?">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <title><?php echo $title; ?></title>
</head>
<body>
    
<header>
        <div class="logo"><img src="https://alif.shop/images/logos/10/alifshop_logo.png" width='150' height='50' alt=""></div>
    <nav>
        <ul class='left-menu'>
            <li><a href="">Home</a></li>
            <li><a href="">Catalog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul class='right-menu'>
            <li><input type='search' id='search'  placeholder='Search among 123 254 things'></li>
            <li style='margin-left: 2px '><a onclick='showInp()'> <i class="fa fa-search fa-2x" aria-hidden="true"></i></a></li>
            <?php if(!isset($_SESSION['name']))  {?>
            <li><a href="accaunt/singup">Sing up</a></li>
            <li><a href="accaunt/login">Sing in</a></li>
            <?php }  elseif(isset($_SESSION['name'])){ ?>
             <li><a href="<?php echo APP; ?>/main/index/?logaut">Logaut</a></li>
            <?php  }?>
            <li><a style='display: flex; align-items: center' href=""><i class="fa fa-cart-plus fa-2x " aria-hidden="true"> </i>
             <span style='margin-left: 5px; font-size: 20px' id='total'>0</span></a></li>
        </ul>
    </nav>
</header>

<!-- PROFILE USER -->
<?php if(isset($_SESSION['name'])) : ?>
<div class="profile">
    <div class="bg-top">  </div>
    <div class="img-h2">
        <img src=" <?php echo APP; ?>public/imges/uplodePhotoUser/<?php echo $_SESSION['avatar']; ?>" alt="" srcset="">
        <h2><?php echo $_SESSION['name'] . ' '. $_SESSION['lname'];  ?></h2>
    </div>
    <div class='bottom '>
        <a href="">My order</a>
        <a href="">Logaut</a>
    </div>
</div>

<?php endif ?>