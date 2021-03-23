<!-- 
   * Title: PHP FORMS
        * Author: W3schools
        * Date: 2021
        * Code version: 2.0
        * Availability: https://www.w3schools.com/php/php_form_validation.asp
 -->

<?php
include ("connection.php");   /*connection*/


if(empty($_POST["email"])|| empty($_POST["psw"])){
    echo "both fields required";    /* print error message*/
    
} else{
    $emailaddress=$_POST["email"];
    $password=$_POST["psw"];

$sql = "SELECT user_id from users where emailaddress ='$emailaddress' AND password = '$password'"; /*get email and password from users table*/
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1){
    
    header("location:home.php");  /*if a success take me to home page*/
} else{
    echo"incorrect email address and password";  /* print this error message*/
}
}

?>