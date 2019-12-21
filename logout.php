<?php 

    session_start();
    session_destroy();

   // require 'include/db.php';

        // $_id = $_SESSION['admin_id'];
        // $admin_email = $_SESSION['admin_email'];

       // $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient de se deconnecter, 'Ajout de slide', NOW(), NOW())";
      //  $run_sql =  mysqli_query($con,$sql);
            
       
           echo "<script>window.open('login.php','_self')</script>";

            
              

?>