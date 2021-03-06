<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $edit_sponsors_id= $_GET['id'];
        
        $edit_sponsors = "SELECT * from sponsors where id_spon='$edit_sponsors_id'";
        
        $run_edit_sponsors = mysqli_query($con,$edit_sponsors);
        
        $row_edit_sponsors = mysqli_fetch_array($run_edit_sponsors);
        
        $id_spon  = $row_edit_sponsors['id_spon']; 
        
        $logo = $row_edit_sponsors['logo'];
        
        $site  = $row_edit_sponsors['site'];
        
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Modifier sponsors </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
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
                <h3>Sponsors</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier sponsors</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->

                    	<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Site
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="site" type="text" class="form-control col-md-7 col-xs-12" required  value="<?php echo $site ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="file" name="logo" class="form-control col-md-7 col-xs-12">
                            
                            <br/>
                            
                            <img src="sponsors_images/<?php echo $logo ?>" class="img-responsive">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="update" value="Mettre a jour maintenant" class="btn btn-primary form-control">
                        </div>
                      </div>

                    </form>
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
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  
  </body>
</html>

<?php  

    if(isset($_POST['update'])){
        
        $site = $_POST['site'];
        
        $logo = $_FILES['logo']['name'];
        
        $temp_name = $_FILES['logo']['tmp_name'];
        
        move_uploaded_file($temp_name,"sponsors_images/$logo");

        if (empty($logo)) 
        {
           $update_sponsors = "UPDATE sponsors set site='$site' where id_spon='$id_spon'";
        }
        else 
        {
        $update_sponsors = "UPDATE sponsors set site='$site',logo='$logo' where id_spon='$id_spon'";
        }
        
        $run_update_sponsors = mysqli_query($con,$update_sponsors);

         $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient de modifier un partenaire, 'Modification', NOW(), NOW())";
        $run_sql =  mysqli_query($con,$sql);
        
        if($run_sql){
        
            echo "<script>window.open('sponsors.php','_self')</script>";
            
        }
        
    }

?>
