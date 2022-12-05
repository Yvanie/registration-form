
<?php
	session_start();
	//var_dump($_SESSION['first_name']);
	//var_dump($_SESSION['email']);
	if(isset($_POST['submit'])){
		$email= $_POST['email'];
		$pass = md5($_POST['password']);
		if($email == $_SESSION['email'] && $pass ==  $_SESSION['password']){
			header("location: welcome.php");
		}else{
			echo ("Incorrect username and password");
			header("location: login.php");
		}
		
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading center">
			    	<h3 class="panel-title ">Login form</h3>
			 	</div>
			 	<div class="panel-body">
			    	<form role="form" method="POST">
			    				<div class="form-group">
                                    <label for="email" >Email</label>
			                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
			    				</div>
			    				<div class="form-group">
                                	<label for="password" >Password</label>
			    					<input type="password" name="password"  class="form-control " placeholder="Enter your password" required>
			    				</div>
			    			<input type="submit" name="submit" value="submit" class="btn btn-info btn-block">
                            <br>
                            <small>Already member? </small><a href="index.php">Create an account!</a>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</body>
</html>