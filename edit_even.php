<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

    if(isset($_GET['id'])){
        
        $edit_id = $_GET['id']; 

         $get_even = "SELECT * FROM evenement INNER JOIN detail_even ON evenement.id_detail = detail_even.id_detail INNER JOIN lieu_even ON evenement.id_lieu = lieu_even.id_lieu INNER JOIN organisateur ON evenement.id_organ = organisateur.id_organ WHERE id_even='$edit_id'";

        $run_edit = mysqli_query($con,$get_even);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $id_even = $row_edit['id_even']; 
                                    
        $titre_even = $row_edit['titre_even'];

        $desc_even = $row_edit['desc_even'];

        $id_detail = $row_edit['id_detail'];

        $id_lieu = $row_edit['id_lieu'];

        $id_organ = $row_edit['id_organ'];
                                    
        $image_even = $row_edit['image_even'];
                                    
        $date_debut = $row_edit['date_debut'];

        $date_fin = $row_edit['date_fin'];

        $cout = $row_edit['cout'];

        $categorie = $row_edit['categorie'];
                                    
        $nom_lieu = $row_edit['nom_lieu'];

        $adresse_lieu = $row_edit['adresse_lieu'];

        $tel_lieu = $row_edit['tel_lieu'];

        $nom_organ = $row_edit['nom_organ'];

        $tel_organ = $row_edit['tel_organ'];

        $email = $row_edit['email'];

        $site_web = $row_edit['site_web'];
        
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
    
    <title>Modifier evenement </title>

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
                <h3>Evenement</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier evenement</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                     <form action="edit_even.php" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                <input type="text" name="idevent" value="<?php echo "$id_even"; ?>" hidden="hidden" >
                <input type="text" name="id_detail" value="<?php echo "$id_detail"; ?>" hidden="hidden" >
                <input type="text" name="id_lieu" value="<?php echo "$id_lieu"; ?>" hidden="hidden" >
                <input type="text" name="id_organ" value="<?php echo "$id_organ"; ?>" hidden="hidden" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Titre de l'evenement<span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="titre_even" type="text" class="form-control col-md-7 col-xs-12" required value="<?php echo $titre_even; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Categorie de l'evenement  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="categorie" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $categorie; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description de l'evenement</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="desc_even" cols="19" rows="3" class="form-control">
                          <?php echo $desc_even; ?>
                        </textarea> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image de l'evenement
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <input name="image_even" type="file" class="form-control form-height-custom col-md-7 col-xs-12"> 

                          <br>
                          
                          <img width="70" height="70" src="image_even/<?php echo $image_even; ?>" alt="<?php echo $image_even; ?>"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de debut  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="date_debut" type="date" class="form-control col-md-7 col-xs-12" value="<?php echo $date_debut; ?>"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de fin 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="date_fin" type="date" class="form-control col-md-7 col-xs-12"  value="<?php echo $date_fin; ?>"> 
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cout de l'evenement 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="cout" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $cout; ?>"> 
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom du lieu  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nom_lieu" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nom_lieu; ?>"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adresse du lieu 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                          <input name="adresse_lieu" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $adresse_lieu; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone du lieu 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                          <input name="tel_lieu" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $tel_lieu; ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom de l'organisateur 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                          <input name="nom_organ" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $nom_organ; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone de l'organisateur
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="tel_organ" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $tel_organ; ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="email" type="email" class="form-control col-md-7 col-xs-12" value="<?php echo $email; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Site web  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="site_web" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $site_web; ?>">
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="update" value="Mise a jour de l'evenement"  class="btn btn-primary form-control">
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

       <?php require 'include/footer.php' ?>
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

    $idevent = $_POST['idevent'];
    $id_detail = $_POST['id_detail'];
    $id_lieu = $_POST['id_lieu'];
    $id_organ = $_POST['id_organ'];
    $titre_even = $_POST['titre_even'];
    $desc_even = $_POST['desc_even'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin']; 
    $cout = $_POST['cout'];
    $categorie = $_POST['categorie'];
    $nom_lieu = $_POST['nom_lieu'];
    $adresse_lieu = $_POST['adresse_lieu'];
    $tel_lieu = $_POST['categorie'];
    $nom_organ = $_POST['nom_organ'];
    $tel_organ = $_POST['tel_organ'];
    $site_web = $_POST['site_web'];
    $email = $_POST['email'];
    
    $image_even = $_FILES['image_even']['name'];
    $temp_image_even = $_FILES['image_even']['tmp_name'];

    move_uploaded_file($temp_image_even,"image_even/$image_even");
    
    $update_detail = "UPDATE detail_even SET date_debut='$date_debut',date_fin='$date_fin',cout='$cout',categorie='$categorie',date_update=NOW() WHERE id_detail='$id_detail'";
    $run_detail = mysqli_query($con,$update_detail);

   $update_lieu ="UPDATE lieu_even SET nom_lieu='$nom_lieu',adresse_lieu='$adresse_lieu',tel_lieu='$tel_lieu',date_update=NOW() WHERE id_lieu='$id_lieu'";
    $run_lieu = mysqli_query($con,$update_lieu);

   $update_organ ="UPDATE organisateur SET nom_organ='$nom_organ',tel_organ='$tel_organ',email='$email',site_web='$site_web',date_update=NOW() WHERE id_organ='$id_organ'";
   $run_organ = mysqli_query($con,$update_organ);

   if (empty($image_even)) 
    {

    $update_even = "UPDATE evenement SET titre_even='$titre_even',desc_even='$desc_even',date_update=NOW() WHERE id_even='$idevent'";
    }
    else
    {
    $update_even = "UPDATE evenement SET titre_even='$titre_even',desc_even='$desc_even',image_even='$image_even',date_update=NOW() WHERE id_even='$idevent'";
    }

    $run_even = mysqli_query($con,$update_even);

    if($run_even){
         
      echo "<script>window.open('evenement.php','_self')</script>"; 
        
    } 
    else 
    {
     echo "ERREUR";
    }
    
    
}

?>
