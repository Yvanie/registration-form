<?php

session_start();
if(isset($_POST['submit'])){
    $FN = $_POST['first_name'];
    $LN = $_POST['last_name'];
    $email= $_POST['email'];
    $pass = $_POST['password'];
    $Cpass=$_POST['confirm_password'];
    
    $_SESSION['first_name'] = $FN;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = md5($pass);
    //var_dump($_SESSION['firstname']);
    //var_dump($_SESSION['password']);
    //exit;
    if($pass == $Cpass){
       
       header("location: login.php");
    }else{
        echo "Password don't matches";
    }
}


?>
	


