<?php
session_start();
echo 'welcome' .$_SESSION['user'];
$id =$_SESSION['user'];
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
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now &nbsp; +343 777 5406 </p></div>
                                        <form action="index.html" method="post">
                                            <button class="btn btn-skin btn-block btn-lg"> Log out <?php echo "Patient Name :".$_SESSION['user']."" ?> </button></form>
					
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

				 <li> <a href="#intro"><?php $timestamp = time();  echo "\n";  echo(date("F d, Y h:i:s A", $timestamp));  ?> </a></li>				
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div><br><br><br><br><br><br> 
    
     <section id="boxes" class="home-section paddingtop-80">
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Previously completed appointments </h4>
							<p>
							click here to check the case you have done previously. 
							</p>
                                                        <form  method="post" action="">  <input type="submit" value="completed appointments" name="previousH" class="btn btn-skin btn-block btn-lg">    
                                                        </form></div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Upcoming Schedule</h4>
							<p>
							Click here to view the current schedule's of your month. 
                                                        </p><br>
                                                        <form  method="post" action=""> <input type="submit" value="upcoming  Schedule" name="ScheduleH" class="btn btn-skin btn-block btn-lg">
                                                        </form></div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold"> List of Doctors </h4>
							<p>
							   Click here to check work done by similar doctors and their medical history
							</p>
                                                            <form  method="post" action=""><input type="submit" value="Get Doctors" name="DoctorH" class="btn btn-skin btn-block btn-lg">
                                                            </form></div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get patients history</h4>
							<p>
							This has a complete list of patients who have diagnosed by you
                                                        </p><br>
                                                        <form  method="post" action=""> <input type="submit" value="Get Patients History" name="patientH" class="btn btn-skin btn-block btn-lg">
                                                        </form></div>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php 
if(isset($_POST['patientH']))
{
$conn = mysqli_connect("localhost","root","", "medi");
$query="select * from userdata ";
$result= mysqli_query($conn, $query);
?>
    
    <table class='table table-bordered table-striped'>
                       
                      <tr>
                        <th>Name</th>
                        <th>Gender </th>
                        <th>phone no</th>
                        <th>how did you hear</th>
                        <th>Surgeries </th>
                        <th>id</th>
                        <th>email</th>
                        <th>Address </th>
                        <th>height </th>
                        <th>status </th>
                        <th>Allergies no</th>
                      </tr>
                      
             <?php  
             while($row= mysqli_fetch_array($result))
                { 
              ?>
                      <tr>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['gender'];?></td> 
                          <td> <?php echo $row['phone_no'];?></td>
                          <td><?php echo $row['how'];?></td>
                          <td><?php echo $row['surgeries'];?></td>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['email'];?></td> 
                          <td><?php echo $row['add'];?></td>
                          <td><?php echo $row['height'];?></td> 
                          <td><?php echo $row['status'];?></td>
                          <td><?php echo $row['all'];?></td>
                       </tr>
                           
<?php
                 }   
}
else if(isset($_POST['DoctorH']))
{
$conn = mysqli_connect("localhost","root","", "medi");
$query1="select * from docs ";
$result1= mysqli_query($conn, $query1);  
?>
         <br><table class='table table-bordered table-striped'>
                       
                      <tr>
                        <th>Name</th>
                        <th>Education </th>
                        <th>Specialization</th>
                        <th> Age</th>
                     </tr> 
              <?php  
                while($row1= mysqli_fetch_array($result1))
                { 
              ?>  
                <tr>
                          <td><?php echo $row1['Name']; ?></td>
                          <td><?php echo $row1['education'];?></td> 
                          <td> <?php echo $row1['specialization'];?></td>
                          <td><?php echo $row1['age'];?></td>
                            
                      </tr>
                                    
   <?php
               }
}
else if((isset($_POST['previousH'])))
{
$conn = mysqli_connect("localhost","root","", "medi");
$query3="select * from previous where date < current_date";
$result3= mysqli_query($conn, $query3);
 ?>
   <br><table class='table table-bordered table-striped'>
                       
                      <tr>
                        <th>Patients Name</th>
                        <th>Age </th>
                        <th>Problem</th>
                        <th> Medicine</th>
                        <th> Date</th>
                     </tr> 
             <?php  
             while($row3= mysqli_fetch_array($result3))
             { 
             ?>  
             <tr>
                     <td><?php echo $row3['Patients_name']; ?></td>
                     <td><?php echo $row3['age'];?></td> 
                     <td> <?php echo $row3['problem'];?></td>
                     <td><?php echo $row3['medicine'];?></td>
                     <td><?php echo $row3['date'];?></td>
                            
                     </tr>

<?php
    }

}
else if((isset($_POST['ScheduleH'])))

{
   $conn = mysqli_connect("localhost","root","", "medi");
$query4="select Patients_name,age,problem,date from previous where date > current_date";
$result4= mysqli_query($conn, $query4);
 ?>
   <br><table class='table table-bordered table-striped'>
                       
                      <tr>
                        <th>Patients Name</th>
                        <th>Age </th>
                        <th>Problem</th>
                       
                        <th> Date</th>
                     </tr> 
             <?php  
             while($row4= mysqli_fetch_array($result4))
             { 
             ?>  
             <tr>
                     <td><?php echo $row4['Patients_name']; ?></td>
                     <td><?php echo $row4['age'];?></td> 
                     <td> <?php echo $row4['problem'];?></td>
                    
                     <td><?php echo $row4['date'];?></td>
                            
                     </tr>
<?php 
}
}
else
{
    
}

?>
                  
 </table>
         <br><br>
         
   <!--     type 2      -->
