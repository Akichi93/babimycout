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
                <h3>Evenements</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if (isset($result1['aacca4cb']))  {?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter evenement</button>
                  <?php } ?>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter evenement</h4>
                        </div>
                        <form method="post" id="insert_form" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="form-group col-md-6">
                      <label for="nom">Titre de l'evenement </label>
                      <input type="text" class="form-control" name ="titre_even" placeholder="Entrez le titre de l'evenement" required>
                    </div> 
                     <div class="form-group col-md-6"><!-- form-group Begin -->
                      <label>Categorie de l'evenement</label>
                      <select class="form-control" name="categorie">
                        <option>Selectionner l'evenement</option>
                        <option value="anniversaire">Anniversaire</option>
                        <option value="bapteme">Bapteme</option>
                        <option value="conference">Conference</option>
                        <option value="mariage">Mariage</option>
                        <option value="reunion">Reunion</option>
                        <option value="seminaire">Seminaire</option>
                      </select>  
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                      <label>Description de l'evenement </label> 
                      <textarea name="desc_even" cols="19" rows="3" class="form-control" required></textarea> 
                   </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->  
                      <label >Image de l'evenement </label> (580*420)
                     <input name="image_even" type="file" class="form-control" required>                    
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6 ">
                      <label>Date de début </label> 
                      <input name="date_debut" type="date" class="form-control" required>  
                   </div>

                    <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label >Date de fin </label> 
                      <input name="date_fin" type="date" class="form-control" required>      
                   </div><!-- form-group Finish -->

                   <div class="form-group col-md-6"><!-- form-group Begin -->
                      <label>Coût de l'evenement</label> 
                      <input name="cout" type="text" class="form-control" required placeholder="cout de l'evenement"> 
                   </div><!-- form-group Finish -->
                   
                    <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label >Nom du lieu</label> 
                      <input name="nom_lieu" type="text" class="form-control" required placeholder="Entrez le nom du lieu">  
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin --> 
                      <label> Adresse du lieu </label> 
                      <input name="adresse_lieu" type="text" class="form-control" required placeholder="Entrez l'adresse du lieu"> 
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin -->  
                    <label > Telephone du lieu </label>      
                    <input name="tel_lieu" type="tel" class="form-control" required placeholder="Entrez le numero">  
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin -->  
                    <label > Nom de l'organisateur </label>      
                    <input name="nom_organ" type="text" class="form-control" required placeholder="Entrez le nom de l'organisateur">  
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin -->  
                    <label > Telephone de l'organisateur </label>      
                    <input name="tel_organ" type="tel" class="form-control" required placeholder="telephone de l'organisateur">  
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin -->  
                    <label > Email </label>      
                    <input name="email" type="email" class="form-control" required placeholder="email">  
                   </div><!-- form-group Finish -->
                   <div class="form-group col-md-6"><!-- form-group Begin -->  
                    <label > Site web</label>      
                    <input name="site_web" type="text" class="form-control" required placeholder=" site web">  
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
                    <h2>Liste des evenements </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Image</th>
                          <th>Date de debut</th>
                          <th>Date de fin</th>
                          <th>Cout</th>
                          <th>Categorie</th>
                          <th>Nom du lieu</th>
                          <th>Adressse du lieu</th>
                          <th>Telephone du lieu</th>
                          <?php  if (isset($result1['0e03e5eb']) || isset($result1['c433ca7a']))  {?>
                          <th>Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                         <?php 
                          
                                $get_event = "SELECT * FROM evenement INNER JOIN detail_even ON evenement.id_detail = detail_even.id_detail INNER JOIN lieu_even ON evenement.id_lieu = lieu_even.id_lieu INNER JOIN organisateur ON evenement.id_organ = organisateur.id_organ";

                                $run_event= mysqli_query($con,$get_event);
          
                                while($row_event=mysqli_fetch_array($run_event)){
                                    
                                    $id_even = $row_event['id_even']; 
                                    
                                    $titre_even = $row_event['titre_even'];

                                    $desc_even = $row_event['desc_even'];
                                    
                                    $image_even = $row_event['image_even'];
                                    
                                    $date_debut = $row_event['date_debut'];

                                    $date_fin = $row_event['date_fin'];

                                    $cout = $row_event['cout'];

                                    $categorie = $row_event['categorie'];
                                    
                                    $nom_lieu = $row_event['nom_lieu'];

                                    $adresse_lieu = $row_event['adresse_lieu'];

                                    $tel_lieu = $row_event['tel_lieu'];

                                    $nom_organ = $row_event['nom_organ'];

                                    $tel_organ = $row_event['tel_organ'];

                                    $email = $row_event['email'];

                                    $site_web = $row_event['site_web'];

                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $titre_even; ?> </td>
                                <td> <img src="../production/image_even/<?php echo $image_even; ?>" width="60" height="60"></td>
                                <td> <?php echo $date_debut; ?> </td>
                                <td> <?php echo $date_fin; ?> </td>
                                <td> <?php echo $cout; ?> </td>
                                <td> <?php echo $categorie ?> </td>
                                <td> <?php echo $nom_lieu ?> </td>
                                <td> <?php echo $adresse_lieu ?> </td>
                                <td> <?php echo $tel_lieu ?></td>
                                <?php  if (isset($result1['0e03e5eb']) || isset($result1['c433ca7a']))  {?>
                                <td>    
                                     <?php  if (isset($result1['0e03e5eb']))  {?>
                                     <a href="edit_even.php?id=<?php echo $id_even; ?>">
                                     
                                        <i class="fa fa-pencil"></i> 
                                    
                                     </a>
                                     <?php } ?> 
                                     <?php  if (isset($result1['c433ca7a']))  {?>
                                     <a href="delete_even.php?id=<?php echo $id_even; ?>" onclick="return confirm('Supprimer evenement' <?php echo $titre_even; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
                                    
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
    
    $titre_even = $_POST['titre_even'];
    $desc_even = $_POST['desc_even']; 
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $cout = $_POST['cout'];
    $categorie = $_POST['categorie'];
    $nom_lieu = $_POST['nom_lieu'];
    $adresse_lieu = $_POST['adresse_lieu'];
    $nom_lieu = $_POST['nom_lieu'];
    $tel_lieu = $_POST['tel_lieu'];
    $nom_organ = $_POST['nom_organ'];
    $tel_organ = $_POST['tel_organ'];
    $email = $_POST['email'];
    $site_web = $_POST['site_web'];  
    
    
    $image_even = $_FILES['image_even']['name'];
    $temp_image_even = $_FILES['image_even']['tmp_name'];
    
    move_uploaded_file($temp_image_even,"image_even/$image_even");

    $insert_detail = "INSERT INTO detail_even (date_debut,date_fin,cout,categorie,date_create) values ('$date_debut','$date_fin','$cout','$categorie',NOW())";
    $run_detail = mysqli_query($con,$insert_detail);

    $insert_lieu= "INSERT INTO lieu_even (nom_lieu,adresse_lieu,tel_lieu,date_create) values ('$nom_lieu','$adresse_lieu','$tel_lieu',NOW())";
    $run_lieu = mysqli_query($con,$insert_lieu);

    $insert_organ = "INSERT INTO organisateur (nom_organ,tel_organ,email,site_web,date_create) values ('$nom_organ','$tel_organ','$email','$site_web',NOW())";
    $run_organ = mysqli_query($con,$insert_organ);

    $select_detail = "SELECT id_detail FROM detail_even ORDER BY id_detail DESC LIMIT 1";
    $select_organ = "SELECT id_organ FROM organisateur ORDER BY id_organ DESC LIMIT 1";
    $select_lieu = "SELECT id_lieu FROM lieu_even ORDER BY id_lieu DESC LIMIT 1";


    $run_select_detail = mysqli_query($con,$select_detail) or die('Erreur SQL !'.$select_detail.'<br>'.mysql_error($con));
    $row_detail = mysqli_fetch_array($run_select_detail);
    $detail = $row_detail['id_detail'];

    $run_select_lieu = mysqli_query($con,$select_lieu) or die('Erreur SQL !'.$select_lieu.'<br>'.mysql_error($con));
    $row__lieu = mysqli_fetch_array($run_select_lieu);
    $lieu = $row__lieu['id_lieu'];

    $run_select_organ = mysqli_query($con,$select_organ) or die(mysqli_error($con));
    $row_organ = mysqli_fetch_array($run_select_organ);
    $organ = $row_organ['id_organ'];

    $insert_event= "INSERT INTO  evenement (titre_even,desc_even,image_even,id_detail,id_lieu,id_organ,date_create) values ('$titre_even','$desc_even','$image_even','$detail','$lieu','$organ',NOW())"; 
    
   $run_event = mysqli_query($con,$insert_event);

   //$_id = $_SESSION['admin_id'];
     //    $admin_email = $_SESSION['admin_email'];

       // $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un evenement', 'Ajout d\'evenement, NOW(), NOW())";
      //  $run_sql =  mysqli_query($con,$sql);
    
   if($run_event){
        echo "<script>window.open('evenement.php','_self')</script>";
        
    }
    
}

?>

