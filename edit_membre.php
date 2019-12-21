<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $edit_membre_id= $_GET['id'];
        
        $edit_membre= "select * from equipe where id_equipe='$edit_membre_id'";
        
        $run_edit_membre= mysqli_query($con,$edit_membre);
        
        $row_edit_membre = mysqli_fetch_array($run_edit_membre);
        
        $id_equipe  = $row_edit_membre['id_equipe']; 
        
        $fonction = $row_edit_membre['fonction'];
        
        $nom_complet  = $row_edit_membre['nom_complet'];

        $image_equipe  = $row_edit_membre['image_equipe'];

        $desc_equipe  = $row_edit_membre['desc_equipe'];
        
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
    
    <title>Modifier membre </title>

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
                <h3>Membre</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier membre</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fonction
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="fonction" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $fonction; ?>"> 
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom complet
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nom_complet" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nom_complet; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du membre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="file" name="image_equipe" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="80" height="80" src="equipe_images/<?php echo $image_equipe?>" class="img-responsive">
                        </div>
                      </div>
                      
                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bref description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <textarea name="desc_equipe" cols="19" rows="6" class="form-control" value="">
                              <?php echo $desc_equipe; ?>
                            </textarea>
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
        
        $fonction = $_POST['fonction'];

        $nom_complet = $_POST['nom_complet'];

        $desc_equipe = $_POST['desc_equipe'];
        
        $image_equipe = $_FILES['image_equipe']['name'];
        
        $temp_name = $_FILES['image_equipe']['tmp_name'];
        
        move_uploaded_file($temp_name,"equipe_images/$image_equipe");


        if (empty($image_equipe)) 
        {
            $update_membre = "UPDATE equipe set fonction='$fonction',nom_complet='$nom_complet',desc_equipe='$desc_equipe' where id_equipe='$id_equipe'";
        }
        else
        {
            $update_membre = "update equipe set fonction='$fonction',nom_complet='$nom_complet',image_equipe='$image_equipe',desc_equipe='$desc_equipe' where id_equipe='$id_equipe'";
        }    
        
        
        $run_update_membre = mysqli_query($con,$update_membre); 
        
        if($run_update_membre){
        
            echo "<script>window.open('insert_equipe.php','_self')</script>";
            
        }
        
    }

?>
