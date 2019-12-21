<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id_service = $_GET['id'];
        
        $delete_service = "DELETE from services where id_service='$delete_id_service'";
        
        $run_delete = mysqli_query($con,$delete_service);
        
        if($run_delete){
            
            echo "<script>window.open('insert_prestation.php','_self')</script>";
            
        }
        
    }

?>