<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['login']))
{
    if(empty($_POST['name']) || empty($_POST['pass']))
    {
        echo $name;
        
    }
    else 
    {
       $query="select * from logindb where name='".$_POST['name']."' and pass='".$_POST['pass']."' ";
       $result= mysqli_query($conn, $query);
       if(mysqli_fetch_assoc($result))
       {
          $_SESSION['user']= $_POST['name'];
         header("location:userdata.php");
          $id= $_SESSION['user'];
          echo $id;
          
         
        
       } else 
       {
          echo error  ;  
          header("location:index.html");
          
       }
    }
    
    
}
 else 
 {
     echo no;
 }
