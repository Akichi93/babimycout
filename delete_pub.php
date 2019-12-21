<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id_pub = $_GET['id'];
        
        $delete_pub = "DELETE from publicite where id_prod='$delete_id_pub'";
        
        $run_delete = mysqli_query($con,$delete_pub);
        
        if($run_delete){
            
            echo "<script>window.open('pub.php','_self')</script>";
            
        }
        
    }

?>
