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

    <title>Coudre</title>

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
                <h3>Coudres</h3>
              </div>

              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des coutures</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>N° de reference</td>
                          <th>Nom du modele</th>
                          <th>Nom</th>Image
                          <th>Prenom</th>
                          <th>Ville</th>
                          <th>Lieu</th>
                          <th>Commune</th>
                          <th>Pagne</th>
                          <th>Long Taille</th>
                          <th>Bassin</th>
                          <?php  if (isset($result1['1b994ea4']))  {?> 
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
          
                                $get_couture = "SELECT * FROM couture inner join categorie ON couture.id_cate = categorie.id_cate inner join mesures on couture.id_mesure = mesures.id_mesure inner join model on couture.id_model = model.id_model inner join user on couture.id_user = user.id_user";
                                
                                $run_couture= mysqli_query($con,$get_couture);

                                 if (!$run_couture) {
                                   printf("Error: %s\n", mysqli_error($con));
                                               exit();
                                             }
          
                                while($row_couture=mysqli_fetch_array($run_couture)){
                                      
                                    $id_coutu = $row_couture['id_coutu'];
                                    
                                    $dos = $row_couture['dos'];

                                    $epaule = $row_couture['epaule'];

                                    $epaule_manche = $row_couture['epaule_manche'];

                                    $poitrine = $row_couture['poitrine'];

                                    $t_taille = $row_couture['t_taille'];
                                    
                                    $long_taille = $row_couture['long_taille'];

                                    $bassin = $row_couture['bassin'];

                                    $long_manche = $row_couture['long_manche'];

                                    $nom_user = $row_couture['nom_user'];

                                    $prenom_user = $row_couture['prenom_user'];

                                    $nom_model = $row_couture['nom_model'];

                                    $ville = $row_couture['ville'];

                                    $lieu = $row_couture['lieu'];

                                    $commune = $row_couture['commune'];

                                    $pagne = $row_couture['pagne'];

                                    $image_un = $row_couture['image_un'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> </td>
                                <td><?php echo $nom_model; ?></td>
                                <td><?php echo $nom_user; ?></td>
                                <td> <?php echo $prenom_user; ?></td>
                                <td> <?php echo $ville; ?></td>
                                <td> <?php echo $lieu; ?></td>
                                 <td> <?php echo $commune; ?> </td>
                                <td> <?php echo $pagne; ?></td>
                                <td> <?php echo $long_taille; ?></td>
                                <td> <?php echo $bassin; ?> </td>
                                
                                
                                <td>
                                     
                                     <a href="delete_coudre.php?id=<?php echo $id_coutu; ?>" onclick="return confirm('Supprimer la couture' <?php echo $nom_model; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
                                     </a> 
                                     
                                     <a href="Voir_details.php?id=<?php echo $id_coutu; ?>">
                                     
                                        <i class="fa fa-pencil"></i> 
                                    
                                     </a>
                                     
                                </td>
                                    

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