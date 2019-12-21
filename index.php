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
          <!-- top tiles -->
            <?php  if (isset($result1['d8ad8d4a']) || isset($result1['4f8dc28f']) || isset($result1['4cec2f11']) || isset($result1['32521842']) || isset($result1['621d4b3a']) || isset($result1['78c12891']))  {?>
          <div class="row tile_count" id="resultat">
            <?php  if  (isset($result1['d8ad8d4a'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Utilisateurs</span>
              <div class="count">
                <?php 
                   $get_user = "SELECT * from user";
                   $run_user = mysqli_query($con,$get_user);
                   $count_user = mysqli_num_rows($run_user); 
                  echo $count_user;
                ?>
              </div>
            </div>
            <?php } ?>
            <?php  if  (isset($result1['4f8dc28f'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Modeles Hommes</span>
              <div class="count blue">
                <?php 
                   $get_model_h = "SELECT * FROM `model` WHERE id_cate = 1";
                   $run_model_h = mysqli_query($con,$get_model_h);
                   $count_model_h = mysqli_num_rows($run_model_h);
                   echo $count_model_h;
                ?>
              </div>
            </div>
            <?php } ?>
            <?php  if  (isset($result1['4cec2f11'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Modeles Femmes</span>
              <div class="count green">
                <?php 
                   $get_model_h = "SELECT * FROM `model` WHERE id_cate = 2";
                   $run_model_h = mysqli_query($con,$get_model_h);
                   $count_model_h = mysqli_num_rows($run_model_h);
                   echo $count_model_h;
                ?>
              </div>
            </div>
            <?php } ?>
            <?php  if  (isset($result1['32521842'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Modeles Enfants</span>
              <div class="count">
                <?php 
                   $get_model_h = "SELECT * FROM `model` WHERE id_cate = 3";
                   $run_model_h = mysqli_query($con,$get_model_h);
                   $count_model_h = mysqli_num_rows($run_model_h);
                   echo $count_model_h;
                ?>
              </div>
            </div>
            <?php } ?>
            <?php  if  (isset($result1['621d4b3a'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Commandes attentes</span>
              <div class="count">
               <?php
                 $get_commande_l = "SELECT * from commande WHERE statut = 0 "; 
                 $run_commande_l = mysqli_query($con,$get_commande_l);
                 $count_commande_l = mysqli_num_rows($run_commande_l);
                 echo $count_commande_l;
                ?> 
              </div>
            </div>
            <?php } ?>
            <?php  if  (isset($result1['78c12891'])) {?>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Commandes livrés</span>
              <div class="count">
                 <?php
                 $get_commande_encours = "SELECT * from commande WHERE statut = 1 "; 
                 $run_commande_encours = mysqli_query($con,$get_commande_encours);
                 $count_commande_encours = mysqli_num_rows($run_commande_encours);
                 echo $count_commande_encours;
                ?> 
              </div>
            </div>
            <?php } ?>
          </div>
          <?php } ?>
          <!-- /top tiles -->
          <!--
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Activités du réseau <small>Titre du sous-titre du graphique</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />    

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_content">
                  <div class="dashboard-widget-content">

                  
                  </div>
                </div>
              </div>
            </div>
           -->
           <?php  if (isset($result1['621d4b3a'])) {?>
           <div class="row">
            
       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nouvelles commandes <small>Clients</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Email du client</th>
                          <th>Nom du modele</th>
                          <th>Quantité</th>
                          <th>Taille</th>
                          <th>Date</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 

                             $get_commande = "SELECT * FROM commande INNER JOIN user ON commande.id_user = user.id_user INNER JOIN model ON commande.id_model = model.id_model WHERE commande.statut = 0 ORDER BY id_livre DESC ";
                                
                                $run_commande= mysqli_query($con,$get_commande);
          
                                while($row_commande=mysqli_fetch_array($run_commande)){
                                    
                                    $id_livre = $row_commande['id_livre'];
                                    
                                    $id_model = $row_commande['id_model'];
                                    
                                    $id_user = $row_commande['nom_user'];

                                    $prenom_user = $row_commande['prenom_user'];

                                    $nom_user = $row_commande['nom_user'];

                                    $mail_user = $row_commande['mail_user'];

                                    $nom_model = $row_commande['nom_model'];

                                    $taille = $row_commande['nom_taille']; 
                                    
                                    $couture_type = $row_commande['couture_type'];

                                    $date_create = $row_commande['date_create'];

                                    $statut = $row_commande['statut'];
                                    
                                    $qte = $row_commande['qte'];
                                
                            
                            ?>
                        <tr>
                                <td> <?php echo $mail_user; ?></td>
                                <td> <?php echo $nom_user; ?></td>
                                <td> <?php echo $prenom_user; ?></td>
                                <td> <?php echo $nom_model; ?> </td>
                                <td> <?php echo $qte; ?></td>
                                <td> <?php echo $taille; ?> </td>
                                <td> <?php echo $date_create; ?> </td>
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <?php } ?>
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
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

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



