<?php
session_start();
echo 'welcome' .$_SESSION['user'];
$id =$_SESSION['user'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query="select * from userdata where name='$id'";
echo $query;

$result= mysqli_query($conn, $query);
?>





<!DOCTYPE html>







<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digital Healthcare Companion</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left"> We offer a 24x7 Medicare Service Available   </p>
                                        <form action="userdata.php" method="post">
                                            <button class="btn btn-skin btn-block btn-lg"> Previous page  </button></form>
                                        
                                        </div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now &nbsp; +343 777 5406 </p>
<form action="index.html" method="post">
                                            <button class="btn btn-skin btn-block btn-lg"> Log out <?php echo "Patient Name :".$_SESSION['user']."" ?> </button></form>					
                                        
                                        </div>
                                    
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="110" height="" />

                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  
			  <ul class="nav navbar-nav">

				<li class="active">
				<a href="index.html">Home</a></li>

				<li><a href="index.html">Features</a></li>
				<li><a href="index.html">Why us  ? </a></li>
				<li><a href="index.html">Facilities</a></li>
				<li><input type="text" placeholder="Search record.."> </li>				
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	 
 
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					 <?php 
                                      while($row= mysqli_fetch_array($result))
                                      {
             
                                       ?>
					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						<h2 style="color:black;"> You can Book an appointment here : <?php echo $row['name']; ?> </h2><br>   
                                     
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Please Provide us Appointment details : <small></small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" method="post" action="insert.php">
										
										

									<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label> Username</label>
                                                                                                        
													<input type="text" name="Patient_name" id="first_name" class="form-control input-md">
												</div>
											</div>
											
										</div>

										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label>Age </label>
													<input type="text" name="age" id="email" class="form-control input-md">
												</div>
											</div>
											
										</div>
                                                                            
                                                                                <div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label>Problem  </label>
													<input type="text" name="problem" id="email" class="form-control input-md">
												</div>
											</div>
											
										</div>
                                                                            
                                                                            <div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<label>Date   </label>
                                                                                                        <input type="date" name="date" id="email" class="form-control input-md">
												</div>
											</div>
											
										</div>
										 <button class="btn btn-skin btn-block btn-lg" name="Book"> Book Appointment  </button>
									
									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>	
					
<?php 
                                      }
                                      ?>





					






				





				</div>		
			</div>
		</div>		
    </section>

 
	
	<!-- /Section: intro -->

	<!-- Section: boxes -->
  
	<!-- /Section: boxes -->
	
	

	<!-- Section: services -->
    
	<!-- /Section: services -->
	

	<!-- Section: team -->
   
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    
	<!-- /Section: works -->
	
	
	<!-- Section: testimonial -->

	<!-- /Section: testimonial -->
	

	<!-- Section: pricing -->	
		 
	<!-- /Section: pricing -->
	
	
	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Digital Healthcare Companion</h5>
						<p>
						We offer the best healthcare service available for the poeple who are away from vicinity of the Ottawa General Hospital 
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Features</h5>
						<ul>
							<li><a href="#">=>Home visit</a></li>
							<li><a href="#">=>Laboratory results can be given on web</a></li>
							<li><a href="#">=>electronic Medical treatment</a></li>
							<li><a href="#">=>AI techniques consider the  previous records</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>The Ottawa General Hospital </h5>
						<p>
						The Ottawa General Hospital is Proud to announce the best Healthcare Service : Digital Healthcare Companion
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> 24 hrs Medical Service available here
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +613 888 1403
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> Digicare@gmail.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>The General Hospital, <BR>King Edward Road, Ottawa City, K1S5G5 <BR> Ontario,<BR> CANADA 
						 </p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2020 - Digital Healthcare Companion </p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">The Ottawa General Hospital, ON, Canada.  </a></p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>

