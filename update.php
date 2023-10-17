<?php
include('config.php');

 if(isset($_POST['sub']))
 {
    $id=$_POST['id'];
    $user=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $qry="UPDATE user SET userName='$user',email='$email',password='$password' WHERE id='$id'";

    $reult= mysqli_query($conn,$qry);
    if($reult)
    {
      header("Location:view.php");
    }
    else{
      echo " error";
    }
    mysqli_close($conn);

    
 }
?>