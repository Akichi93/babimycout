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
	  
    <title>Publicité </title>

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
                <h3>Publicité</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                 <?php  if (isset($result1['8ab3e23d']))  {?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter publicité</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lien youtube</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="lien_prod" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image de la pub<br>
                          (340*600)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="file" name="img_prod" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de debut de pub</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date" name="date_debut" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Heure de debut de pub</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="time" name="heure_debut" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de fin de pub</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="date" name="date_fin" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Heure de fin de pub</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="time" name="heure_fin" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						             <input type="submit" name="submit" value="Ajouter pub" class="btn btn-primary form-control">
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
                
                    $get_pub = "SELECT * FROM publicite ";
        
                    $run_pub = mysqli_query($con,$get_pub);
        
                    while($row_pub=mysqli_fetch_array($run_pub)){
                        
                        $id_prod = $row_pub['id_prod'];
                        
                        $lien_prod = $row_pub['lien_prod'];

                        $img_prod = $row_pub['img_prod']; 

                        $date_debut = $row_pub['date_debut'];  

                        $date_fin = $row_pub['date_fin'];        
                
                ?>  
                
                <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                    <div class="panel panel-primary"><!-- panel panel-primary begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title" align="center"><!-- panel-title begin -->
                            
                                <?php echo $lien_prod; ?>
                                
                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->
                        
                        <div class="panel-body"><!-- panel-body begin -->
                            
                            <img src="image_slide/<?php echo $img_prod; ?>" alt="<?php echo $lien_prod; ?>" class="img-responsive">
                            
                        </div><!-- panel-body finish -->
                        <?php  if (isset($result1['9101612f']) || isset($result1['c07be8ea']))  {?>
                        <div class="panel-footer"><!-- panel-footer begin -->
                            <center><!-- center begin -->
                                <?php  if (isset($result1['c07be8ea']))  {?>
                                <a href="delete_pub.php?id=<?php echo $id_prod; ?>" class="pull-right" onclick="return confirm('Supprimer la pub <?php echo $lien_prod; ?>');"><!-- pull-right begin -->
                                
                                 <i class="fa fa-trash"></i> Supprimer
                                
                                </a><!-- pull-right finish -->
                                <?php } ?>
                                <?php  if (isset($result1['9101612f']))  {?>
                                <a href="edit_pub.php?id=<?php echo $id_prod; ?>" class="pull-left"><!-- pull-left begin -->
                                
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
        
        $lien_prod = $_POST['lien_prod'];

        $date_debut = $_POST['date_debut'];

        $date_fin = $_POST['date_fin'];

        $heure_debut = $_POST['heure_debut'];

        $heure_fin = $_POST['heure_fin'];

        $img_prod = $_FILES['img_prod']['name'];
        
        $temp_name = $_FILES['img_prod']['tmp_name'];
        
        move_uploaded_file($temp_name,"pub_image/$img_prod");

        if (empty($img_prod))
        {
         $insert_pub = "INSERT INTO publicite (lien_prod,date_debut,date_fin,statut,heure_debut,heure_fin,date_create) VALUES ('$lien_prod','$date_debut','$date_fin','0','$heure_debut','$heure_fin',NOW())";
        }
        else if (empty($lien_prod)) 
        {
         $insert_pub = "INSERT INTO publicite (date_debut,date_fin,statut,heure_debut,heure_fin,date_create) VALUES ('$img_prod','$date_debut','$date_fin','0','$heure_debut','$heure_fin',NOW())";
        }
         else
         {
           $insert_pub = "INSERT INTO publicite (lien_prod,img_prod,date_debut,date_fin,statut,heure_debut,heure_fin,date_create) VALUES ('$lien_prod','$img_prod','$date_debut','$date_fin','0','$heure_debut','$heure_fin',NOW())";
         }       


        $run_pub = mysqli_query($con,$insert_pub);

        $_id = $_SESSION['admin_id'];
        $admin_email = $_SESSION['admin_email']; 

   $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter une publicité', 'Ajout de publicité', NOW(), NOW())";
   $run_sql =  mysqli_query($con,$sql);
            
        if ($run_sql) 
        {
           echo "<script>window.open('pub.php','_self')</script>";
            
        }        
        
    }

?>