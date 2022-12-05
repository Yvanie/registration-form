
<?php
	include('traitment.php');
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
			    	<h3 class="panel-title ">Registration form</h3>
			 	</div>
			 	<div class="panel-body">
			    	<form role="form" method="POST">
			    		<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
                                    <label for="first_name" class="form-group">First Name</label>
			                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Enter your first name">
			    				</div>
			    			</div>
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
                                    <label for="last_name" class="form-group">Last Name</label>
			    					<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Enter your last name">
			    				</div>
			    			</div>
			    		</div>
			    		<div class="form-group">
                            <label for="email" class="form-group">Email</label>
			    			<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Enter your email">
			    		</div>
			    		<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
                                <label for="password" class="form-group">Password</label>
			    					<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Enter your password">
			    				</div>
			    			</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                    <label for="password" class="form-group">Confirm Password</label>
			    						<input type="password" name="confirm_password" id="confirm_password" class="form-control input-sm" placeholder="Confirm your passwo">
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" name="submit" value="Register" class="btn btn-info btn-block">
                            <br>
                            <small>Deja membres? </small><a href="login.php">Connecter vous!</a>
			    	</form>
			    </div>
	    	</div>
    	</div>
    </div>
</div>
</body>
</html>