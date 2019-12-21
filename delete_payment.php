<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $delete_payment_id = $_GET['id'];
        
        $delete_payment = "DELETE from payments where payment_id='$delete_payment_id'";
        
        $run_delete = mysqli_query($con,$delete_payment);
        
        if($run_delete){
            
            echo "<script>window.open('view_payments.php','_self')</script>";
            
        }
        
    }

?>