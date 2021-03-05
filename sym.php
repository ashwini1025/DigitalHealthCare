<?php
session_start();
?>
<html lang="en">
   <style>
       
  h6.this    {color: blue;}
/* The container */
.container1 {
    
  align-content: center;  
  display: block;
  position: relative;
  padding-left: 40px;
  margin-bottom: 30px;
  cursor: pointer;
  font-size: 31px;
  font-family: monospace;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
    color: black; 
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eff;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #eff;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


</style>

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
                    <img src="img/logo.png" alt="" width="110"  />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Features</a></li>
				<li><a href="#pricing">What we offer </a></li>
				<li><a href="#facilities">Facilities</a></li>
				<!-- <li><a href="#facilities">Privacy</a></li> -->
				<li><a >Privacy</a></li>
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    
    <!-- section symp -->
    
    <section id="intro1" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
                                    <h1>Diagnose disease by clicking on symptoms you face : </h1>
                                            
      <p>
      
   <form method="post" action="">
    <br/>
    <br/>
    <div class="col-sm-6 col-md-6">
        
<label class="container1"> Sneezing
  <input type="checkbox" name='lang[]' value="Sneezing">
  <span class="checkmark"></span>
</label>
<label class="container1">coughing
  <input type="checkbox" name='lang[]' value="coughing"> 
  <span class="checkmark"></span>
</label>
<label class="container1"> Sour Throat
  <input type="checkbox" name='lang[]' value="Sour Throat">
  <span class="checkmark"></span>
</label>
<label class="container1">Running nose
  <input type="checkbox" name='lang[]' value="Running nose">
  <span class="checkmark"></span>
</label>
        
        <label class="container1">Skin Irritation and Redness
  <input type="checkbox" name='lang[]' value="Skin Irritation and Redness">
  <span class="checkmark"></span>
</label>
        <label class="container1">headache's
  <input type="checkbox" name='lang[]' value="headache">
  <span class="checkmark"></span>
</label>
   
    </div>
    <div class="col-sm-6 col-md-6">
       <label class="container1"> Mild Fever
  <input type="checkbox" name='lang[]' value="Mild Fever">
  <span class="checkmark"></span>
</label>
<label class="container1">swellings
  <input type="checkbox" name='lang[]' value="swelling"> 
  <span class="checkmark"></span>
</label>
<label class="container1"> Pain in jaw
  <input type="checkbox" name='lang[]' value="Pain in jaw">
  <span class="checkmark"></span>
</label>
<label class="container1">High blood pressure
  <input type="checkbox" name='lang[]' value="High blood pressure">
  <span class="checkmark"></span>
</label>
        <label class="container1">High sugar
  <input type="checkbox" name='lang[]' value="High sugar">
  <span class="checkmark"></span>
</label>
        <label class="container1">Diarrhoea
  <input type="checkbox" name='lang[]' value="Diarrhoea">
  <span class="checkmark"></span>
</label>
    </div>
    <br>
    

    
      
      </center></section>
      <input type="submit" value="Submit" name="nameS" class="btn btn-skin btn-block btn-lg">
      
</form>
          <br>
    
<section id="callaction" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<?php

if(isset($_POST['nameS']))
{
  
    $arr=$_POST['lang'];
    if(!empty($arr)) 
    {
        $n= count($arr);
        echo "<h4> Number of Symptoms clicked by ".$_SESSION['user']."  is ".$n. "</br>";
         echo "<h6> The Symptoms clicked are as follows<br><br>"; 
        for($i=0; $i < $n; $i++)
    {
           
        
      echo $arr[$i] . "<br> ";
    }
    }
   
  
if (in_array("Sour Throat", $arr,TRUE) && (in_array("coughing",$arr,True)) && (in_array("Sneezing", $arr, true)))
  {
    echo " <h6 class='this'><br> Predicted Disease : Influenza FLu  <br><br> Medication to cure :  Tamiflu® , Xofluza® , Relenza® <br><br> Medication Side Effects : You might experience nausea or vomiting . <br><br> Precautions: Take Medication with food, drink plenty of water. <br><br> Estimated Cure : 3-4 days<br><br>  </p>  ";
  }
  elseif(in_array("Mild Fever",$arr, TRUE) && (in_array("swelling",$arr, true)) && (in_array("Sneezing", $arr, true)))
  {
  
    echo " <h6 class='this'><br> Predicted Disease : Swine FLu  <br><br> Medication to cure :  Relenza® <br><br> Medication Side Effects : You might experience nausea or vomiting . <br><br> Precautions: Take Medication with food, drink plenty of water. <br><br> Estimated Cure : 3-4 days<br><br>  </p>   ";
  }elseif(in_array("Diarrhoea",$arr, TRUE) && (in_array("High blood pressure",$arr, true)) && (in_array("High sugar", $arr, true)))
  {
  
    echo " <br>AI Predicted Disease :  <br><br>  AI Predicted Medication : <br><br>  AI predicted side Effects : <br><br> ";
  }

  
}
else
{
   
}
?>

									</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
        
     


					
				</div>		
			</div>
		</div>		
    
    </section>