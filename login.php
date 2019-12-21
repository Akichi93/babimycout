
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body style="background-color: #ffffff;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
  
				<form method="POST" class="login100-form validate-form" action="" enctype="">
			              <?php 

                           session_start();
                           require 'include/db.php';

                           if(isset($_POST['admin_login'])){
        
                              $admin_email = $_POST['admin_email'];
        
                              $admin_pass = $_POST['admin_pass'];

                              $get_admin = "SELECT * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";

                              $run_admin = mysqli_query($con,$get_admin);
          

                                 if (mysqli_num_rows($run_admin)) {

                                     while($row_admin=mysqli_fetch_array($run_admin)){
                                    
                                               $admin_id = $row_admin['admin_id'];
                                    
                                               $admin_name = $row_admin['admin_name'];

                                               $admin_lname = $row_admin['admin_lname'];
                                    
                                               $admin_image = $row_admin['admin_image'];
                                    
                                               $admin_email = $row_admin['admin_email'];
                                    
                                               $admin_job = $row_admin['admin_job'];
                                    
                                               $admin_contact = $row_admin['admin_contact'];

                                               $profil = $row_admin['idprofil'];

                                               $entre = $row_admin['id_entre'];

                                    }
                                       $_SESSION['admin_id'] = $admin_id;
                                       $_SESSION['admin_name'] = $admin_name;
                                       $_SESSION['admin_image'] = $admin_image;
                                       $_SESSION['admin_email'] = $admin_email;           
                                       $_SESSION['idprofil'] = $profil;
                                       $_SESSION['id_entre'] = $entre;
    
            $select_intitule = "SELECT intitule from newprofil where idprofil='$profil'";
            $run_select_intitule = mysqli_query($con,$select_intitule);

            //echo "intitule";

            $get_tokfonc = "SELECT tokfonc from newprofil_fonc inner join fonctionnalite on newprofil_fonc.idfonc = fonctionnalite.idfonc where idprofil='$profil'";
            $run_get_tokfon = mysqli_query($con,$get_tokfonc) ;

            //echo "token";

            while($row_tok=mysqli_fetch_array($run_get_tokfon)){
//print_r($row_tok['tokfonc']);
           // print_r(array($row_tok['tokfonc']));
                    $_SESSION['droits'][] = $row_tok['tokfonc'];

                }

            //for($i=0;$i<count($arrayName);$i++){
            //echo ['droits'];
        //}
            $sql = "INSERT INTO log (admin_id, action, type, date_create, date_update) VALUES ('$admin_id ', '$admin_email vient de se connecter', 'Authentification', NOW(), NOW())";
            $run_sql =  mysqli_query($con,$sql);
            

            //header('Location: index.php');
            echo "<script>window.open('index.php','_self')</script>";

} else {
    echo '<div style="background-color: #dc3545!important; border-color: #dc3545!important; color: white;" class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span style="color: white" aria-hidden="true">×</span>
                    </button>
                    <strong>Erreur!</strong> Adresse email ou mot de passe incorrect.
                  </div></h2>';
}
    }

?>
					<span class="login100-form-title p-b-43">
						Se connecter
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="admin_email" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="admin_pass" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Mot de passe</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Se souvenir de moi
							</label>
						</div>

						<div>
							<a href="#add_data_Modal" class="txt1" id="" data-toggle="modal fade">
								Mot de passe oublié?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="admin_login">
							Se connecter
						</button>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

	<div id="add_data_Modal" class="modal">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Details</h4>  
                </div>  

                  <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                  
                   
                  
                  

                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                          <input type="hidden" name="">
                          <input type="submit" name="submit" value="Ajouter" class="btn btn-primary"/>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
                
	<script src="vendors/jquery/dist/jquery.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

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

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

</body>
</html>

