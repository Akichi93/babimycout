<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 

<?php 

    if(isset($_GET['id'])){
        
        $delete_article_id = $_GET['id'];
        
        $delete_article = "DELETE from blog where id_blog='$delete_article_id'"; 
        
        $run_delete = mysqli_query($con,$delete_article);
        
        if($run_delete){
            
            echo "<script>window.open('blog.php','_self')</script>";

            
        }
        
    }

?>