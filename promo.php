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
                <h3>Code promo</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if  (isset($result1['9da60bf3'])) {?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter code promo</button>
                  <?php } ?>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter code promo </h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="modal-body" id="ajouter_modele">

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label>Code </label>
                      <input type="text" name="code" class="form-control">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Pourcentage</label>
                      <input type="text" name="pourcentage" class="form-control">
                       
                   </div><!-- form-group Finish -->

                    <div class="form-group" ><!-- form-group Begin -->
                       
                      <label> Categorie</label> <br>
                          
                            <select name="categorie" class="form-control"><!-- form-control Begin -->
                              

                              <option>Selectionner une categorie</option>
                              <option value="homme">HOMMES</option>
                              <option value="femme">FEMMES</option>
                              <option value="enfant">ENFANTS</option>
                           
                            </select>
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6 ">
                      <label>Date de début </label> 
                      <input name="date_debut" type="date" class="form-control" required>  
                   </div>

                    <div class="form-group col-md-6 ">
                      <label>Heure de début </label> 
                      <input name="heure_debut" type="time" class="form-control" required>  
                   </div>

                    <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label >Date de fin </label> 
                      <input name="date_fin" type="date" class="form-control" required>      
                   </div><!-- form-group Finish -->

                    <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label >Heure de fin </label> 
                      <input name="heure_fin" type="time" class="form-control" required>      
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
                    <h2>Liste des codes promo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Code</th>
                          <th>Pourcentage</th>
                          <th>Categorie</th>
                          <th>Date et heure de debut</th>
                          <th>Date et heure de fin</th>
                         <?php  if (isset($result1['62c147eb']) || isset($result1['7b4d9337']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
          
                                $i=0;

                                $get_promo = "SELECT * FROM promo";
                                
                                $run_promo = mysqli_query($con,$get_promo);
          
                                while($row_promo=mysqli_fetch_array($run_promo)){
                                    
                                    $id_promo = $row_promo['id_promo'];

                                    $code = $row_promo['code'];
                                    
                                    $pourcentage = $row_promo['pourcentage'];

                                    $categorie = $row_promo['categorie'];

                                    $date_debut = $row_promo['date_debut'];

                                    $date_fin = $row_promo['date_fin'];

                                    $heure_debut = $row_promo['heure_debut'];

                                    $heure_fin = $row_promo['heure_fin'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $code; ?>  </td>
                                <td> <?php echo $pourcentage; ?> % </td>
                                <td> <?php echo $categorie; ?> </td>
                                <td> <?php echo $date_debut; ?> <?php echo $heure_debut; ?> </td>
                                <td> 
                                  <?php echo $date_fin; ?> <?php echo $heure_fin; ?>
                                </td>
                                
                                 <?php  if (isset($result1['62c147eb']) || isset($result1['7b4d9337']))  {?>
                                <td> 
                                     <?php  if  (isset($result1['62c147eb'])) {?>
                                     <a href="delete_code.php?id=<?php echo $id_promo; ?>" onclick="return confirm('Supprimer code promo <?php echo $code; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
                                     </a> 
                                     <?php } ?>
                                     <?php  if  (isset($result1['7b4d9337'])) {?>
                                    <a class="reactive" title="reactiver code promo" data-toggle="modal" href="#add_data_Modale">
                                     
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
0

<div id="add_data_Modale" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Reactiver la commande</h4>  
                </div>  
                <form role="form" action="view_orders_encours.php" method="post" >   
              <div class="modal-body">
                          <input type="hidden" value="" name="reactiver" id="iduser" class="form-group col-md-12"> Choisissez les dates
                    <br>
                    <div class="form-group col-md-6 ">
                      <label>Date de début </label> 
                      <input name="date_debut" type="date" class="form-control" required>  
                   </div>

                    <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label >Date de fin </label> 
                      <input name="date_fin" type="date" class="form-control" required>      
                   </div><!-- form-group Finish -->
                </div>        
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                     <input type="hidden"/>  
                     <input type="submit" name="envoyer" id="envoyer" value="Oui" class="btn btn-primary"/>   
                </div>
                </form>   
             
            </div>
       </div>  
 </div>

  <?php

if(isset($_POST['envoyer'])){
    
    $statut = 0;
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $reactiv = $_POST['reactiver'];

    $update_promo = "UPDATE promo SET date_debut='$date_debut',date_fin='$date_fin',statut=0,date_update=NOW() WHERE id_promo = '".$reactiv."'";

  
    $run_promo = mysqli_query($con,$update_promo);
    
   if($run_promo){  

      echo "<script>window.open('promo.php','_self')</script>";
        
   }
    

}
?>
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
    <script>
    $(document).ready(function () {
        $('#datatable-buttons').on('click', '.reactive', function (e) {
            //e.preventDefault();
            var iduser = '';
            papa = $(this).parent();
            idusers = papa.siblings('.id').html();
            $("#iduser").val(idusers);
            console.log(idusers);
        });
    });

</script>
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
    
    $code = $_POST['code'];
    $pourcentage = $_POST['pourcentage'];
    $categorie = $_POST['categorie'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $heure_debut = $_POST['heure_debut'];
    $heure_fin = $_POST['heure_fin'];


   $insert_promo="INSERT INTO promo( code, categorie, pourcentage, date_debut, date_fin, heure_debut, heure_fin, statut, date_create) VALUES ('$code','$categorie','$pourcentage','$date_debut','$date_fin','$heure_debut','$heure_fin','0',NOW())";

   $run_promo = mysqli_query($con,$insert_promo);

   $_id = $_SESSION['admin_id'];
    $admin_email = $_SESSION['admin_email']; 

   $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un code promo', 'Ajout de promo', NOW(), NOW())";
   $run_sql =  mysqli_query($con,$sql);
    
   if($run_sql){
        
      echo "<script>window.open('promo.php','_self')</script>";
        
   }
    
}

?>