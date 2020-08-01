<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    
<div class="container d-flex justify-content-center">
      	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up  </h3>
			 			</div>
			 			<div class="panel-body">
						 <?php echo isset($_GET['empty']) ?"<p class='text-danger'>Please inter the inputs</p>" : '' ?>
			    		<form role="form" class='ml-auto' action='<?php echo APP; ?>accaunt/registered' method='POST' enctype='multipart/form-data'>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" required placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" required  placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
							<?php echo isset($_GET['emailExsists'] ) ? "<p class='text-danger'>Email alredy in use</p>" :  "" ; ?>
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" required placeholder="Email Address">
			    			</div>
								<?php echo isset($_GET['passNotEquel'] ) ? "<p class='text-danger'>Passwords not equel </p>" :  "" ; ?>
 								<?php echo isset($_GET['passExists']) ? "<p class='text-danger'>Password is alredy in use</p>" : '' ?>

			    			<div class="row d-flex">
			    -				<div class="">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" required placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="ml-4">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" required class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="form-group">
								<input type="file" name="file" id="file" class="form-control input-sm" placeholder="chose the avatar" value='photo'>
								<?php echo isset($_GET['photo'])  ?  "<p class='text-danger'>Please choose the pthoto</p>" : "" ?>
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
						</form>
						<br>
						<p><a href="<?php echo APP; ?>accaunt/login">Sing in </a></p>
						<p><a href="<?php echo APP; ?>">Home </a></p>
			    	</div>
	    		</div>
    		</div>
    	
</body>
</html>