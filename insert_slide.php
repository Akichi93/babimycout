<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
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
	  
    <title>Slide </title>

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
                <?php  if (isset($result1['f51f55a3']))  {?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter slide </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Titre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="titre" type="text" id="" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du slide <span class="required">*</span><br>
                            (1280*600)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="file" name="image_slide" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bref description <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="description" cols="19" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="submit" value="Ajouter slide" class="btn btn-primary form-control">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
             <div class="panel-body"><!-- panel-body begin -->
            
                <?php 
                
                    $get_slide = "SELECT * FROM slide ";
        
                    $run_slide = mysqli_query($con,$get_slide);
        
                    while($row_slide=mysqli_fetch_array($run_slide)){
                        
                        $id_slide = $row_slide['id_slide'];
                        
                        $titre = $row_slide['titre'];
                        
                        $description = $row_slide['description'];

                        $image_slide = $row_slide['image_slide'];            
                
                ?>
                
                <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                    <div class="panel panel-primary"><!-- panel panel-primary begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title" align="center"><!-- panel-title begin -->
                            
                                <?php echo $titre; ?>
                                
                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->
                        
                        <div class="panel-body"><!-- panel-body begin -->
                            
                            <img src="image_slide/<?php echo $image_slide; ?>" alt="<?php echo $titre; ?>" class="img-responsive"><br>
                           <h5><?php echo "$description"; ?></h5> 
                            
                        </div><!-- panel-body finish -->
                        <?php  if (isset($result1['9a9fece8']) || isset($result1['7c10c73f']))  {?>
                        <div class="panel-footer"><!-- panel-footer begin -->
                            <center><!-- center begin -->
                                <?php  if (isset($result1['9a9fece8']))  {?>
                                <a href="delete_slide.php?id=<?php echo $id_slide; ?>" class="pull-right" onclick="return confirm('Supprimer le slide <?php echo $titre; ?>');"><!-- pull-right begin -->
                                
                                 <i class="fa fa-trash"></i> Supprimer
                                
                                </a><!-- pull-right finish -->
                                <?php } ?>
                                <?php  if (isset($result1['7c10c73f']))  {?>
                                <a href="edit_slide.php?id=<?php echo $id_slide; ?>" class="pull-left"><!-- pull-left begin -->
                                
                                 <i class="fa fa-pencil"></i> Modifier
                                
                                </a><!-- pull-left finish -->
                                <?php } ?>
                                <div class="clearfix"></div>
                                
                            </center><!-- center finish -->
                        </div><!-- panel-footer finish -->
                        <?php } ?>
                    </div><!-- panel panel-primary finish -->
                </div><!-- col-lg-3 col-md-3 finish -->
                
                <?php } ?>
            
            </div><!-- panel-body finish -->


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

    if(isset($_POST['submit'])){
        
        $titre = $_POST['titre'];

        $description = $_POST['description'];
        
        $image_slide = $_FILES['image_slide']['name'];

        //$image_type=$_FILES['image_slide']['type'];
        
        $temp_name = $_FILES['image_slide']['tmp_name'];

       // $image_size=$_FILES['image_slide']['size'];
        
        $view_slide = "SELECT * FROM slide";
        
        $view_run_slide = mysqli_query($con,$view_slide);
        
        move_uploaded_file($temp_name,"image_slide/$image_slide");
            
        $insert_slide = "INSERT  INTO slide (description,image_slide,date_create,titre) VALUES ('$description','$image_slide',NOW(),'$titre')";

        $run_slide = mysqli_query($con,$insert_slide);

         $_id = $_SESSION['admin_id'];
         $admin_email = $_SESSION['admin_email'];

        $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un slide', 'Ajout de slide', NOW(), NOW())";
        $run_sql =  mysqli_query($con,$sql);
            
        if ($run_sql) 
        {
           echo "<script>window.open('insert_slide.php','_self')</script>";
            
        }        
        
    }

?>