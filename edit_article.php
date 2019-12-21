<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?>

<?php 

    if(isset($_GET['id'])){
        
        $edit_article_id= $_GET['id'];
        
        $edit_article= "SELECT * from blog where id_blog='$edit_article_id'";
        
        $run_edit_article= mysqli_query($con,$edit_article);
        
        $row_edit_article = mysqli_fetch_array($run_edit_article);
        
        $id_blog  = $row_edit_article['id_blog']; 
        
        $titre = $row_edit_article['titre'];
        
        $img_blog  = $row_edit_article['img_blog'];

        $desc_blog  = $row_edit_article['desc_blog'];

        $nom_auteur  = $row_edit_article['nom_auteur'];

        $desc_auteur  = $row_edit_article['desc_auteur'];

        $img_auteur  = $row_edit_article['img_auteur'];

        $id_com  = $row_edit_article['id_com'];
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
    
    <title>Modifier modele </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
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
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier article</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                  <input type="text" name="idmodel" value="<?php echo "$id_model"; ?>" hidden="hidden" >
                  <input type="text" name="pages" value="<?php echo "$page"; ?>" hidden="hidden" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Titre de l'article
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input name="titre" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $titre; ?>"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Contenu de l'article</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="desc_blog" cols="19" rows="6" class="form-control"><?php echo $desc_blog; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image de l'article
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="img_blog" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="blog_images/<?php echo $img_blog?>" class="img-responsive">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom de l'auteur
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="nom_auteur" type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nom_auteur; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description de l'auteur </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="desc_blog" cols="19" rows="6" class="form-control" ><?php echo $desc_auteur; ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image de l'auteur 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="img_auteur" class="form-control col-md-7 col-xs-12">

                            <br/>

                            <img width="70" height="70" src="blog_images/<?php echo $img_auteur?>" class="img-responsive">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input name="update" value="Mise a jour de l'article" type="submit" class="btn btn-primary form-control">
                        </div>
                      </div>

                    </form>
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
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  
  </body>
</html>


<?php  

    if(isset($_POST['update'])){

        $id_com = $_POST['id_com'];
        
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

        if (empty($img_auteur OR $img_blog)) 
        {
          $update_article = "update blog set titre='$titre',desc_blog='$desc_blog',nom_auteur='$nom_auteur',desc_auteur='$desc_auteur',id_com='$id_com' where id_blog='$id_blog'";
        }
        else
        {
          $update_article = "update blog set titre='$titre',img_blog='$img_blog',desc_blog='$desc_blog',nom_auteur='$nom_auteur',desc_auteur='$desc_auteur',img_auteur='$img_auteur',id_com='$id_com' where id_blog='$id_blog'";
        }  
        $run_update_article = mysqli_query($con,$update_article); 
        
        if($run_update_article)
        {
        
            echo "<script>window.open('blog.php','_self')</script>";
            
        }
        
    }

?>