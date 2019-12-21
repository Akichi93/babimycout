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

          $get_couture = "SELECT * FROM couture inner join categorie ON couture.id_cate = categorie.id_cate inner join mesures on couture.id_mesure = mesures.id_mesure inner join model on couture.id_model = model.id_model inner join user on couture.id_user = user.id_user WHERE id_coutu='$edit_id'"; 
          
          $run_edit = mysqli_query($con,$get_couture);
          
          $row_edit = mysqli_fetch_array($run_edit);
          
          $id_coutu = $row_edit['id_coutu']; 

          $id_user = $row_edit['id_user'];  

          $id_cate = $row_edit['id_cate']; 

          $id_mesure = $row_edit['id_mesure']; 

          $id_model = $row_edit['id_model']; 

          $nom_model = $row_edit['nom_model'];

          $nom_user = $row_edit['nom_user']; 

          $prenom_user = $row_edit['prenom_user'];

          $image_un = $row_edit['image_un'];

          $ville = $row_edit['ville'];

          $lieu = $row_edit['lieu'];

          $commune = $row_edit['commune'];  

          $pagne = $row_edit['pagne'];  
          
          $dos = $row_edit['dos'];
          
          $epaule = $row_edit['epaule'];

          $epaule_manche = $row_edit['epaule_manche'];
          
          $poitrine = $row_edit['poitrine'];
          
          $t_taille = $row_edit['t_taille'];

          $long_taille = $row_edit['long_taille'];

          $bassin = $row_edit['bassin'];
          
          $long_manche  = $row_edit['long_manche'];

          $pince = $row_edit['pince'];
          
          $long_total = $row_edit['long_total'];
          
          $long_robe = $row_edit['long_robe'];

          $frappe = $row_edit['frappe'];

          $cuisse = $row_edit['cuisse'];

          $genou = $row_edit['genou'];

          $ceinture = $row_edit['ceinture'];

          $bas = $row_edit['bas'];

          $long_jupe = $row_edit['long_jupe'];

          $long_pantalon = $row_edit['long_pantalon'];

          $t_manche = $row_edit['t_manche'];

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

    <title>Voir details </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
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
                <h3>Voir </h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Voir details</h2>
                    <div class="clearfix"></div>
                  </div>
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

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Details de la couture</h2>
                        </div>
                      </div>
                      
                       <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    
                        <div class="col-sm-6">
                            <div class="col-sm-12">

                              <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Nom du model</label> :
                                     <?php echo $nom_model; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Nom du client</label> :
                                     <?php echo $nom_user; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Prenom du client</label> :
                                     <?php echo $prenom_user; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Ville</label> :
                                     <?php echo $ville; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Lieu</label> :
                                     <?php echo $lieu; ?>
                                     
                                       
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Commune</label> :
                                     <?php echo $commune; ?>
                                     
                                       
                                </div>

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Pagne</label> :
                                     <?php echo $pagne; ?>
                                     
                                       
                                </div>
                                
                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Dos</label> :
                                     <?php echo $dos; ?>
                                     
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label">Epaule</label> :
                                    <?php echo $epaule; ?>
                                        
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Epaule manche</label> :
                                     <?php echo $epaule_manche; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Poitrine</label> :
                                    <?php echo $poitrine; ?>
                                        
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Tour de taille</label> :
                                     <?php echo $t_taille; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Longueur de taille</label> :
                                    <?php echo $long_taille; ?>
                                        
                                </div>

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Bassin</label> :
                                     <?php echo $bassin; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Longueur de manche</label> :
                                    <?php echo $long_manche; ?>
                                        
                                </div>

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Pince</label> :
                                     <?php echo $pince; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Longueur total</label> :
                                    <?php echo $long_total; ?>
                                        
                                </div>

                                 
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12">

                              
                                
                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Longueur robe</label> :
                                     <?php echo $long_robe; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Frappe</label> :
                                    <?php echo $frappe; ?>
                                        
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Cuisse</label> :
                                     <?php echo $cuisse; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Genou</label> :
                                    <?php echo $genou; ?>
                                        
                                </div>

                                <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">ceinture</label> :
                                     <?php echo $ceinture; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Bas</label> :
                                    <?php echo $bas; ?>
                                        
                                </div>

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Longueur jupe</label> :
                                     <?php echo $long_jupe; ?>
                                       
                                </div>
                                

                                 
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkbox2">Longueur du pantalon</label> :
                                    <?php echo $long_pantalon; ?>
                                        
                                </div>

                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label">Tour de manche</label> :
                                     <?php echo $t_manche; ?>
                                       
                                </div>
                                

                                 
                            </div>
                        </div>
                      
                      

                      
                      </div>
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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>
