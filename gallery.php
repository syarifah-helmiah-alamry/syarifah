<?php
	include "tampilkan_data.php";
	include "edit_data.php";
    $data_edit = mysqli_fetch_assoc($proses_ambil);
?>
<!DOCTYPE html>
<html>
    
<head>
        <title>Gallery Barang</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css"  rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Syarifah Helmiah A</i>
                                </a>
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
                            <a href="tables.php"><i class="icon-briefcase"></i><i class="icon-chevron-right"></i> Master Stock Barang </a>
                        </li>
                        <li class="active">
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
			</div>
        <div class="container-fluid">
				<div class="span9" id="content">

                <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                        <div class="row-fluid">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Gallery</div>
                                <div class="pull-right"><span class="badge badge-info"></span>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
									<div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="album1.jpg">
										</a>
									</div>
									<div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="album2.jpg">
										</a>
									</div>
									<div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="album3.jpg">
										</a>
									</div>
									<div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="album4.jpg">
										</a>
									</div>
                                    <div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="baju1.jpg">
										</a>
									</div>
                                    <div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="baju2.jpg">
										</a>
									</div>
                                    <div class="span3">
										<a href="#" class="thumbnail">
											<img style="width: 260px; height: 180px;" src="tas1.jpg">
										</a>
									</div>
                                </div>
                            </div>
						</div>
					</div> 
					<hr>
				
				</div>
		</div>
        <!--/.fluid-container-->
					
					

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>
