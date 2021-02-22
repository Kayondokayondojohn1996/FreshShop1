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
    
    <title>Freshshop Online market</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    

<style>
body {
  

  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)), url('images/456675.jpg ');
	height: 100vh;
	background-size:cover;
	background-position:center;
}


.contact-form .form-control{
    border-radius:1rem;
}

.contact-form form{
    padding: 10%;
    
}
.contact-form form .row{
    margin-bottom: -100%;
}
.contact-form h3{
    margin-bottom: ;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
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
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:Pink;">
                        <img src="images/logo.png"  width="10% "/>  freshshop</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available products</a></li>
                        <li class="active"><a href="contacts.php">Contacts</a></li>
                                                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>

<div class="container">
        <section id="contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:yellow;">How to Reach Us?</span></center>

            <div class="left wow fadeInDown">
                
               <div class="col-md-6">
                <img src="images/030onnvptu6j2izibkbi-28-contact-us.png" class="img-responsive pull-right" >
                
               </div> 
               
               <div class="col-md-6">
                <p class="lead">
                    
                    <p style="color:Cyan;"><span style="font-size:20px; font-weight:bold; font-family:verdana; color:lightblue;">KAYONDO JOHN</span>
                    <br><b style="color:greenyellow;">Address:</b> Rubag,kampala<b style="color:greenyellow;"><br>Tel/Phone:</b> +256740426389 / +256754421212<b style="color:greenyellow;"><br>Email Address:</b> Kayondojohn@gmail.com</p>
                    <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:Violet;">We are open</span>
                    <p style="color:greenyellow;"><b >MONDAY TO FRIDAY -- 8:00AM - 5:00PM</b></p>
                </p>
                <hr>
                <table style="width:80px;">
                    <tr>
                        <td><a href="http://www.facebook.com"><img data-toggle="tooltip" src="images/ico/Facebook.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.instagram.com"><img src="images/ico/icons_Instagram.png" class="img-responsive"  /></a></td>
                        <td><a href="http://www.twitter.com"><img src="images/ico/Twitter.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.youtube.com"><img src="images/ico/YouTube.png" class="img-responsive" /></a></td>
                    </tr>
                </table>

                </div>
            </div>
        
 <div class="container contact-form">
            
            <form  method="post"  name=”EmailForm” enctype=”multipart/form-data” action="mailto:1simongombya@gmail.com"; >
                <h3 style="font-size:20px; font-weight:bold; font-style: italic; font-family:verdana; color:cyan;">Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group"  >
                           <input  type="submit"  name="btnSubmit" class="btnContact" value="Send Message"  />
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            
</div>



</form>

           
        </section>
        
</div>




<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
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