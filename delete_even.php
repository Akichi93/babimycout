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
        
        $delete_even = "DELETE FROM evenement WHERE id_even='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_even);
        
        if($run_delete){
            
            echo "<script>window.open('evenement.php','_self')</script>";
            
        }
        
    }

?>
