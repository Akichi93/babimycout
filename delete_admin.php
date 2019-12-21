<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_admin_id = $_GET['id'];
        
        $delete_admin = "DELETE from admin where admin_id='$delete_admin_id'";
        
        $run_delete = mysqli_query($con,$delete_admin);
        
        if($run_delete){
            
            echo "<script>window.open('administrateur.php','_self')</script>";
            
        }
        
    }

?>