<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $delete_sponsors_id = $_GET['id'];
        
        $delete_sponsors = "DELETE from sponsors where id_spon='$delete_sponsors_id'"; 
        
        $run_delete = mysqli_query($con,$delete_sponsors);
        
        if($run_delete){
            
            echo "<script>window.open('sponsors.php','_self')</script>";

            
        }
        
    }

?>
