<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $edit_id_slide = $_GET['id'];
        
        $edit_slide = "SELECT * from slide where id_slide='$edit_id_slide'";
        
        $run_edit_slide = mysqli_query($con,$edit_slide);
        
        $row_edit_slide = mysqli_fetch_array($run_edit_slide);

        $id_slide = $row_edit_slide['id_slide'];

        $description = $row_edit_slide['description'];
                        
        $titre = $row_edit_slide['titre'];
                        
        $image_slide = $row_edit_slide['image_slide'];
        
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
    
    <title>Modifier modele </title>

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
                <h3>Slide</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier slide</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->

                    	<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nom du slide <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="titre" type="text" class="form-control col-md-7 col-xs-12" required  value="<?php echo $titre ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du slide
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="file" name="image_slide" class="form-control col-md-7 col-xs-12">
                            
                            <br/>
                            
                            <img width="70" height="70"  src="image_slide/<?php echo $image_slide; ?>" class="img-responsive" alt="<?php echo $image_slide; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Bref description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="description" cols="19" rows="6" class="form-control"><?php echo $description; ?></textarea>
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
        
        $titre = $_POST['titre'];

        $description = $_POST['description'];
        
        $image_slide = $_FILES['image_slide']['name'];
        
        $temp_name = $_FILES['image_slide']['tmp_name'];
        
        move_uploaded_file($temp_name,"image_slide/$image_slide");

        if (empty($image_slide)) 
        {
         $update_slide = "UPDATE slide SET description='$description',date_update=NOW(),titre='$titre' WHERE id_slide='$id_slide'";
        }
        else if (empty($description)) 
        {
            $update_slide = "UPDATE slide SET image_slide='$image_slide',date_update=NOW(),titre='$titre' WHERE id_slide='$id_slide'";
        }
        else
        {   
        $update_slide = "UPDATE slide SET description='$description',image_slide='$image_slide',date_update=NOW(),titre='$titre' WHERE id_slide='$id_slide'";
        } 

        $run_update_slide = mysqli_query($con,$update_slide);

         $_id = $_SESSION['admin_id'];
         $admin_email = $_SESSION['admin_email'];

        $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$admin_id ', '$admin_email vient de modifier un slide', 'Modification', NOW(), NOW())";
            $run_sql =  mysqli_query($con,$sql);
        
        if($run_sql){
        
            echo "<script>window.open('insert_slide.php','_self')</script>";
            
        }
        
    }

?>
