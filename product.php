<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Example Products</title>


<link href ="css/bootstrap.css" rel="stylesheet"> 
<link href ="css/bootstrap-theme.css" rel="stylesheet"> 
<link href ="css/custom.css" rel="stylesheet"> 
</head>

<body>



<!-- ================================================ Navigation ============================================================= -->

    <?php 

  ob_start();
  session_start();
  require_once 'dbconnect.php';

 // checks to see if user is logged in and then pulls the relevant nav bar dependant 
  if( !isset($_SESSION['user']) ) {
    //nav bar with log in option and no basket link
    include('navbar.php');
  }else{
    //navbar without log in, with basket and sign out option
    include('sessionnavbar.php');
  }

    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);
?>

    <!-- ============================================ header ============================================= -->
    <!-- <a href='http://www.freepik.com/free-vector/mountain-silhouettes_792530.htm'>Designed by Freepik</a> --> 


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
        <!-- ===================================================== content ============================================== -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6>"
            <br>
            <?php
      include_once('config.php');
          
            $code = $_GET['id'];
            //
            $array = array();

            $sql = "SELECT * FROM ctp_products WHERE code=$code";
            $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                 
                 //$basketname[] = $row['make'];
                 //$basketmodel[] = $row['model'];
                 //$basketprice[] = $row['price'];

                echo "<div class='col-md-3'>" . "<img src='img/products/JPEG/" . $row['img'] . "'>" . "</a>" . "<br>" .  "</div>" . "<div class='col-md-3' style='margin-top: 100px;'>" . $row['make'] . "<br>" . $row['model'] . "<br>" . $row['price'];
                    if( !isset($_SESSION['user']) ) {
                       echo "<br>" . "Please Log In to add products to basket." . "<br>" . "</div>"; 
                     }else{
                        echo "<br>" . "<a href='#popup1' class='btn btn-primary btn-lg active' role='button' aria-pressed='true' style='margin-top:20px;'>Add to Basket</a>" . "<br>" . "</div>";
                     }
                }

             }else{
              echo "product information unavailable";
             }


            //echo "code: " . $code;
             
             //var_dump($basketname);
             //var_dump($basketmodel);
             //var_dump($basketprice);
      $conn->close();
    ?>


  </div>
    <div class="col-md-3"></div>

   

    </div>
     </div>
      <div class="row">

<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Item added to basket</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      <a href="cart.php" > Click here to view basket </a>
    </div>
  </div>
</div>
     </div>   

    <br>
    
<footer>


</footer>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</html>