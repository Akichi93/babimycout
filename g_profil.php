<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?>

<?php

    if(isset($_POST['submit'])){
    
    $admin_name = $_POST['admin_name'];
    $admin_lname = $_POST['admin_lname'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];
    $admin_contact = $_POST['admin_contact'];
    $admin_job = $_POST['admin_job'];
    $intitule= $_POST['intitule'];
    $nomResp= $_POST['nomResp'];
    $nomentre= $_POST['nomentre'];
    $status = "1";
    
    $admin_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

    $insert_entreprise = "INSERT INTO entreprise (nomentre) VALUES ('$nomentre')";
    $run_entreprise = mysqli_query($con,$insert_entreprise);

    $select_entreprise = "SELECT * FROM entreprise  ORDER BY id_entre DESC LIMIT 1";
    $run_select_entreprise = mysqli_query($con,$select_entreprise) or die('Erreur SQL !'.$select_entreprise.'<br>'.mysql_error($con));
    $row_entreprise = mysqli_fetch_array($run_select_entreprise);
    $entre = $row_entreprise['id_entre'];

    $insert_profil = "INSERT INTO newprofil (intitule, nomResp, status, id_entre) VALUES ('$intitule','$nomResp','1','$entre')";
    $run_profil = mysqli_query($con,$insert_profil);

    $select_profil = "SELECT * FROM newprofil ORDER BY idprofil DESC LIMIT 1";
    $run_select_profil = mysqli_query($con,$select_profil) or die('Erreur SQL !'.$select_profil.'<br>'.mysql_error($con));
    $row_profil = mysqli_fetch_array($run_select_profil);
    $profil = $row_profil['idprofil'];

        $checkbox = $_POST['droits'];         
        for($i=0;$i<count($checkbox);$i++){
        $droits_id = $checkbox[$i];
        $run_new_profil = mysqli_query($con,"INSERT into newprofil_fonc (idprofil,idfonc) values ('$profil','".$droits_id."')") or die(mysqli_error($con));
            //echo "Data added success fully!";
       }

    
    $insert_admin = "INSERT INTO admin (admin_name,admin_lname,admin_email,admin_pass,idprofil,id_entre,admin_image,admin_job,admin_contact,date_create) VALUES ('$admin_name','$admin_lname','$admin_email','$admin_pass','$profil','$entre','$admin_image','$admin_job','$admin_contact',NOW())";
    $run_admin = mysqli_query($con,$insert_admin);

     if ($run_admin) {
        echo "<script>alert('New admin has been inserted sucessfully')</script>";
       echo "<script>window.open('administrateur.php','_self')</script>";
     }
 }

?>



 