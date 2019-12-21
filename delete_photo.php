<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id_pres = $_GET['id'];
        
        $delete_pres = "DELETE from photo_pro where id_pres='$delete_id_pres'";
        
        $run_delete = mysqli_query($con,$delete_pres);
        
        if($run_delete){
            
            echo "<script>window.open('service.php','_self')</script>";
            
        }
        
    }

?>
