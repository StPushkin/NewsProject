<?php
$login=$_GET['login']; 
$email=$_GET['email']; 
$password = $_GET['password'];                  
$cpassword = $_REQUEST['confPassword'];

  if ($password==$cpassword){

 
    mysqli_query(" INSERT INTO Users (login, email, password) VALUES ('$login','$email','$password') ");
    $registered = mysql_affected_rows();
    echo "$registered was inserted";
} else{
    echo"Your passwords don't match";
}   


  
?>