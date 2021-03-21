<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylehome.css"> <!-- link to css -->
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">  <!-- LINKING TO UNSEMANTIC-GRID -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- LINKING THE CODE LIBRARY: cdnjs/font-awesome" to syle my fonts -->
    <title>Home</title>
</head>
<body>
      <!--HEADER START-->
      <header>
        <img src="images/Awajobs2.png" alt="logo" width= "240" height="80" >
        
        <form id="form"> 
            <input type="search" id="query" name="q" placeholder="Search jobs...">
            <button>Search..</button> <!-- search jobs -->

        </form>
        <!--NAVIGATION STARTS-->
        <nav>
            <ul>
                <li><a href="Home.php">|Home|</a></li>
                <li><a href="ViewJobs.php">|View Jobs|</a></li>
                <li><a href="CareerAdvice.php">|Career Advice|</a></li>
                <li><a href="Register.php">|Register/Upload CV|</a></li>
                <li><a href="ContactUs.php">|Contact Us|</a></li> 
                <li><a href="Login.php">|Logout|</a></li> 
                
            </ul>
        </nav>
        <!--NAIGATION END-->
    <!--MAIN STARTS-->
    <main>
        
        <div class="container"> <!-- transparent image text -->
            <img src="images/pic1.jpg" alt="jobs" style="width:100%; height: 700px;"> 
            <div class="content">
              <h1>AWAJOBS</h1>
              <p>AWAJOBS is the leading job recruitment company in the UK. Our longing partnership with top companies 
                  makes us stand out. AWAJOBS team are experienced and dedicated to serve potential job
                  seekers the best update and channel to their potential employers. Also we have experienced team to 
                  provide you a career advice for a career path. WELCOME!!!
              </p>
            </div>
        </div>

<!-- CODE LIBRARY USED IS "unsemantic-grid-responsive-tablet.css" -->
        <section class="grid-container">
            <div class="grid-50">
                <p>
                    <h4>About Us. unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,dic
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, nihi
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modigh
                    empora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,esto
                    quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi veianm
                    consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil quam dir
                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</h4>
                <p>
                <p>
                    <h4>
                    Ot perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,vitae
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dia 
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, mold
                    qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modipoi
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dia 
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, mold.



                    </h4>
                </p>
                    

            </div>
                    <div class= "grid-container2">
                    <div class= "grid-40">
                            <p>
                                <embed src= "images/video.mp4" height="400" width="600" /> <!-- embeded video -->
                               </p>


                        
                   </div>
    </main>
    <!-- MAIN ENDS -->
    
</body>

<!--footer starts-->

<footer>
    <div class="footerlogo">
        <img src="images/Awajobs2.png" width="200" height="70">
    </div><br>

    <!-- 
        * Title: How to- social media  buttons
        * Author: W3schools
        * Date: 2021
        * Code version: 2.0
        * Availability: https://w3schools.com/howto/howto_css_social_media_buttons.asp
     -->
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
<!--footer ends-->
</html>