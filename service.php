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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
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
                <h3>Photo professionnelle</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if  (isset($result1['4d61b16c'])) {?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter photo pro</button>
                  <?php } ?>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter photo proffesionnelle </h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="modal-body" id="ajouter_modele">

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Titre </label> 
                      <input type="text" name="titre_pres" class="form-control">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Description de la prestation </label> 
                      <textarea name="desc_pres" cols="12" rows="3" class="form-control"></textarea>
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image  prestation 1 </label> 
                      <input name="image_pres_un" type="file" class="form-control form-height-custom" required>       
                   </div>
                   
                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image prestation 2 </label> 
                      <input name="image_pres_deux" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image prestation 3 </label> 
                      <input name="image_pres_trois" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image prestation 4 </label> 
                      <input name="image_pres_quatre" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                      <label> Image prestation 5 </label> 
                      <input name="image_pres_six" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6">
                      <label >Image prestation 6</label>
                      <input name="image_pres_cinq" type="file" class="form-control form-height-custom">
                    </div>  

                    <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image prestation 7 </label> 
                      <input name="image_pres_sept" type="file" class="form-control form-height-custom">
                       
                   </div><!-- form-group Finish -->
                   
                    <div class="form-group col-md-6"><!-- form-group Begin -->
                       
                      <label> Image prestation 8 (580*420) </label> 
                      <input name="image_pres_huit" type="file" class="form-control form-height-custom">
                       
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
                    <h2>Liste des prestations</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Description</th>
                          <th>Image 1</th>
                         <?php  if (isset($result1['0ed0328e']) || isset($result1['cd147cc7']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
          
                                $i=0;

                                $get_photo = "SELECT * FROM photo_pro ";
                                
                                $run_photo = mysqli_query($con,$get_photo);
          
                                while($row_photo=mysqli_fetch_array($run_photo)){
                                    
                                    $id_pres = $row_photo['id_pres'];

                                    $titre_pres = $row_photo['titre_pres'];
                                    
                                    $desc_pres = $row_photo['desc_pres'];
                                    
                                    $image_pres_un = $row_photo['image_pres_un'];
                                    
                                    $image_pres_deux = $row_photo['image_pres_deux'];
                                    
                                    $image_pres_trois = $row_photo['image_pres_trois'];  
                                    
                                    $image_pres_quatre = $row_photo['image_pres_quatre'];

                                    $image_pres_cinq = $row_photo['image_pres_cinq'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $titre_pres; ?>  </td>
                                <td> <?php echo $desc_pres; ?> </td>
                                <td> <img src="prestation_images/<?php echo $image_pres_un; ?>" width="60" height="60"></td>
                                 <?php  if (isset($result1['cf045173']) || isset($result1['36caa469']))  {?>
                                <td> 
                                     <?php  if  (isset($result1['cf045173'])) {?>
                                     <a href="delete_photo.php?id=<?php echo $id_pres; ?>" onclick="return confirm('Supprimer photo <?php echo $titre_pres; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
                                     </a> 
                                     <?php } ?>
                                     <?php  if  (isset($result1['36caa469'])) {?>
                                    <a href="edit_photo.php?id=<?php echo $id_pres; ?>">
                                     
                                        <i class="fa fa-pencil"></i> 
                                    
                                     </a>
                                     <?php } ?> 
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

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
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

<?php 

if(isset($_POST['submit'])){
    
    $titre_pres = $_POST['titre_pres'];
    $desc_pres = $_POST['desc_pres'];
    
    $image_pres_un = $_FILES['image_pres_un']['name'];
    $image_pres_deux = $_FILES['image_pres_deux']['name'];
    $image_pres_trois= $_FILES['image_pres_trois']['name'];
    $image_pres_quatre= $_FILES['image_pres_quatre']['name'];
    $image_pres_cinq= $_FILES['image_pres_cinq']['name'];
    $image_pres_six= $_FILES['image_pres_six']['name'];
    $image_pres_sept= $_FILES['image_pres_sept']['name'];
    $image_pres_huit= $_FILES['image_pres_huit']['name'];
    
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
    
    $insert_prestation = "INSERT into photo_pro (titre_pres,desc_pres,image_pres_un,image_pres_deux,image_pres_trois,image_pres_quatre,image_pres_cinq,image_pres_six,image_pres_sept,image_pres_huit) values ('$titre_pres','$desc_pres','$image_pres_un','$image_pres_deux','$image_pres_trois','$image_pres_quatre','$image_pres_cinq','$image_pres_six','$image_pres_sept','$image_pres_huit')";

   $run_prestation = mysqli_query($con,$insert_prestation);

   $_id = $_SESSION['admin_id'];
    $admin_email = $_SESSION['admin_email']; 

   $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter une prestation de service', 'Ajout de prestation', NOW(), NOW())";
   $run_sql =  mysqli_query($con,$sql);
    
   if($run_sql){
        
      echo "<script>window.open('service.php','_self')</script>";
        
   }
    
}

?>