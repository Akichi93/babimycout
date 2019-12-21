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
                <h3>Services</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if  (isset($result1['4d61b16c'])) {?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter prestation de services</button>
                  <?php } ?>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter prestation de service </h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="modal-body" id="ajouter_modele">

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Titre </label>
                      <input type="text" name="titre" class="form-control">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Description de la prestation </label> 
                      <textarea name="description" cols="12" rows="3" class="form-control"></textarea>
                       
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
                         <?php  if (isset($result1['0ed0328e']) || isset($result1['cd147cc7']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
          
                                $i=0;

                                $get_service = "SELECT * FROM services";
                                
                                $run_service = mysqli_query($con,$get_service);
          
                                while($row_service=mysqli_fetch_array($run_service)){
                                    
                                    $id_service = $row_service['id_service'];

                                    $titre = $row_service['titre'];
                                    
                                    $description = $row_service['description'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $titre; ?>  </td>
                                <td> <?php echo $description; ?> </td>
                                 <?php  if (isset($result1['89cb8078']) || isset($result1['e95f51f6']))  {?>
                                <td> 
                                     <?php  if  (isset($result1['89cb8078'])) {?>
                                     <a href="delete_service.php?id=<?php echo $id_service; ?>" onclick="return confirm('Supprimer service <?php echo $id_service; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
                                     </a> 
                                     <?php } ?>
                                     <?php  if  (isset($result1['e95f51f6'])) {?>
                                    <a href="edit_service.php?id=<?php echo $id_service; ?>">
                                     
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
    
    $titre = $_POST['titre'];
    $description = $_POST['description'];

   $insert_prestation="INSERT INTO services( titre, description, date_create) VALUES ('$titre','$description',NOW())";

   $run_prestation = mysqli_query($con,$insert_prestation);

    $_id = $_SESSION['admin_id'];
         $admin_email = $_SESSION['admin_email'];

        $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter une prestation', 'Ajout de prestation', NOW(), NOW())";
        $run_sql =  mysqli_query($con,$sql);
    
   if($run_sql){
        
      echo "<script>window.open('insert_prestation.php','_self')</script>";
        
   }
    
}

?>