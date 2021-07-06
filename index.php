<?
require 'koneksi.php';
require 'cek.php';
if (isset($_SESSION['login'])){
    if ($_SESSION['login']==1){
    }else {
        header('Location:./login.php');
        exit;
    }
} else {
    header('Location:./login.php');
    exit;
}
if (isset($_GET['logout'])){
    session_destroy();
    header('Location:./login.php');
    exit;
}
?>


<!DOCTYPE html> 
<html class="no-js">
    
    
    <head>
    
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
    <style>
body {
    background-image: url('p.png');
}
</style>
</head>
<body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    
                    <a class="brand" href="#">Welcome Shop</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Syarifah Helmiah A
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
					
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
			
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse"> 
                        <li>
                            <a href="tables.php"><i class="icon-briefcase"></i><i class="icon-chevron-right"></i> Master Stock </a>
                        </li>
                        <li>
                            <a href="gallery.php"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="black" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
</svg><i class="icon-chevron-right"></i> Gallery </a>
                        </li>
						<li>
							<a href="transaksi.php"><i class=" icon-shopping-cart"></i><i class="icon-chevron-right"></i> Menu Transaksi </a>
						</li>
						<li>
							<a class="nav-link" href="logout.php"><i class=" icon-circle-arrow-left"></i> Logout </a> 
						</li>
						
    </body>

</html>