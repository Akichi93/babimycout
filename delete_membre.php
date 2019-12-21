<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_membre_id = $_GET['id'];
        
        $delete_membre = "DELETE from equipe where id_equipe='$delete_membre_id'";  
        
        $run_delete = mysqli_query($con,$delete_membre);
        
        if($run_delete){
            
            echo "<script>window.open('insert_equipe.php','_self')</script>";
            
        }
        
    }

?>
