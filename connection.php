<!-- 
   * Title: PHP CONNECT TO MYSQL
        * Author: W3schools
        * Date: 2021
        * Code version: 2.0
        * Availability: https://www.w3schools.com/php/php_mysql_connect.asp
 -->

<!-- setting up connection with database -->

<?php
/* Database credentials.server with default setting (user 'root' with no password) */
  $servername="localhost";
  $dbname="awajobs";
  $username="root";
  $password="";

/* Attempt to connect to the database*/
  $db=new mysqli($servername,$username,$password,$dbname);

  /*check connection*/
  if ($db->connect_error){
      die("connection failed: " . $db->connect_error);
  }
  

?>

