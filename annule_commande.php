<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){

        $update_id = $_GET['id'];

        $statut = 2;

        $update_commande = "UPDATE commande SET statut='$statut',date_update=NOW() WHERE id_livre = $update_id";
        
        $run_update = mysqli_query($con,$update_commande);
        
        if($run_update){
            
            echo "<script>window.open('view_orders_annule.php','_self')</script>";
            
        }
        
    }

?>
