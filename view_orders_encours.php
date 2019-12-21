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

    <title>Commandes en attente</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                <h3>Commandes</h3>
              </div>

              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des commandes <small>En cours</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Email</th>
                          <th>Nom du modele</th>
                          <th>Quantité</th>
                          <th>Taille</th>
                          <th>Avance</th>
                          <th>Date</th>
                          <?php  if (isset($result1['9083f104']) || isset($result1['ce1dd168']) || isset($result1['41b89304']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                            
                                $get_commande = "SELECT * FROM commande INNER JOIN user ON commande.id_user = user.id_user INNER JOIN model ON commande.id_model = model.id_model  WHERE commande.statut = 0 ORDER BY id_livre DESC "; 
                                
                                $run_commande= mysqli_query($con,$get_commande);

                                 if (!$run_commande) {
                                   printf("Error: %s\n", mysqli_error($con));
                                               exit();
                                             }

          
                                while($row_commande=mysqli_fetch_array($run_commande)){
                                    
                                    $id_livre = $row_commande['id_livre'];
                                    
                                    $id_model = $row_commande['id_model'];
                                    
                                    $id_user = $row_commande['nom_user'];

                                    $prenom_user = $row_commande['prenom_user'];

                                    $nom_user = $row_commande['nom_user'];

                                    $mail_user = $row_commande['mail_user'];

                                    $nom_model = $row_commande['nom_model'];

                                    $taille = $row_commande['taille']; 
                                    
                                    $couture_type = $row_commande['couture_type'];

                                    $date_create = $row_commande['date_create'];
                                    
                                    $qte = $row_commande['qte'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td class="id" hidden="hidden"><?php echo $id_livre; ?></td>
                                <td> <?php echo $nom_user; ?></td>
                                <td> <?php echo $prenom_user; ?></td>
                                <td> <?php echo $nom_model; ?> </td>
                                <td> <?php echo $mail_user; ?></td>
                                <td> <?php echo $qte; ?></td>
                                <td> <?php echo $taille; ?> </td>
                                <td></td>
                                <td> <?php echo $date_create; ?> </td>
                                 <?php  if (isset($result1['9083f104']) || isset($result1['ce1dd168']) || isset($result1['41b89304']))  {?>
                                <td> 
                                     <?php  if (isset($result1['9083f104']))  {?>
                                     <a href="delete_order.php?id=<?php echo $id_livre; ?>&page=view_orders_encours.php?" onclick="return confirm('Supprimer la commande de <?php echo $nom_user; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 

                                      </a> 
                                      <?php } ?>
                                      <?php  if (isset($result1['ce1dd168']))  {?>
                                       <a class="update" title="Valider la commande" data-toggle="modal" href="#add_data_Modal" >
                                     
                                        <i class="fa fa-check" style="color: #efbd09;"></i> 
                                    
                                     </a>
                                     <?php } ?>
                                     <?php  if (isset($result1['41b89304']))  {?>
                                     <a class="del" title="Annuler la commande" data-toggle="modal" href="#add_data_Modal1">
                                     
                                        <i class="fa fa-close" style="color: red;"></i> 
                                    
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

        <!-- Valider commande -->

<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Valider la commande</h4>  
                </div>  
                <form role="form" action="view_orders_encours.php" method="post" >   
              <div class="modal-body">
                          <input type="hidden" value="" name="valider" id="iduser" class="form-group col-md-12"> Etes vous sur que  l'article a été livré?
                    <br>
                </div>        
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                     <input type="hidden"/>  
                     <input type="submit" name="submit" id="submit" value="Oui" class="btn btn-primary"/>   
                </div>
                </form>   
             
            </div>
       </div>  
 </div>

 <div id="add_data_Modal1" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Annuler la commande</h4>  
                </div>  
                <form role="form" action="view_orders_encours.php" method="post" >   
              <div class="modal-body">
                          <input type="hidden" value="" name="annuler" id="idusers" class="form-group col-md-12"> Etes vous sur que  l'article a été annulé?
                    <br>
                </div>        
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                     <input type="hidden"/>  
                     <input type="submit" name="send" id="send" value="Oui" class="btn btn-primary"/>   
                </div>
                </form>   
             
            </div>
       </div>  
 </div>

        <?php require'include/footer.php' ?>
      </div>
    </div>

    <?php

if(isset($_POST['submit'])){
    
    $statut = 1;

    $valid = $_POST['valider'];

    $update_commande = "UPDATE commande SET statut=1,date_update=NOW() WHERE id_livre = '".$valid."'";

    $run_commande = mysqli_query($con,$update_commande);
    
   if($run_commande){  

      echo "<script>window.open('view_orders_encours.php','_self')</script>";
        
   }
    

}
?>

 <?php

if(isset($_POST['send'])){
    
    $statut = 2;

    $annul = $_POST['annuler'];

    $update_commande = "UPDATE commande SET statut=2,date_update=NOW() WHERE id_livre = '".$annul."'";

    $run_commande = mysqli_query($con,$update_commande);
    
   if($run_commande){  

      echo "<script>window.open('view_orders_encours.php','_self')</script>";
        
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
        $('#datatable-buttons').on('click', '.update', function (e) {
            //e.preventDefault();
            var iduser = '';
            papa = $(this).parent();
            iduser = papa.siblings('.id').html();
            $("#iduser").val(iduser);
            console.log(iduser);
            //verifSoum = $('#datatable').attr('soumExist');
//                 moy = parsInt(papa.siblings('.moyPrincip').html());

            // moy = parseFloat(papa.siblings('.moyPrincip').html());

        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#datatable-buttons').on('click', '.del', function (e) {
            //e.preventDefault();
            var iduser = '';
            papa = $(this).parent();
            iduser = papa.siblings('.id').html();
            $("#idusers").val(iduser);
            console.log(iduser);
            //verifSoum = $('#datatable').attr('soumExist');
//                 moy = parsInt(papa.siblings('.moyPrincip').html());

            // moy = parseFloat(papa.siblings('.moyPrincip').html());

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

