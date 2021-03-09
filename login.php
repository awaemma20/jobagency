<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="stylelogin.css">
    
</head>
<body>
        
    <div class="grid-container1">
        <div class="grid-50">
        <form method = post action="validate.php" class="container">
          <h1>Login</h1>
      
          <label for="email"><b>Email Address</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
         
      
          <button type="submit" class="btn">Login</button>
          
         <button type="Signup" class="btn">Signup</button>
         <a href="forgot password.html">forgot Password</a>
        </form>
    </div>

    <div class= "grid-container2">
    <div class= "grid-50">
        <img src="images/pic4.jpg" width="800" height="600">
    </div>

    
</body>
</html>