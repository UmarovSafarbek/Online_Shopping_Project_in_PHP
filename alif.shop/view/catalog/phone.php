


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='catalog'>
        <div class='main'>
                <div class='photo'>
                    <img src="<?php  echo APP;?>public/imges/product/<?php echo $row['photo'] ?>" alt="">
                </div>
                <div class="nameprice">
                    <h3>Very popular phon is this phone <span><?php echo $row['name']; ?></span> </h3>
                   <span>
                    <h2>Name: <?php echo $row['name']; ?> </h2>
                    <h2>Price: <?php echo $row['price']; ?> C</h2>
                    <h2>Year: <?php echo $row['year']; ?>г</h2>
                    </span>
                </div>
        </div>
        <div class="description">
            <p><h2>About <?php echo $row['name'] ?></h2></p>   
        <p><h2>Description </h2></p>
        <p style='font-size: 22px;'><?php echo $row['description'] ?></p>
    </div>
    </div>
</body>
</html>