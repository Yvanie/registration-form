<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/background1.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        }
        .title{
            text-align: center;
            padding-top: 10%;
            color: white;
            font-size: 30px;
        }
        .message{
            text-align: center;
            color: wheat;
            font-size: 20px;
        }
        .link{
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Welcome page</h1>
        </div>  
        <div class="message">
            <h2>Welcome <?Php echo $_SESSION['first_name'];?></h2>
            <span>Your account has been sucessfully created</span>
        </div>  
        <div class="link">
        <a href="logout.php">Deconnexion</a>
        </div>
    </div>
</body>
</html>
       
</body>
</html>