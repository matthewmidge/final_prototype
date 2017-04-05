<!-- =======================================================  PHP for login - sign up ==================================================== -->
<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<!-- ==================================================== HTML Page ============================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Homepage</title>

 
<link href ="css/bootstrap.css" rel="stylesheet"> 
<link href ="css/bootstrap-theme.css" rel="stylesheet"> 
<link href ="css/custom.css" rel="stylesheet">
</head>

<body>

<!-- ================================================ Navigation ============================================================= -->

  <?php 

    //navbar without log in, with basket and sign out option
    include('sessionnavbar.php');


?>

    <!-- ============================================ header ============================================= -->

    <header>
        

    <!-- ============================================== Carousel  ================================================== -->
    <!-- view-source:http://getbootstrap.com/examples/carousel/# 
          http://www.activeazur.com/wp-content/uploads/2013/10/mountain-biking-2-home-banner-1600x540.jpg
          https://coresites-cdn.factorymedia.com/mpora_new/wp-content/uploads/2017/01/P-20161031-00854_News.jpg
          https://www.ordnancesurvey.co.uk/blog/wp-content/uploads/2014/06/Fotolia_64800996_I.jpg --> 


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/header1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sign up for free shipping on first order</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/header2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Clearance Bikes Under £1000</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="clearancebikes.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/header3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    </header>
    <br>

    <!-- ========================================== content ================================================= -->

            <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1> About MTB Warehouse </h1> 
                <p>  Lorem ipsum dolor sit amet, cu nam justo appetere honestatis, in vim altera nostro. No vis aeterno propriae molestiae, ius verear vivendo disputationi ex. Cu numquam deserunt mediocritatem usu, eum vero expetenda id. Solum consul periculis eos id, eos an meliore indoctum abhorreant. Ut pri labitur impedit maiestatis, an vitae partem sadipscing sed, apeirian assueverit neglegentur in vis. Te primis eripuit nam. Vocent legimus molestie ei eum, sed ad minim inermis suscipit. No vis aeterno propriae molestiae, ius verear vivendo disputationi ex. Cu numquam deserunt mediocritatem usu, eum vero expetenda id. Solum consul periculis eos id, eos an meliore indoctum abhorreant. Ut pri labitur impedit maiestatis, an vitae partem sadipscing sed, apeirian assueverit neglegentur in vis.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <h2> Contact Info </h2>
                <p> Email: info@mtbwarehouse.co.uk <br> Tel: 01656 456 789 <br> Address: Unit 34, Brackla Industrial Estate, Bridgend, CF31 1DE </p> 
            </div>
            <div class="col-md-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d133671.0296183352!2d-3.5871676679002844!3d51.498726941418255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e6c5b4288cfe3%3A0xc172fac159ce9a6b!2sBrackla+Industrial+Estate%2C+Main+Ave%2C+Bridgend+CF31+1DE!5e0!3m2!1sen!2suk!4v1485704999327" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-3"></div>
        </div> 
      </div>




</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</html>
<?php ob_end_flush(); ?>