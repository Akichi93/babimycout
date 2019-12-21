<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){

        $pages = $_GET['page'];
        
        $delete_id = $_GET['id'];
        
        $delete_order = "DELETE FROM commande WHERE id_livre='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_order);
        
        if($run_delete){
            
            echo "<script>window.open('$pages','_self')</script>";
            
        }
        
    }

?>