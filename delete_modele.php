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
        
        $delete_modele = "DELETE from model where id_model='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_modele);

   // $_id = $_SESSION['admin_id'];
   // $admin_email = $_SESSION['admin_email']; 

  // $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient de supprimer un modele', 'Supprimer, NOW(), NOW())";
  // $run_sql =  mysqli_query($con,$sql);
        
        if($run_delete){
            
            echo "<script>window.open('$pages','_self')</script>";
            
        }
        
    }

?>