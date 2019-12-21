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
                <h3>Blog</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter article</button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ajouter article</h4>
                        </div>
                       <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                        <div class="modal-body">
                    
                    <div class="form-group">
                      <label for="nom">Titre de l'article </label>
                      <input name="titre" type="text" class="form-control" placeholder="Entrer le titre de l'article" required>
                    </div> 

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Contenu de l'article </label> 
                       <textarea name="desc_blog" cols="12" rows="3" class="form-control"></textarea>
                       
                   </div><!-- form-group Finish --> 

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Image  de       (860*480)</label>
                      <input type="file" name="img_blog" class="form-control" required> 
                       
                   </div>

                     <div class="form-group">
                      <label for="nom">Nom de l'auteur </label>
                      <input name="nom_auteur" type="text" class="form-control" placeholder="Entrer le nom de l'auteur" required>
                    </div> 

                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Description de l'auteur </label> 
                       <textarea name="desc_auteur" cols="12" rows="3" class="form-control"></textarea>
                       
                   </div><!-- form-group Finish -->


                     <div class="form-group"><!-- form-group Begin -->
                       
                      <label> Image  de l'auteur</label>
                      <input name="img_auteur" type="file" class="form-control" required>
                       
                   </div> 
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: -12px;">Fermer</button>
                          <input type="submit" name="submit" value="Ajouter article" class="btn btn-primary">
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
                    <h2>Listes des articles <small>Postés</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Image de l'article</th>
                          <th>Contenu de l'article</th>
                          <th>Nom de l'auteur</th>
                          <th>Image de l'auteur</th>
                          <th>A propos de l'auteur</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                            
                                $get_article = "SELECT * FROM blog";
                                
                                $run_article = mysqli_query($con,$get_article);
          
                                while($row_article=mysqli_fetch_array($run_article)){
                                    
                                   $id_blog = $row_article['id_blog'];

                                   $titre = $row_article['titre'];
                        
                                   $img_blog = $row_article['img_blog'];

                                   $desc_blog = $row_article['desc_blog'];

                                   $nom_auteur = $row_article['nom_auteur'];

                                   $desc_auteur = $row_article['desc_auteur'];

                                   $img_auteur = $row_article['img_auteur'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $titre; ?> </td>
                                <td> <img src="../production/blog_images/<?php echo $img_blog ?>" width="60" height="60"></td>
                                <td> <?php echo $desc_blog; ?> </td>
                                <td> <?php echo $nom_auteur; ?> </td>
                                <td> <img src="../production/blog_images/<?php echo $img_auteur ?>" width="60" height="60"></td>
                                <td> <?php echo $desc_auteur; ?></td>
                                
                                <td>    
                                     
                                     <a href="edit_article.php?id=<?php echo $id_blog; ?>">
                                     
                                        <i class="fa fa-pencil"></i> 

                                     </a> 
                                      <a href="delete_article.php?id=<?php echo $id_blog; ?>" onclick="return confirm('Supprimer article <?php echo $titre; ?>');">
                                     
                                        <i class="fa fa-trash-o"></i> 
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


<?php 

if(isset($_POST['submit'])){

    $titre = $_POST['titre'];

    $desc_blog = $_POST['desc_blog'];

    $nom_auteur = $_POST['nom_auteur'];

    $desc_auteur = $_POST['desc_auteur'];
    
    $img_blog = $_FILES['img_blog']['name'];
    $img_auteur = $_FILES['img_auteur']['name'];

    $temp_name1 = $_FILES['img_blog']['tmp_name'];
    $temp_name2 = $_FILES['img_auteur']['tmp_name'];
    
    move_uploaded_file($temp_name1,"blog_images/$img_blog");
    move_uploaded_file($temp_name2,"blog_images/$img_auteur");

    $insert_article = "insert into blog (titre,img_blog,desc_blog,nom_auteur,desc_auteur,img_auteur) values ('$titre','$img_blog','$desc_blog','$nom_auteur','$desc_auteur','$img_auteur')";
    
    $run_article = mysqli_query($con,$insert_article);

     $_id = $_SESSION['admin_id'];
         $admin_email = $_SESSION['admin_email'];

    $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$_id', '$admin_email vient d\'ajouter un article', 'Ajout d\'article, NOW(), NOW())";
    $run_sql =  mysqli_query($con,$sql);
    

    
    if($run_sql){
            
         echo "<script>window.open('blog.php','_self')</script>";
        
    }
    
}

?>