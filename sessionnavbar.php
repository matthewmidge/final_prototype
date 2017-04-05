<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<!-- ================================================ Navigation ============================================================= -->

    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MTB Warehouse</a>
            </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!--Search Bar http://bootsnipp.com/snippets/featured/navbar-search-add-on-bs-3 -->
            <div class="collapse navbar-collapse" id="-cobs-example-navbarllapse-1">
                 <div class="col-sm-3 col-md-3">
                    <form class="navbar-form" method="post" action="search.php">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Full Site" name="search">
                        <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                        </div>
                    </form>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="fullsuspension.php">Full Suspension</a></li>
                        <li><a href="hardtail.php">Hardtail MTB</a></li>
                        <li><a href="clothing.php">Clothing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span><?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                </ul>
            </li>
                    <li>
                        <a href="cart.php"><img src="img/basket.png"></a>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>