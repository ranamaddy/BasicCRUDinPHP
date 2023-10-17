<?php
include('config.php');
include('menu.php');

$id= $_GET['id'];
$qry= "SELECT * FROM user where id ='$id'";
$result = mysqli_query($conn,$qry);
$row= mysqli_fetch_assoc($result)
?>

<div class="container-fluid">
        <div class="row">
         <div class="col-3" style="border: solid;"> side bar</div>
            <div class="col-9" style="border: solid;"> 
               <h1> Edit User</h1>
                <form method="post" action="update.php">
                <div class="from-group">
                      
                      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                   </div>
                   <div class="from-group">
                      <label class="form-label"> user name</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $row['userName'] ?>">
                   </div>

                   <div class="from-group">
                      <label class="form-label"> email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                   </div>
                  
                   <div lass="from-group">
                      <label class="form-label"> password</label>
                      <input type="text" class="form-control" name="pass" value="<?php echo $row['password'] ?>">
                   </div>
                   <div>
                      
                     <button type="submit" class="btn btn-success" name="sub"> Update</button>
                   </div>
                </form>
            
            </div>
               
            </div>

           

           

        </div>
    </body>
</html>

