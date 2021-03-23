<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="stylelogin.css"> <!-- link to css -->
    
</head>
<body>
     
<!-- CODE LIBRARY USED IS "unsemantic-grid-responsive-tablet.css" -->

    <div class="grid-container1">
        <div class="grid-50">
        <form method = post action="connectadmin.php" class="container"> <!-- post method -->
          <h1>MyAdmin Login</h1>

        <!-- form starts -->
          <label for="email"><b>admin_username</b></label>
          <input type="text" placeholder="Enter admin_username" name="admin_username" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
         
      
          <button type="submit" class="btn">Login</button>
          
         
        </form> 
        <!-- form ends -->
    </div>

    <div class= "grid-container2">
    <div class= "grid-50">
        <img src="images/admin.jpg" width="800" height="600">
    </div>

    
</body>
</html>