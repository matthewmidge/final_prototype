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


<title>Checkout</title>

<link href ="css/bootstrap.css" rel="stylesheet"> 
<link href ="css/bootstrap-theme.css" rel="stylesheet"> 
<link href ="css/custom.css" rel="stylesheet"> 
<script>
//function load(){
//document.getElementById('billingaddress1').style.display="none";
//document.getElementById('billingaddress2').style.display="none";
//document.getElementById('billingaddress3').style.display="none";
//}
function addressCheck() {
if (document.getElementById('addresscheck').checked) {
    document.getElementById('billingaddress').style.display = 'none';
}else{
    document.getElementById('billingaddress').style.display = 'inline';

}
}

</script>
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
            <div class="col-md-2"></div>
            <!-- checkout form --> 
             <div class="col-md-4">

              <form>
                <div class="form-group">
                  <h2 class="">Checkout</h2>
                </div>
                 <div class="form-group">
             <hr />
            </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="House Name/No." class="form-control" placeholder="Your house name/no." value="" maxlength="40" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="address" class="form-control" placeholder="Your Address Line 1" value="" maxlength="255" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="postcode" class="form-control" placeholder="Your Postcode. (no spaces)" value="" maxlength="7" />
                    </div>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" id="addresscheck" value="" checked="checked" onclick='addressCheck()'>
                  Use Shipping address as billing address. 
                  </label>
                </div>
                <div id="billingaddress" style="display:none;">
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="House Name/No." class="form-control" placeholder="Your house name/no." value="" maxlength="40" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="address" class="form-control" placeholder="Your Address Line 1" value="" maxlength="255" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <input type="text" name="postcode" class="form-control" placeholder="Your Postcode. (no spaces)" value="" maxlength="7" />
                    </div>
                </div>
              </div>

                 <div class="form-group">
                    <hr />
                  </div>
                   <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
                        <select class="form-control form-control-sm">
                           <option>Visa Debit</option>
                           <option>Mastarcard Debit</option>
                           <option>Visa</option>
                           <option>Mastercard</option>
                         </select>
                    </div>
                </div>
                  <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
                        <input type="text" name="card number" class="form-control" placeholder="Your Card Number" value="" maxlength="16" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
                        <input type="text" name="cvq" class="form-control" placeholder="Your Security Code" value="" maxlength="3" />
                    </div>
                </div>
                <div class="form-group">
                   <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-gbp"></span></span>
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"> </div>
                    <a class="btn btn-lg btn-primary" href="checkoutcomplete.php" role="button">Finish</a> <br>

                </div>

              </form> 

  




             </div>
             <!-- third party buttons --> 
             <div class="col-md-4">
              <div class="form-group">
                  <h2 class="">Or.</h2>
                </div>
                 <div class="form-group">
             <hr />
                <img src="img/paypal-button.png" width = "200" height = "40">
                <br>
                <img src="img/wallet-logo.png" width = "200" height = "40">

             </div>
              <div class="col-md-2"></div>
        </div>  


<footer>


</footer>

</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</html>
<?php ob_end_flush(); ?>