<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id = $_GET['id'];
        
        $delete_coudre = "DELETE from couture where id_coutu='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_coudre);
        
        if($run_delete){
            
            echo "<script>window.open('coudre.php','_self')</script>";
            
        }
        
    }

?>