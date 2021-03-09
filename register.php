<?php 
include("db.php");

if(isset ($_POST["Register"])){
    $firstname = mysqli_real_escape_string($db, $_POST["fname"]);
    $lastname = mysqli_real_escape_string($db, $_POST["lname"]);
    $age = mysqli_real_escape_string($db, $_POST["age"]);
    $gender = mysqli_real_escape_string($db, $_POST["gender"]);
    $emailaddress = mysqli_real_escape_string($db, $_POST["email"]);
    $phone_number = mysqli_real_escape_string($db, $_POST["phone"]);
    $salary_expectation = mysqli_real_escape_string($db, $_POST["salary"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);
    $profile = mysqli_real_escape_string($db, $_POST["profile"]);
    $cv =  $_POST["filetoupload"];

    $target_dir = "cv/";
    $target_file = $target_dir . basename($_FILES["filetoupload"] ["name"]);
    $uploadok = 1;
    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(empty($emailaddress) || empty($password) || empty($firstname) || empty($lastname) || empty($age) || empty($gender) || empty($cv)){
        $message1 ="All fields are required";
    }elseif($_FILES["filetoupload"]["size"] > 500000){
        $message1 = "Sorry, your file is too large.";
    }elseif($filetype != "pdf" && $filetype != "doc" && $filetype != "docx"){
        $message1 = "Sorry, only pdf, doc and docx are allowed";
           }else{
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file" . htmlspecialchars(basename($FILES["fileToUpload"]["name"])). "has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
           }
           

    
        $sql = "INSERT INTO USERS (firstname, lastname,age,gender,emailaddress,phone_number,salary_expectation,password,profile,cv)
        values ('$firstname','$lastname','$age','$gender','$emailaddress','phone_number','salary_expectation','password','profile','cv')";
        if (mysqli_query($db, $sql)) {
            $message2 = "New record created succesfully";
            
        } else {
            echo "Error:" .$sql . "<br>" . mysqli_error($db);
        
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
    <link rel="stylesheet" type="text/css" href="styleregister.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>register</title>
</head>
<body>
      <!--HEADER START-->
        <header>
        <img src="images/Awajobs2.png" alt="logo" width= "240" height="80" >
        
        
        <!--NAVIGATION STARTS-->
        <nav>
            <ul>
                <li><a href="Home.html">|Home|</a></li>
                <li><a href="Login.html">|Login|</a></li>
                <li><a href="ViewJobs.html">|View Jobs|</a></li>
                <li><a href="CareerAdvice.html">|Career Advice|</a></li>
                <li><a href="Register.html">|Register/Upload CV|</a></li>
                <li><a href="ContactUs.html">|Contact Us|</a></li>   
                
            </ul>
        </nav>
        <div id="center2">
            <h1>Register/Upload CV</h1>
            
            
        </div>
    <main>
        <div class="container">
            <img src="images/pic8.jpg" alt="jobs" style="width:100%; height: 900px;">
            <div class="content">
               <p style="color: red;"> <?php if(isset($message1)){ echo $message1; }?> </p>
             <p>   <?php if(isset($message2)){ echo $message2; }?> </p>
                <form action="" method="post" enctype="multipart/form-data"><br>
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

                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br><br>

                    <label for="email">Email address:</label><br>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="phone">Phone number:</label><br>
                    <input type="tel" id="phone" name="phone"><br><br>

                    <label for="salary">Salary expectation:</label><br>
                    <input type="text" id="salary" name="salary"><br><br>

                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br><br>

                    <label for="Profile">Profile:</label><br>
                    <textarea id="textarea" name="profile" rows="8" cols="50"> Briefly tell us about yourself
                    </textarea><br><br>

                    <label for="myfile">Attach CV</label><br>
                    <input type="file" id="myfile" name="filetoupload"><br><br><br><br>

                    <input type="checkbox" id="emailalert" name="emailalert" value="emailalert">
                    <label for="emailalert">Receive Alert Job Alert </label><br>
                    <input type="checkbox" id="privacyterms" name="privacyterms" value="privacyterms">
                    <label for="privacyterms">I have read and understood the privacy terms </label><br><br>
                    <input type="submit" value="Register" name="Register">


          </form>
    </main>
</body>

<footer>
    <div class="footerlogo">
        <img src="images/Awajobs2.png" width="200" height="70">
    </div><br>
    <nav>
        <ul>
            <li> <a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
            <li> <a href="https://twitter.com" class="fa fa-twitter"></a></li>
            <li> <a href="https://instagram.com" class="fa fa-instagram"></a><li>
            <li> <a href="https://linkedin.com" class="fa fa-linkedin"></a></li>
        </ul>
    </nav>


    <div class="grid-container5">
        <div class="grid-33">
            <ul>
                <h4>Talk to us</h4>
                <li>+44-7724-642771</li>
                <li>+44-7443-738070</li>
            </ul>
        </div>
    </div>

    <div class="grid-container6">
        <div class="grid-33">
            
            <ul>
                <h4>Email</h4>
                <li>enquiries@awajobs.com</li>
                <li>info@awajobs.com</li>            
            </ul>
        </div>

    </div>

    <div class="grid-container7">
        <div class="grid-33">
            
            <ul>
                <h4>Location</h4>
                <li>Garthdee House, Garthdee Rd,<br>
                Garthdee, Aberdeen<br> AB10 7AQ</li>
                            
            </ul><br><br><br>
        </div>

    </div>

    
</footer>
    