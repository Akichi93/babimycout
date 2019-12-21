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

    <title>Administrateur</title>

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
                <h3>Administrateurs</h3>
              </div>

              <div class="title_right">
                <div class=" form-group pull-right">
                  <?php  if (isset($result1['76ea0beb']))  {?>
                  <a href="ajouter_profil.php"  class="btn btn-primary btn-sm pull-right">Ajouter Administrateur</a>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des administrateurs </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th> Nom: </th>
                          <th> Prenom: </th>
                         <th> Image: </th>
                          <th> E-Mail: </th>
                         <th> Fonction: </th>
                          <th> Contact: </th>
                          <?php  if (isset($result1['de95b43b']) || isset($result1['099af53f']))  {?>
                         <th> Action: </th>
                         <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                           <?php 
          
                            
                                $get_admin = "SELECT * from admin";
                                
                                $run_admin = mysqli_query($con,$get_admin);
          
                                while($row_admin=mysqli_fetch_array($run_admin)){
                                    
                                    $admin_id = $row_admin['admin_id'];
                                    
                                    $admin_name = $row_admin['admin_name'];

                                    $admin_lname = $row_admin['admin_lname'];
                                    
                                    $admin_image = $row_admin['admin_image'];
                                    
                                    $admin_email = $row_admin['admin_email'];
                                    
                                    $admin_job = $row_admin['admin_job'];
                                    
                                    $admin_contact = $row_admin['admin_contact'];

                                    $status = $row_admin['status'];
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $admin_name; ?> </td>
                                <td> <?php echo $admin_lname; ?> </td>
                                <td> <img src="../production/admin_images/<?php echo $admin_image; ?>" width="60" height="60"></td>
                                <td> <?php echo $admin_email; ?> </td>
                                <td> <?php echo $admin_job; ?> </td>
                                <td> <?php echo $admin_contact ?> </td>
                                <?php  if (isset($result1['de95b43b']) || isset($result1['099af53f']))  {?>
                                <td>    
                                     <?php  if (isset($result1['de95b43b']))  {?>
                                     <a href="edit_admin.php?id=<?php echo $admin_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> 
                                    
                                     </a>
                                     <?php } ?> 
                                     <?php  if (isset($result1['099af53f']))  {?>
                                     <a href="delete_admin.php?id=<?php echo $admin_id; ?>">
                                     
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
    
    $admin_name = $_POST['admin_name'];
    $admin_lname = $_POST['admin_lname'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];
    $admin_contact = $_POST['admin_contact'];
    $admin_job = $_POST['admin_job'];
    
    $admin_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"admin_images/$admin_image");
    
    $insert_admin = "INSERT INTO admin (admin_name,admin_lname,admin_email,admin_pass,admin_image,admin_job,admin_contact) VALUES ('$admin_name','$admin_lname','$admin_email','$admin_pass','$admin_image','$admin_job','$admin_contact')";
    
    $run_admin = mysqli_query($con,$insert_admin);
    
    if($run_admin){
        
        echo "<script>alert('New User has been inserted to your admin sucessfully')</script>";
        echo "<script>window.open('administrateur.php','_self')</script>";
        
    }
    
}

?>
