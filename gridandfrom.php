<?php
include('auth.php');
include('menu.php');
?> 
        <div class="container-fluid">
        <div class="row">
         <div class="col-3" style="border: solid;"> side bar</div>
            <div class="col-9" style="border: solid;"> 
               <h1> login form </h1>
                <form method="post" action="login.php">
                   <div class="from-group">
                      <label class="form-label"> user name</label>
                      <input type="text" class="form-control" name="username">
                   </div>

                   <div class="from-group">
                      <label class="form-label"> email</label>
                      <input type="email" class="form-control" name="email">
                   </div>
                  
                   <div lass="from-group">
                      <label class="form-label"> password</label>
                      <input type="text" class="form-control" name="pass">
                   </div>
                   <div>
                      
                     <button type="submit" class="btn btn-success" name="sub"> Save</button>
                   </div>
                </form>
            
            </div>
               
            </div>

           

           

        </div>
    </body>
</html>

