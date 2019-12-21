<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?>
<?php 

        
        $edit_user = $_SESSION['admin_email'];
        
        $get_user = "SELECT * from admin WHERE admin_email='$edit_user'";
        
        $run_user = mysqli_query($con,$get_user);
        
        $row_user = mysqli_fetch_array($run_user);
        
        $user_id = $row_user['admin_id'];
        
        $user_name = $row_user['admin_name'];

        $user_lname = $row_user['admin_lname'];
        
        $user_pass = $row_user['admin_pass'];
        
        $user_email = $row_user['admin_email'];
        
        $user_image = $row_user['admin_image'];
        
        $user_contact = $row_user['admin_contact'];
        
        $user_job = $row_user['admin_job'];
        

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
     <?php require  'include/sidebar.php'  ?> 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profile </h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier profile</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="admin_images/<?php echo $user_image; ?>" alt="<?php echo $admin_name; ?>" title="Image de profil">
                        </div>
                      </div>
                      <h3><span><?php echo $user_name; ?> <?php echo $user_lname; ?></span></h3>
                        

                      <ul class="list-unstyled user_data">
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $user_job; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="" target="_blank"> <?php echo $user_email; ?></a>
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $user_contact; ?>
                        </li>
                      </ul>
                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Modification</h2>
                        </div>
                      </div>
                      
                      <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nom<span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $user_name; ?>" name="admin_name" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prenom <span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $user_lname; ?>" name="admin_lname" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input value="<?php echo $user_email; ?>"  name="admin_email" type="text" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mot de passe <span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input value="<?php echo $user_pass; ?>"  name="admin_pass" type="password" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="admin_image" type="file" class="form-control" required> 

                          <br>
                          
                          <img src="admin_images/<?php echo $user_image; ?>" alt="<?php echo $admin_name; ?>" width="70" height="70">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact  <span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input value="<?php echo $user_contact; ?>"  name="admin_contact" type="text" class="form-control" required>
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <input name="update" value="Mettre a jour le profil" type="submit" class="btn btn-primary form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php require'include/footer.php' ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>

<?php 

if(isset($_POST['update'])){
    
    $user_name = $_POST['admin_name'];
    $user_lname = $_POST['admin_lname'];
    $user_email = $_POST['admin_email'];
    $user_pass = $_POST['admin_pass'];
    $user_contact = $_POST['admin_contact'];
    $user_job = $_POST['admin_job'];
    
    $user_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"admin_images/$user_image");

    if ($user_image) {
       $update_admin = "UPDATE admin SET admin_name='$user_name',admin_lname='$user_lname',admin_email='$user_email',admin_pass='$user_pass',admin_job='$user_job',admin_contact='$user_contact' WHERE admin_id='$user_id'";
    }
    else
    {
      $update_admin = "UPDATE admin SET admin_name='$user_name',admin_lname='$user_lname',admin_email='$user_email',admin_pass='$user_pass',admin_image='$user_image',admin_job='$user_job',admin_contact='$user_contact' WHERE admin_id='$user_id'";
    }
    
    
    $run_admin = mysqli_query($con,$update_admin);
    
    if($run_admin){

        echo "<script>window.open('administrateur.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>