<?php
include('config.php');

 if(isset($_POST['sub']))
 {
    $user=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $qry="INSERT INTO user(userName, email, password) VALUES ('$user','$email','$password')";

    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
      header("Location:gridandfrom.php");
    }
    else{
      echo " error";
    }
    mysqli_close($conn);

    
 }
?>