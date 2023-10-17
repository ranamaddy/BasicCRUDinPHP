<?php

include('auth.php');
include('config.php');
include('menu.php');
?>

    <div class="container">
        <h1> user list</h1>
        <table class="table table-striped">
         <tr>
            <td> id</td>
            <td> user Name</td>
            <td> Email</td>
            <td> password</td>
            <td> Action</td>
            
         </tr>
           <?php
              $qry= "SELECT * FROM user";
              $result = mysqli_query($conn,$qry);
              if(mysqli_num_rows($result)>0)
              {
                while($row= mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>". $row['id']."</td>";
                    echo "<td>". $row['userName']."</td>";
                    echo "<td>". $row['email']."</td>";
                    echo "<td>". $row['password']."</td>";
                    echo "<td> <a href='delete.php?id=".$row['id']."' class='btn btn-danger'> delete </a>";
                    echo " <a href='edit.php?id=".$row['id']."' class='btn btn-success'> Edit </a></td>";
                    
                    
                    echo "</tr>";
                    
                }
              }
              else{
                echo "record not found";
              }
              mysqli_close($conn);
           ?>
         

        </table>

    </div>


    </body>
</html>