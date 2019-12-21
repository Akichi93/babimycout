<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id_promo = $_GET['id'];
        
        $delete_promo = "DELETE from promo where id_promo='$delete_id_promo'";
        
        $run_delete = mysqli_query($con,$delete_promo);
        
        if($run_delete){
            
            echo "<script>window.open('code.php','_self')</script>";
            
        }
        
    }

?>