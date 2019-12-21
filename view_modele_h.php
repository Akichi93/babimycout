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
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Babimycouture</title>

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

  
   
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  

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
                <h3>Modeles Hommes</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if  (isset($result1['4d61b16c'])) {?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter modele</button>
                  <?php } ?>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter modele <small>homme</small></h4>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body" id="ajouter_modele">
                          <div class="form-group col-md-6">
                      <label for="nom">Nom du modele</label>
                      <input type="text" class="form-control" name="nom_model" placeholder="Entrer le nom du modele" required>
                    </div>  

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image  du modele 1 </label> 
                      <input name="image_un" type="file" class="form-control" required>
                       
                   </div>
                   
                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image du modele 2 </label> 
                      <input name="image_deux" type="file" class="form-control">
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image du modele 3 </label> 
                      <input name="image_trois" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image du modele 4 </label> 
                      <input name="image_quatre" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                      <label> Image du modele 5 </label> 
                      <input name="image_cinq" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Prix du modele </label> 
                      <input name="prix_model" type="text" class="form-control" placeholder="Entrer le prix du modele" required>
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Sous categorie</label> 
                      <select name="s_cate" class="form-control"><!-- form-control Begin -->

                              <option> Selectionner sous categorie</option>

                             <?php 
                              
                              $get_taille = "SELECT * from sous_categorie WHERE id_cate = 1 ";
                              $run_taille = mysqli_query($con,$get_taille);
                              
                              while ($row_taille=mysqli_fetch_array($run_taille)){
                                  
                                  $s_cate = $row_taille['id_scate'];
                                  $nom_scate = $row_taille['nom_scate'];
                                  
                                  ?>
                                  
                                  <option value="<?php echo $s_cate; ?>"> <?php echo $nom_scate; ?></option> <?php
    
                                  
                              }
                              
                              ?>
                           
                            </select>
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Prix de la couture </label> 
                      <input name="prix_couture" type="text" class="form-control" placeholder="Entrer le prix de la couture" required>
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Quantité </label> 
                      <input name="qtes" type="text" class="form-control" placeholder="Entrer la quantité" required>
                       
                   </div><!-- form-group Finish -->
                   <label style="color: blue;">Selection de choix</label><br>
                   <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                                
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="coudre[]" value="acheter" type="checkbox" >
                                    <label class="custom-control-label">Acheter</label>
                                </div>
                            </div>
                        </div>
                                
                          <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="coudre[]" value="coudre" type="checkbox">
                                    <label class="custom-control-label">Coudre</label>
                                </div>
                            </div>
                        </div>
                      </div>
                   
                   <div class="form-group" ><!-- form-group Begin -->
                       
                      <label> Taille </label> <br>
                          
                            <select  style="width: -500%;" name="taille[]" class="form-control" multiple="multiple" id="tailles"><!-- form-control Begin -->
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                               <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                              <option value="XXXL">XXXL</option>
                              <option value="4XL">4XL</option>
                              <option value="5XL">5XL</option>
                              <option value="6XL">6XL</option>
                           
                            </select>

                            <script>
                              $(document).ready(function(){
                               $('#tailles').multiselect({
                                nonSelectedText: 'Selectionner une taille',
                                enableFiltering: true,
                                enableCaseInsensitiveFiltering: true,
                                buttonWidth:'400px'
                               }); 
                              });
                           </script> 
                       
                   </div><!-- form-group Finish -->

                   

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Description du modele </label> 
                      <textarea name="desc_model" cols="12" rows="3" class="form-control" placeholder="Entrer la description du modele"></textarea>
                       
                   </div><!-- form-group Finish -->

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                          <input type="hidden"/> 
                          <input type="submit" name="submit" id="submit" value="Ajouter" class="btn btn-primary"/>
                        </div>
                       </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des modeles <small>Hommes</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom du modele</th>
                          <th>Image du modele</th>
                          <th>Prix du modele</th>
                          <th>Prix de la couture</th>
                          <th>Taille du modele</th>
                          <th>Description</th>
                         <?php  if (isset($result1['0ed0328e']) || isset($result1['cd147cc7']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
          
                                $i=0;
                            
                                $get_model = "SELECT * FROM model  WHERE id_cate = 1 ORDER BY id_model DESC"; 
                                
                                $run_model = mysqli_query($con,$get_model);
          
                                while($row_model=mysqli_fetch_array($run_model)){
                                    
                                    $id_model = $row_model['id_model'];
                                    
                                    $nom_model = $row_model['nom_model'];
                                    
                                    $image_un = $row_model['image_un'];
                                    
                                    $prix_model = $row_model['prix_model'];

                                    $prix_couture = $row_model['prix_couture'];
                                    
                                    $taille = $row_model['taille'];  
                                    
                                    $desc_model = $row_model['desc_model'];

                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $nom_model; ?> </td>
                                <td> <img src="image_modele/<?php echo $image_un; ?>" width="60" height="60"></td>
                                <td> XOF <?php echo $prix_model; ?> </td>
                                <td> <?php echo $prix_couture; ?></td>
                                <td> <?php echo $taille; ?> </td></td> 
                                <td> <?php echo $desc_model ?> </td>
                                 <?php  if (isset($result1['0ed0328e']) || isset($result1['cd147cc7']))  {?>
                                <td> 
                                     <?php  if  (isset($result1['0ed0328e'])) {?>
                                     <a href="delete_modele.php?id=<?php echo $id_model; ?>&page=view_modele_h.php" onclick="return confirm('Supprimer le modele <?php echo $nom_model; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
                                     </a> 
                                     <?php } ?>
                                     <?php  if  (isset($result1['cd147cc7'])) {?>
                                    <a href="edit_modele.php?id=<?php echo $id_model; ?>&page=view_modele_h.php">
                                     
                                        <i class="fa fa-pencil"></i> 
                                    
                                     </a>
                                     <?php } ?>
                                     <a href="#add_data_Modal1" data-toggle="modal" class="hover" id="<?php echo $id_model; ?>">
                                     
                                        <i class="fa fa-eye"></i> 
                                    
                                     </a> 
                                </td>
                                <?php } ?> 
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                      </tbody>
                    </table>
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

    <div id="add_data_Modal1" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details</h4>  
                </div>  
                <form >   
              <div class="modal-body">
                          <input type="hidden" value="" name="" id="" class="form-group col-md-12"> <h5 style="text-align: center;"><b>Informations detailles sur le modele</b></h5>
                    <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="image_modele/<?php echo $image_un; ?>" alt="<?php echo $nom_model; ?>" title="Image de profil">
                        </div>
                      </div>
                      <h3><span></span></h3>
                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      
                       <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    
                        <div class="col-sm-12">

                              <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Nom du model</label> :
                                     <?php echo $nom_model; ?>
                                     
                                       
                                </div>

                              <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Prix du model</label> :
                                     <?php echo $prix_model; ?>
                                     
                                       
                                </div> 

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Prix de la couture</label> :
                                     <?php echo $prix_couture; ?>
                                     
                                       
                                </div>  

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Taille</label> :
                                     <?php echo $taille; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Sous categorie</label> :
                                     <?php echo $nom_scate; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Description</label> :
                                     <?php echo $desc_model; ?>
                                     
                                       
                                </div>

                                
                </div>   
                </div>
                </div>     
                
                </form>   
             
            </div>
       </div>  
 </div>

    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>

<!-- INSERT MODELE -->

<?php 

if(isset($_POST['submit'])){
    
    $nom_model = $_POST['nom_model'];
    $prix_model = $_POST['prix_model'];
    $prix_couture = $_POST['prix_couture'];
    $qtes = $_POST['qtes']; 
    $s_cate = $_POST['s_cate'];
     $acheter = $_POST['acheter'];
    $coudre = $_POST['coudre'];
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


    $desc_model = $_POST['desc_model'];
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
    
    $insert_modele = "INSERT into model (nom_model,image_un,image_deux,image_trois,image_quatre,image_cinq,desc_model,prix_model,prix_couture,statut,qtes,taille,coudre,date_create,id_cate,id_scate) values ('$nom_model','$image_un','$image_deux','$image_trois','$image_quatre','$image_cinq','$desc_model','$prix_model','$prix_couture','0','$qtes','".$taille."','$chk',NOW(),'1','".$s_cate."')";

    $run_modele = mysqli_query($con,$insert_modele);

    $_id = $_SESSION['admin_id'];
    $admin_email = $_SESSION['admin_email']; 

   $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un modele homme', 'Ajout', NOW(), NOW())";
   $run_sql =  mysqli_query($con,$sql);
    
    if($run_sql){
        
        echo "<script>window.open('view_modele_h.php','_self')</script>";
        
    }
    
}

?>
