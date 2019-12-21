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
    
    <title>Equipe </title>

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
              <?php  if (isset($result1['68811608']))  {?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter membre </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fonction<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="fonction" placeholder="Entrez la fonction">
                        </div>
                      </div>
                      <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nom du complet<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="nom_complet" type="text" class="form-control"required placeholder="Entrez Nom complet">
                       </div> 
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Photo <span class="required">*</span><br>
                          (1160*650)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="file" name="image_equipe" class="form-control" required="">
                        </div>
                      </div>
                      <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Telephone<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="telephone" type="text" class="form-control"required placeholder="Entrez le numero">
                       </div> 
                      </div>
                       <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Email<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="email" type="email" class="form-control"required placeholder="Entrez l'email">
                       </div> 
                      </div>
                      <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="desc_equipe" cols="12" rows="3" class="form-control"></textarea>
                       </div>
                      </div>
                       <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Facebook<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="facebook" type="text" class="form-control" placeholder="Entrez le compte facebbok">
                       </div> 
                      </div>
                       <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Twitter<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="twitter" type="text" class="form-control" placeholder="Entrez le compte twitter">
                       </div> 
                      </div>
                      <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Youtube<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="youtube" type="text" class="form-control" placeholder="Entrez le compte youtube">
                       </div> 
                      </div>
                      <div class="form-group"><!-- form-group Begin -->
                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Google<span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="google" type="text" class="form-control" placeholder="Entrez le compte google">
                       </div> 
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="submit" value="Ajouter membre" class="btn btn-primary form-control">
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
                            
                                $get_membre = "SELECT * FROM equipe";
                                
                                $run_membre = mysqli_query($con,$get_membre);
          
                                while($row_membre=mysqli_fetch_array($run_membre)){
                                    
                                   $id_equipe = $row_membre['id_equipe'];

                                   $fonction = $row_membre['fonction'];
                        
                                   $nom_complet = $row_membre['nom_complet'];

                                   $image_equipe = $row_membre['image_equipe'];

                                   $desc_equipe = $row_membre['desc_equipe'];

                                   $telephone = $row_membre['telephone'];

                                   $email = $row_membre['email'];

                                   $facebook = $row_membre['facebook'];

                                   $twitter = $row_membre['twitter'];

                                   $youtube = $row_membre['youtube'];

                                   $google = $row_membre['google'];
                            
                            ?>
                
                <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                    <div class="panel panel-primary"><!-- panel panel-primary begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title" align="center"><!-- panel-title begin -->
                            
                                <?php echo $fonction; ?> </td>
                               
                                
                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->
                        
                        <div class="panel-body"><!-- panel-body begin -->
                      

                            <h4><a href="#add_data_Modal" data-toggle="modal" class="hover" id="<?php echo $id_equipe; ?>"><?php echo $nom_complet; ?></a></h4><br>
                            <img src="../production/equipe_images/<?php echo $image_equipe ?>" alt="<?php echo $nom_complet; ?>"  class="img-circle img-responsive"><br>
                            <?php echo "$desc_equipe"; ?>
                            
                        </div><!-- panel-body finish -->
                        <?php  if (isset($result1['e5dd7d16']) || isset($result1['ba0fb393']))  {?>
                        <div class="panel-footer"><!-- panel-footer begin -->
                            <center><!-- center begin -->
                                  <?php  if (isset($result1['e5dd7d16']))  {?>
                                  <a href="delete_membre.php?id=<?php echo $id_equipe; ?>" class="pull-right" onclick="return confirm('Supprimer le membre <?php echo $nom_complet; ?>');">
                                
                                 <i class="fa fa-trash"></i> Supprimer
                                
                                </a><!-- pull-right finish -->
                                <?php } ?>
                                <?php  if (isset($result1['ba0fb393']))  {?>
                                <a href="edit_membre.php?id=<?php echo $id_equipe; ?>" class="pull-left">
                                
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

<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details</h4>  
                </div>  
                <form >   
              <div class="modal-body">
                          <input type="hidden" value="" name="" id="" class="form-group col-md-12"> <h5 style="text-align: center;"><b>Informations detailles sur le membre</b></h5>
                    <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="equipe_images/<?php echo $image_equipe; ?>" alt="<?php echo $nom_model; ?>" title="Image de profil">
                        </div>
                      </div>
                      <h3><span></span></h3>
                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                       <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    
                        <div class="col-sm-12">

                              <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Nom</label> :
                                     <?php echo $nom_complet; ?>
                                     
                                       
                                </div>

                              <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Fonction</label> :
                                     <?php echo $fonction; ?>
                                     
                                       
                                </div> 

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Telephone</label> :
                                     <?php echo $telephone; ?>
                                     
                                       
                                </div>  

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Email</label> :
                                     <?php echo $email; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Description</label> :
                                     <?php echo $desc_equipe; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Facebook</label> :
                                     <?php echo $facebook; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Twitter</label> :
                                     <?php echo $twitter; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Google</label> :
                                     <?php echo $google; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Youtube</label> :
                                     <?php echo $youtube; ?>
                                     
                                       
                                </div>
                </div>   
                </div>
                </div>     
                
                </form>   
             
            </div>
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
        
        $fonction = $_POST['fonction'];

        $nom_complet = $_POST['nom_complet'];

        $desc_equipe = $_POST['desc_equipe'];

        $telephone = $_POST['telephone'];

        $email = $_POST['email'];

        $facebook = $_POST['facebook'];

        $twitter = $_POST['twitter'];

        $youtube = $_POST['youtube'];

        $google = $_POST['google'];
        
        $image_equipe = $_FILES['image_equipe']['name'];
        
        $temp_name = $_FILES['image_equipe']['tmp_name'];

        move_uploaded_file($temp_name,"equipe_images/$image_equipe");
            
        $insert_equipe = "INSERT into equipe (fonction,nom_complet,image_equipe,desc_equipe,telephone,email,facebook,twitter,youtube,google) values ('$fonction','$nom_complet','$image_equipe','$desc_equipe','$telephone','$email','$facebook','$twitter','$youtube','$google')";
            
        $run_sponsors = mysqli_query($con,$insert_equipe);

      //  $_id = $_SESSION['admin_id'];
   // $admin_email = $_SESSION['admin_email']; 

  // $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un membre d\'equipe', 'Ajout membre', NOW(), NOW())";
  // $run_sql =  mysqli_query($con,$sql);
            
        if ($run_sponsors) {
         echo "<script>window.open('insert_equipe.php','_self')</script>";
        }
        
    }

?>