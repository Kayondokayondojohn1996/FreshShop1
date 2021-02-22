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
.jumbotron {
  width: 100%;
  height: 100%;
  background: #F9E79F;
 

@keyframes mymove {
  50% {background-color: #AED6F1;}
}
</style>

    <style>
body {
  

  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)), url('images/UNNO-RANGE-02.jpg ');
	height: 100vh;
	background-size:cover;
	background-position:center;
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
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                    <img src="images/Logo.png"  width="10% "/>  freshshop</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available bikes</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <div id="myDIV">
        <center>
        </p><div class="jumbotron" style="margin-top:20px; color:maroon; ">
  <h1 class="display-4">About Us</h1>
  <p class="lead"> The  freshshop  operates as an ecommerce platform. The company started 2021 as a small  market to sell  fresh fruits of different kind. The product line had expanded to include a number of fruits  . Today, the company is one of the biggest market  . Its an ecommerce site launched in 2021 to accommodate the growing population of loyal and new customers who prefer to buy online . 
   
  <hr class="my-4">
  <h4>Customers First </h4>
  <p class="lead">
        Building loyalty and good relationship with our customer is our priority. 
        The company exist to give the best price without compromising the quality and to
         make each transaction experience easy,safe and 
        accessible to online buyers.

 
    </p>
    <hr class="my-4">
    <h2>Mission</h2>
    <p class="lead">
            Our goal is to give our customers the best online shopping experience by giving them the best price and making each transaction  easy,  fast and secured.</p>
   
            <hr class="my-4">
            <h2>Vision</h2>
            <p style="text-align:center;">
            To be the top Agricultural fresh products sellers nationwide.
        </p>

  <a class="btn btn-primary btn-lg" href="available.php" role="button">View products</a>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7979.527091237574!2d32.544537175429895!3d0.3002283278357933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x177dbcb8a7a7d0e1%3A0xa993b455ecc0e9e5!2sUganda%20Martyrs%20University%20Rubaga%20B%2C%20Kampala%2C%20Uganda!3m2!1d0.3001683!2d32.5533687!4m3!3m2!1d0.300936!2d32.542685999999996!5e0!3m2!1sen!2sus!4v1592321375971!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    </div>
<!--*************************************************** FOOTERS **********************************************-->
    <?php include('includes/footer.php');?>

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