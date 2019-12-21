<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?>

<?php 

    if(isset($_GET['id'])){
        
        $edit_pres_id= $_GET['id'];
        
        $edit_pres= "SELECT * from photo_pro where id_pres='$edit_pres_id'";
        
        $run_edit_pres= mysqli_query($con,$edit_pres);
        
        $row_edit_pres = mysqli_fetch_array($run_edit_pres);
        
        $id_pres  = $row_edit_pres['id_pres']; 
        
        $titre_pres = $row_edit_pres['titre_pres'];

        $desc_pres  = $row_edit_pres['desc_pres'];
        
        $image_pres_un  = $row_edit_pres['image_pres_un'];

        $image_pres_deux  = $row_edit_pres['image_pres_deux'];

        $image_pres_trois = $row_edit_pres['image_pres_trois'];

        $image_pres_quatre  = $row_edit_pres['image_pres_quatre'];

        $image_pres_cinq = $row_edit_pres['image_pres_cinq'];
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
    
    <title>Modifier photo professionnel </title>

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
                <h3>Modifier photo pro</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Titre</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="titre_pres" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $titre_pres; ?>"> 
                        </div>
                  </div>

                  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="desc_pres" cols="19" rows="6" class="form-control" ><?php echo $desc_pres; ?></textarea>
                        </div>
                  </div>

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 1</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_un" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_un; ?>" class="img-responsive">
                        </div>
                  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 2</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_deux" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_deux; ?>" class="img-responsive">
                        </div>
                  </div>

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 3</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_trois" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_trois; ?>" class="img-responsive">
                        </div>
                  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 4</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_quatre" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_quatre; ?>" class="img-responsive">
                        </div>
                  </div>

                   

                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 5</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_cinq" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_cinq; ?>" class="img-responsive">
                        </div>
                  </div>

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 6</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_six" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_six; ?>" class="img-responsive">
                        </div>
                  </div>

                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 7</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_sept" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_sept; ?>" class="img-responsive">
                        </div>
                  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image 8</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="image_pres_huit" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="prestation_images/<?php echo $image_pres_huit; ?>" class="img-responsive">
                        </div>
                  </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input name="update" value="Mise a jour" type="submit" class="btn btn-primary form-control">
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
        
        $titre_pres = $_POST['titre_pres'];
        $desc_pres = $_POST['desc_pres'];
        
        $img_pres_un = $_FILES['image_pres_un']['name'];
        $image_pres_deux = $_FILES['image_pres_deux']['name'];
        $image_pres_trois = $_FILES['image_pres_trois']['name'];
        $image_pres_quatre = $_FILES['image_pres_quatre']['name'];
        $image_pres_cinq = $_FILES['image_pres_cinq']['name'];
        $image_pres_six = $_FILES['image_pres_six']['name'];
        $image_pres_sept = $_FILES['image_pres_sept']['name'];
        $image_pres_huit = $_FILES['image_pres_huit']['name'];
        
        $temp_name1 = $_FILES['image_pres_un']['tmp_name'];
        $temp_name2 = $_FILES['image_pres_deux']['tmp_name'];
        $temp_name3 = $_FILES['image_pres_trois']['tmp_name'];
        $temp_name4 = $_FILES['image_pres_quatre']['tmp_name'];
        $temp_name5 = $_FILES['image_pres_cinq']['tmp_name'];
        $temp_name6 = $_FILES['image_pres_six']['tmp_name'];
        $temp_name7 = $_FILES['image_pres_sept']['tmp_name'];
        $temp_name8 = $_FILES['image_pres_huit']['tmp_name'];
        
        move_uploaded_file($temp_name1,"prestation_images/$image_pres_un");
        move_uploaded_file($temp_name2,"prestation_images/$image_pres_deux");
        move_uploaded_file($temp_name3,"prestation_images/$image_pres_trois");
        move_uploaded_file($temp_name4,"prestation_images/$image_pres_quatre");
        move_uploaded_file($temp_name5,"prestation_images/$image_pres_cinq");
        move_uploaded_file($temp_name6,"prestation_images/$image_pres_six");
        move_uploaded_file($temp_name7,"prestation_images/$image_pres_sept");
        move_uploaded_file($temp_name8,"prestation_images/$image_pres_huit");


      if (empty($image_pres_un)) 
      {
          $update_service ="UPDATE photo_pro SET titre_pres ='$titre_pres',desc_pres='$desc_pres',image_pres_deux=' $img_pres_deux',image_pres_trois='$img_pres_trois',image_pres_quatre='$img_pres_quatre',image_pres_cinq='$image_pres_cinq',image_pres_six='$image_pres_six',image_pres_sept='$image_pres_sept',image_pres_huit='$image_pres_huit',date_update=NOW() WHERE id_pres='$id_pres'";
      }
      else
      {
          $update_service ="UPDATE photo_pro SET titre_pres ='$titre_pres',desc_pres='$desc_pres',image_pres_un='$img_pres_un',image_pres_deux=' $img_pres_deux',image_pres_trois='$img_pres_trois',image_pres_quatre='$img_pres_quatre',image_pres_cinq='$image_pres_cinq',image_pres_six='$image_pres_six',image_pres_sept='$image_pres_sept',image_pres_huit='$image_pres_huit',date_update=NOW() WHERE id_pres='$id_pres'";
      }
       

        $run_update_service = mysqli_query($con,$update_service); 

         $_id = $_SESSION['admin_id'];
         $admin_email = $_SESSION['admin_email'];

        $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$admin_id ', '$admin_email vient de modifier une photo profesionnelle', 'Modification', NOW(), NOW())";
            $run_sql =  mysqli_query($con,$sql);
        
        if($run_sql)
        {
        
            echo "<script>window.open('service.php','_self')</script>";
            
        }
        
    }

?>