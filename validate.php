<?php
include ("connection.php");
if(empty($_POST["email"])|| empty($_POST["psw"])){
    echo "both fields required";
    
} else{
    $emailaddress=$_POST["email"];
    $password=$_POST["psw"];
}
$sql = "SELECT user_id from users where email ='$emailaddress' AND password = '$password'";
$result = mysqli_query($db,$sql);

if(mysqli_num_rows($result)==1){
    header("location:home.php");
} else{
    echo"incorrect username and password";
}

?>