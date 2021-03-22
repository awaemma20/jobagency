<?php 
include("db.php"); /*connection*/

if(isset ($_POST["apply"])){
    $firstname = mysqli_real_escape_string($db, $_POST["fname"]);
    $lastname = mysqli_real_escape_string($db, $_POST["lname"]);
    $age = mysqli_real_escape_string($db, $_POST["age"]);
    $gender =  $_POST["gender"];
    $emailaddress = mysqli_real_escape_string($db, $_POST["email"]);
    $phone_number = mysqli_real_escape_string($db, $_POST["phone"]);
    $position = mysqli_real_escape_string($db, $_POST["Position"]);
    
    /* 
        * Title: PHP File upload
        * Author: W3schools
        * Date: 2021
        * Code version: 2.0
        * Availability: https://w3schools.com/php/php_file_upload.asp
     */

    $target_dir = "cv/";
    $target_file = $target_dir . basename($_FILES["filetoupload"] ["name"]);
    $uploadok = 1;
    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(empty($emailaddress)  || empty($firstname) || empty($lastname) || empty($age) || empty($gender) || empty($target_file)){
        $message1 ="All fields are required"; /* if values are not filled return this message*/
    }elseif($_FILES["filetoupload"]["size"] > 500000){ /*constraint on the pic size*/
        $message1 = "Sorry, your file is too large.";
    }elseif($filetype != "pdf" && $filetype != "doc" && $filetype != "docx"){
        $message1 = "Sorry, only pdf, doc and docx are allowed"; /* print error message*/
           }else{
            if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO application (firstname, lastname,age,gender,emailaddress,phone_number,position,cv)
                 values ('$firstname','$lastname','$age','$gender','$emailaddress','$phone_number','$position','$target_file')";
                 if (mysqli_query($db, $sql)) {
                 $message2 = "Application successful!";  /* print success message once the values listed are complete for the job application */
        } 
        else {
            echo "Error:" .$sql . "<br>" . mysqli_error($db);
            } 
           }
           

    
       
        
        mysqli_close($db);
        }
    }
        ?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleregister.css"> <!-- LINKING TO CSS -->
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css"> <!-- LINKING TO UNSEMANTIC-GRID -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>register</title>
</head>
<body>
      <!--HEADER START-->
        <header>
        <img src="images/Awajobs2.png" alt="logo" width= "240" height="80" > <!-- LOGO RESIZING -->
        
        
        <!--NAVIGATION STARTS-->
        <nav>
            <ul>
                <li><a href="Home.php">|Home|</a></li>
                <li><a href="ViewJobs.php">|View Jobs|</a></li>
                <li><a href="CareerAdvice.php">|Career Advice|</a></li>
                <li><a href="Register.php">|Register/Upload CV|</a></li>
                <li><a href="ContactUs.php">|Contact Us|</a></li>   
                
            </ul>
        </nav>
        <!--NAVIGATION ENDS -->

        <div id="center2">
            <h1>Apply</h1>
            
            
        </div>
        
    <!-- MAIN STARTS-->
    <main>
        <div class="container">
            <img src="images/applynow.jpg" alt="jobs" style="width:100%; height: 900px;">
            <div class="content">
               <p style="color: red;"> <?php if(isset($message1)){ echo $message1; }?> </p>
             <p>   <?php if(isset($message2)){ echo $message2; }?> </p>
                <form action="" method="post" enctype="multipart/form-data"><br>

    <!-- FORM STARTS -->
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" maxlength="80" size="50"><br><br>

                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname"  maxlength="80" size="50"><br><br>

                    <label for="Age">Age Range:</label><br>

                    <select name="age" id="age">
                    <option value="20-35">20-35</option>
                    <option value="36-45">36-45</option>
                    <option value="46-55">46-55</option>
                    <option value="56 & above">56 & above</option>
                    </select><br><br>

                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    </select><br><br>

                    <label for="Position">Position:</label><br>
                    <select name="Position" id="Position">
                    <option value="Software Developer">Software Developer</option>
                    <option value="Dock Master">Dock Master</option>
                    <option value="1st Line Analyst">1st Line Analyst</option>
                    <option value="HR Personnel">HR Personnel</option>
                    <option value="Offshore Safety Officer">Offshore Safety Officer</option>
                    <option value="Crane Operator">Crane Operator</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Physio Therapist">Physio Therapist</option>
                    <option value="Door Supervisor">Door Supervisor</option>
                    <option value="Data Analyst">Data Analyst</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="Finance Analyst">Finance Analyst</option>
                    <option value="Sales Admin">Sales Admin</option>
                    </select><br><br>

                    <label for="email">Email address:</label><br>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="phone">Phone number:</label><br>
                    <input type="tel" id="phone" name="phone"><br><br>

                    <label for="myfile">Attach CV</label><br>
                    <input type="file" id="myfile" name="filetoupload"><br><br>

                    
                    <input type="submit" value="Apply" name="apply"> <!-- SUBMITS APPLICATION -->


          </form>
<!-- FORM ENDS -->

<!-- MAIN ENDS -->
    </main>
</body>
