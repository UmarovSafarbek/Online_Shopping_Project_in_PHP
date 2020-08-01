<?php 

if(isset($_GET['logaut'])) { 
    if(isset($_SESSION["name"])){
        session_destroy();
        header('Location: http://localhost/alif.shop/accaunt/logaut');
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo APP; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public/css/main.css?vesr=">
<link rel="stylesheet" href="public/css/admin.css?s">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <title><?php echo $title;?></title>
</head>
<body style='background-color: white'>
    
<header>
        <div class="logo"><img src="https://alif.shop/images/logos/10/alifshop_logo.png" width='150' height='50' alt=""></div>
    <nav>
        <ul class='left-menu'>
            <li><a href="<?php echo APP; ?>admin/controller">Orders</a></li>
            <li><a href="<?php echo APP; ?>admin/">Products</a></li>
            <li><a href="<?php echo APP; ?>admin/addproduct">AddProduct</a></li>
            <li><a href="<?php echo APP; ?>admin/">Update</a></li>
        </ul>
        <ul class='right-menu'>
             <li><a href="<?php echo APP; ?>/main/index/?logaut">Logaut</a></li>
    
            
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