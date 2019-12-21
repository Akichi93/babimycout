<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_id_slide = $_GET['id'];
        
        $delete_slide = "DELETE from slide where id_slide='$delete_id_slide'";
        
        $run_delete = mysqli_query($con,$delete_slide);
        
        if($run_delete){
            
            echo "<script>window.open('insert_slide.php','_self')</script>";
            
        }
        
    }

?>
