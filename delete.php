<?php
   include('config.php');
   $id= $_GET['id'];

   $qry="DELETE FROM user WHERE id ='$id'";
   $result=mysqli_query($conn,$qry);
   if($result)
   {
    header("Location: view.php");
   }
   else{
    echo "error";
   }
   mysqli_close($conn);
?>
