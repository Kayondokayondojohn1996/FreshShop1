 <?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freshshop</title>
  
  <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">




    
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 1px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 11.5s;
  animation-name: fade;
  animation-duration: 3.5s;
}

@-webkit-keyframes fade {
  from {opacity: .22} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

    <style>
body {
  

  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)), url('instagram-img.png ');
	height: 100vh;
	background-size:cover;
	background-position:center;
}
.myButton {
	background-color:transparent;
	display:inline-block;
	cursor:pointer;
	color:yellow;
	font-family:Times New Roman;;
	padding:16px 31px;
	text-decoration:none;

}
.myButton:hover {
	background-color:transparent;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:0px; color:#FFF;"> 
                <img src="images/logo.png"  width="50px "/>  Freshshop</h4></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available products</a></li>
                        <li><a href="contacts.php">Contacts</a><a href="login.php" class="myButton" <h1 style=" font-size:15px; color:yellow ;  font-family: Times New Roman;"> login/sign up </h1></a></li>
                        
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    
       <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  style="background-color:orange; padding:px;">
              <!-- Indicators -->
            <!--  <ol class="carousel-indicators"  >
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
             <!-- <div class="carousel-inner">

                <div class=" carousel-item active">
                  <img src="images/198350.jpg" width="1335" height="550" >
                </div> -->
                
               
              </div>
                              
              <!-- Controls -->
            <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> 

<!--*********************************************product PACKAGES************************************************-->
 



<h1 style=" font-size:65px; color:yellow ;  font-family: Times New Roman;"> welcome to the<p> home of fresh shop</p> </h1>


<h1 style=" font-size:30px; color:pink ; font-style: italic; font-family: Comic Sans MS;  text-align:right;"><a href="available.php"> <button type="button" class="btn btn-warning" style=" font-size:15px;">see fruits on market</button></a>connect to us for your favourite <p>fresh fruits,vegetables etc...</p> </h1>




<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/gallery-img-02.jpg" style="width:100%; height:300px;">
  <div class="text">fruits</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/img-pro-01.jpg" style="width:100%; height:300px;">
  <div class="text">vegetables</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/img-pro-02.jpg" style="width:100%; height:300px;">
  <div class="text">Roots and Tubers</div>
</div>


<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/blog-img.jpg" style="width:100%; height:300px;">
  <div class="text">vegetables</div>
</div>


</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

            
            </div>
            

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our freshshop &nbsp<i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProducts price range</div>
              <ul class="list-group">
               
                <li class="list-group-item wow fadeInDown" style="font-size:16px; font-weight:bold; color: maroon;">vegetables-<span style="color:#8B8B00; font-weight:bold;">5k to 9k</span><span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>

                 <li class="list-group-item wow fadeInDown" style="font-size:16px; font-weight:bold; color: maroon;">fruits-        <span style="color:#8B8B00; font-weight:bold;">2k to 4k </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 
                  <li class="list-group-item wow fadeInDown" style="font-size:16px; font-weight:bold; color: maroon;">roots-   &nbsp&nbsp&nbsp&nbsp&nbsp   <span style="color:#8B8B00; font-weight:bold;">4k to 6k </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  
                   <li class="list-group-item wow fadeInDown" style="font-size:16px; font-weight:bold; color: maroon;">Tubers-   <span style="color:#8B8B00; font-weight:bold;">4k to 7k </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 other freshfruits

            
              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
            </div>
            <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                    <div class="recent-work-wrap" class="wow fadeInDown">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview wow fadeInDown" href="images/Annotation 2020-07-13 123406.png" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                </div>  
        </div>


        
        
</div><!--/.container-->

<!--*************************************************** FOOTERS **********************************************-->
<div class=" footer1">
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
               &copy; 2021 <a target="_blank" href="#" title="#">freshshop Online market</a>. All Rights Reserved.&nbsp&nbsp<a href="index.php"> <i class="fa fa-facebook-square" ></i></a>&nbsp&nbsp <a href="index.php"> <i class="fa fa-twitter"></i></a>&nbsp&nbsp <a href="index.php"><i class="fa fa-whatsapp"></i></a> <a href="index.php"> <i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li class="wow fadeInDown"><a href="contacts.php "><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    </div>
 <!----loginModal----->
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>