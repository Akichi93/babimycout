<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?> 
<?php 

      if(isset($_GET['id'])){

          $page = $_GET['page'];
          
          $edit_id = $_GET['id'];
          
          $get_m = "SELECT * FROM model WHERE id_model='$edit_id'";  
          
          $run_edit = mysqli_query($con,$get_m);
          
          $row_edit = mysqli_fetch_array($run_edit);
          
          $id_model = $row_edit['id_model'];   
          
          $nom_model = $row_edit['nom_model'];
          
          $image_un = $row_edit['image_un'];
          
          $image_deux = $row_edit['image_deux'];
          
          $image_trois = $row_edit['image_trois'];

          $image_quatre = $row_edit['image_quatre'];

          $image_cinq = $row_edit['image_cinq'];
          
          $prix_model = $row_edit['prix_model'];

          $prix_couture = $row_edit['prix_couture'];
          
          $taille = $row_edit['taille'];
          
          $desc_model = $row_edit['desc_model'];

          $qtes = $row_edit['qtes'];


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
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->

     <script src="multiselect/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="multiselect/bootstrap.min.css" />
  <script src="multiselect/bootstrap.min.js"></script>
  <script src="multiselect/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="multiselect/bootstrap-multiselect.css" />


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
                <h3>Modele</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier modele</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                  <input type="text" name="idmodel" value="<?php echo "$id_model"; ?>" hidden="hidden" >
                  <input type="text" name="pages" value="<?php echo "$page"; ?>" hidden="hidden" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom du modele <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nom_model" type="text" class="form-control col-md-7 col-xs-12" required value="<?php echo $nom_model; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du modele 1 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="image_un" type="file" class="form-control col-md-7 col-xs-12">
                            
                            <br>
                            
                            <img width="70" height="70" src="image_modele/<?php echo $image_un; ?>" alt="<?php echo $image_un; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du modele 2 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="image_deux" type="file" class="form-control col-md-7 col-xs-12" >
                            
                            <br>
                            
                            <img width="70" height="70" src="image_modele/<?php echo $image_deux; ?>" alt="<?php echo $image_deux; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du modele 3 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="image_trois" type="file" class="form-control col-md-7 col-xs-12" >
                            
                            <br>
                            
                            <img width="70" height="70" src="image_modele/<?php echo $image_trois; ?>" alt="<?php echo $image_trois; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du modele 4
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="image_quatre" type="file" class="form-control col-md-7 col-xs-12" >
                            
                            <br>
                            
                            <img width="70" height="70" src="image_modele/<?php echo $image_quatre; ?>" alt="<?php echo $image_quatre; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image du modele 5
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="image_cinq" type="file" class="form-control col-md-7 col-xs-12">
                            
                            <br>
                            
                            <img width="70" height="70" src="image_modele/<?php echo $image_cinq; ?>" alt="<?php echo $image_cinq; ?>">
                        </div>
                      </div>
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Taille 
                        </label>
                       <div class="form-group" style="margin-left: 250px";>
                         <select name="tailles[]" multiple="multiple" class="form-control" id="taille" checked='"checked"'><!-- form-control Begin -->


                                
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="3XL">3XL</option>
                              <option value="4XL">4XL</option>
                              <option value="5XL">5XL</option>
                              <option value="6XL">6XL</option>
                              <option value="2T">2T</option>
                              <option value="3T">3T</option>
                              <option value="4T">4T</option>
                               <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="5XL">5XL</option>
                              <option value="6XL">6XL</option>
                            </select><!-- form-control Finish -->


                          <script>
                              $(document).ready(function(){
                               $('#taille').multiselect({
                                nonSelectedText: 'Selectionner une taille',
                                enableFiltering: true,
                                enableCaseInsensitiveFiltering: true,
                                buttonWidth:'400px'
                               }); 
                              });
                           </script> 

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prix du modele
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="prix_model" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $prix_model ?>">
                        </div>
                      </div>

                      <div class="form-group "><!-- form-group Begin -->
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> Sous categorie</label> 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="s_cate" class="form-control"><!-- form-control Begin -->

                              <option> Selectionner sous categorie</option>

                             <?php 
                              
                              $get_taille = "SELECT * from sous_categorie ";
                              $run_taille = mysqli_query($con,$get_taille);
                              
                              while ($row_taille=mysqli_fetch_array($run_taille)){
                                  
                                  $s_cate = $row_taille['id_scate'];
                                  $nom_scate = $row_taille['nom_scate'];
                                  
                                  ?>
                                  
                                  <option value="<?php echo $s_cate; ?>"> <?php echo $nom_scate; ?></option> <?php
    
                                  
                              }
                              
                              ?>
                           
                            </select>
                            </div>
                       
                   </div><!-- form-group Finish -->
                   <label style="color: blue;">Selection de choix</label><br>
                   <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                                
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="choix[]" value="1" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox1">Acheter</label>
                                </div>
                            </div>
                        </div>
                                
                          <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="" value="2" type="checkbox">
                                    <label class="custom-control-label" for="checkbox2">Coudre</label>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prix de la couture
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="prix_couture" type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $prix_couture ?>">
                        </div>
                      </div>
                       <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantité
                        </label> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="qtes" type="text" class="form-control" placeholder="Entrer la quantité" value="<?php echo $qtes ?>">
                       </div>
                   </div><!-- form-group Finish -->
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Bref description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea name="desc_model" cols="19" rows="6" class="form-control"><?php echo $desc_model; ?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input name="update" value="Mise a jour du modele" type="submit" class="btn btn-primary form-control">
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
    <!-- Bootstrap -->
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- bootstrap-progressbar -->
    <!-- iCheck -->
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->  
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>


  
  </body>
</html>


  <?php 

  if(isset($_POST['update']))
  {

      $idmodel = $_POST['idmodel'];
      $nom_model = $_POST['nom_model'];
      $prix_model = $_POST['prix_model'];
      $desc_model = $_POST['desc_model'];
    // $tailles = $_POST['tailles'];
      $nom_taille = $_POST['nom_taille'];
      $pages = $_POST['pages'];

      
      $image_un = $_FILES['image_un']['name'];
      $image_deux = $_FILES['image_deux']['name'];
      $image_trois= $_FILES['image_trois']['name'];
      $image_quatre= $_FILES['image_quatre']['name'];
      $image_cinq= $_FILES['image_cinq']['name'];
      
      $temp_name1 = $_FILES['image_un']['tmp_name'];
      $temp_name2 = $_FILES['image_deux']['tmp_name'];
      $temp_name3 = $_FILES['image_trois']['tmp_name'];
      $temp_name4 = $_FILES['image_quatre']['tmp_name'];
      $temp_name5 = $_FILES['image_cinq']['tmp_name'];
      
      move_uploaded_file($temp_name1,"image_modele/$image_un");
      move_uploaded_file($temp_name2,"image_modele/$image_deux");
      move_uploaded_file($temp_name3,"image_modele/$image_trois");
      move_uploaded_file($temp_name4,"image_modele/$image_quatre");
      move_uploaded_file($temp_name5,"image_modele/$image_cinq");

if(isset($_POST["taille"]))
{
 $taille = '';
 foreach($_POST["taille"] as $row)
 {
  $taille .= $row . ', ';
 }
 $taille = substr($taille, 0, -2);
// $query = "INSERT INTO like_table(taille) VALUES('".$taille."')";
}

$checkbox1=$_POST['coudre'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  


 //UPDATE `model` SET `id_model`=[value-1],`nom_model`=[value-2],`image_un`=[value-3],`image_deux`=[value-4],`image_trois`=[value-5],`image_quatre`=[value-6],`image_cinq`=[value-7],`desc_model`=[value-8],`prix_model`=[value-9],`prix_couture`=[value-10],`statut`=[value-11],`qtes`=[value-12],`taille`=[value-13],`coudre`=[value-14],`date_create`=[value-15],`date_update`=[value-16],`id_cate`=[value-17],`id_scate`=[value-18] WHERE 1

      
      if (empty($image_un)  && empty($image_deux) && empty($image_trois) && empty($image_quatre) && empty($image_cinq)) 
      {
         $update_modele = "UPDATE model SET nom_model='$nom_model',desc_model='$desc_model',prix_model='$prix_model',id_taille ='$tailles',date_update=NOW() WHERE id_model='$idmodel'";
      }
      else 
      {
          
      $update_modele = "UPDATE model SET nom_model='$nom_model',image_un='$image_un',image_deux='$image_deux',image_trois='$image_trois',image_quatre='$image_quatre',image_cinq='$image_cinq',desc_model='$desc_model',prix_model='$prix_model',taille ='$taille',coudre='$chk',date_update=NOW() WHERE id_model='$idmodel'";
      }
      
      $run_modele = mysqli_query($con,$update_modele);
      
      if($run_modele){ 
          
         echo "<script>window.open('$pages','_self')</script>"; 
          
      } else {
           
           echo "<script>alert('ca ne passe pas')</script> ";
      }
      
  }

  ?>
