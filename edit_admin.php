<?php 
    require 'include/db.php';
    session_start();
    if (!$_SESSION['admin_name']) {
      
      header('Location: login.php');
    }
?>
<?php ini_set('display_errors', 1); ?>
<?php 

    if(isset($_GET['id'])){
        
        $edit_id = $_GET['id']; 

        $get_admin = "SELECT * FROM admin WHERE admin_id ='$edit_id'"; 

        $run_admin  = mysqli_query($con,$get_admin );

        $row_admin = mysqli_fetch_array($run_admin);

        $admin_name = $row_admin['admin_name'];

        $admin_lname = $row_admin['admin_lname'];

        $admin_email = $row_admin['admin_email'];

        $admin_pass = $row_admin['admin_pass'];

        $admin_image = $row_admin['admin_image'];

        $admin_contact = $row_admin['admin_contact'];

        $admin_job = $row_admin['admin_job'];

        $entre = $row_admin['id_entre'];

        $profil = $row_admin['idprofil'];

        $get_entreprise = "SELECT * FROM entreprise WHERE id_entre ='$entre'";

        $run_entreprise  = mysqli_query($con,$get_entreprise);

        $row_entreprise = mysqli_fetch_array($run_entreprise);

        $nomentre = $row_entreprise['nomentre'];

        $select_int = "SELECT intitule, nomResp from newprofil where idprofil='$profil'";

        $run_int = mysqli_query($con,$select_int);

        $row_int = mysqli_fetch_array($run_int);

        $nomResp = $row_int['nomResp'];

        $intitule = $row_int['intitule'];


        $get_tokfonc = "SELECT tokfonc from newprofil_fonc inner join fonctionnalite on newprofil_fonc.idfonc = fonctionnalite.idfonc where idprofil='".$profil."'"; 
        $run_tokfonc  = mysqli_query($con,$get_tokfonc );
        // echo "string dtring";

       while($row_tokfonc=mysqli_fetch_array($run_tokfonc))  {

                    $tokfonc[]= $row_tokfonc['tokfonc']; 
                   // echo $tokfonc;
                   // print_r($tokfonc);
                                   }
       

      // $a="SELECT intitule, nomResp from newprofil where idprofil='$edit_id'";

       
        
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
    
    <title> Modifier Administration </title>

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
                <h3>Administrateur</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modifier administrateur</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                     <form action="" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                      <h3>Boutique</h3>
                        <div class="form-group col-sm-12">
                        <label>Nom de la boutique</label>
                        <input type="text" name="nomentre" id="nomentre" class="form-control" placeholder="Entrer le nom de la boutique" value="<?php echo $nomentre; ?>">
                        </div> 
                        <h3>Administrateur</h3>
                <div class="form-group col-sm-6">
                   <label>Nom</label>
                   <input type="text" class="form-control" id="" name ="admin_name" placeholder="Entrer le nom de l'administrateur" value="<?php echo $admin_name; ?>">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Prenom</label>
                   <input name="admin_lname" type="text" class="form-control" id="" placeholder="Entrer le prenom de l'administrateur" value="<?php echo $admin_lname; ?>">
                 </div>
                 <div class="form-group col-sm-6">
                   <label>Email</label>
                   <input name="admin_email" type="text" class="form-control" id="" placeholder="Entre l'adresse email" value="<?php echo $admin_email; ?>">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Mot de passe</label>
                   <input name="admin_pass" type="password" class="form-control" id="" laceholder="Entrer le mot de passe" disabled>
                 </div>
                 <div class="form-group col-sm-6">
                   <label>Contact</label>
                   <input name="admin_contact" type="text" class="form-control"  id="" placeholder="Entrer le contact" value="<?php echo $admin_contact; ?>">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Fonction</label>
                   <input name="admin_job" type="text" class="form-control" id="" placeholder="Entrer la fonction" value="<?php echo $admin_job; ?>"> 
                 </div>
                 <div class="form-group col-sm-12">
                   <label>Image</label>
                   <input type="file" name="admin_image" id="" class="form-control">
                   <br>
                          
                          <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_name; ?>" width="70" height="70">
                 </div><br> 
                 <h3>Profil</h3>
                 <div class="form-group col-sm-6">
                   <label>Titre*</label>
                   <input type="text" name="intitule" id="" class="form-control" placeholder="Entrer le titre du profil" value="<?php echo $intitule; ?>">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Nom du responsable*</label>
                   <input type="text" name="nomResp" id="" class="form-control" placeholder="Entrer nom du responsable" value="<?php echo $nomResp; ?>">
                 </div>
                 <h3>Fonctionalité</h3> 

                 <?php 
                $tableaux=array_reverse($tokfonc);
                $tableaux2=array_flip($tableaux);
               // print_r($result1); 
                ?>
                 <?php  if (isset($result1['dc7161be']) || isset($result1['cd147cc7']) || isset($result1['0ed0328e']) || isset($result1['4f8dc28f']))  {?>
                 <label style="color: blue;">Modele Hommes</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['dc7161be']) || isset($result1['cd147cc7']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                            <?php  if (isset($result1['dc7161be']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="1" <?=isset($tableaux2['dc7161be']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox1">Creer</label>
                                </div>
                            <?php } ?>
                            <?php  if (isset($result1['cd147cc7']))  {?>
                                
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="2" <?=isset($tableaux2['cd147cc7']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox2">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                         <?php } ?>
                        <?php  if (isset($result1['0ed0328e']) || isset($result1['4f8dc28f']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['0ed0328e']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="3" <?=isset($tableaux2['0ed0328e']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox3">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['4f8dc28f']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="4" <?=isset($tableaux2['4f8dc28f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox4">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <<?php  if (isset($result1['58b01a5b']) || isset($result1['1c0b9b0f']) || isset($result1['6baa34ce']) || isset($result1['4cec2f11']))  {?>
                    <label style="color: blue;">Modele Femmes</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                     <?php  if (isset($result1['58b01a5b']) || isset($result1['1c0b9b0f']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                 <?php  if (isset($result1['58b01a5b']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="5" <?=isset($tableaux2['58b01a5b']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox5">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['1c0b9b0f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="6" <?=isset($tableaux2['1c0b9b0f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox6">Modifier</label>
                                </div>
                                 <?php } ?>
                            </div>
                        </div>
                         <?php } ?>
                        <?php  if (isset($result1['6baa34ce']) || isset($result1['4cec2f11']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['6baa34ce']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="7" <?=isset($tableaux2['6baa34ce']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox7">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['4cec2f11']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="8" <?=isset($tableaux2['4cec2f11']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox8">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['2ae2a652']) || isset($result1['f747e892']) || isset($result1['8e425576']) || isset($result1['32521842']))  {?>
                    <label style="color: blue;">Modele Enfants</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['2ae2a652']) || isset($result1['f747e892']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                 <?php  if (isset($result1['2ae2a652']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="9" <?=isset($tableaux2['2ae2a652']) ?'checked="checked"' : '' ?>id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox9">Creer</label>
                                </div>
                            <?php } ?>
                                <?php  if (isset($result1['f747e892']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="10" <?=isset($tableaux2['f747e892']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox10">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['8e425576']) || isset($result1['32521842']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['8e425576']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="11" <?=isset($tableaux2['8e425576']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox11">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['32521842']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="12" <?=isset($tableaux2['32521842']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox12">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                     <?php } ?>
                    <?php  if (isset($result1['621d4b3a']) || isset($result1['9083f104']) || isset($result1['ce1dd168']) || isset($result1['41b89304']))  {?>
                 <label style="color: blue;">Commande en attentes</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['621d4b3a']) || isset($result1['9083f104']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                 <?php  if (isset($result1['621d4b3a']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="13" <?=isset($tableaux2['621d4b3a']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox13">Voir</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9083f104']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="14" <?=isset($tableaux2['9083f104']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox14">Supprimer</label>
                                </div>
                                <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php  if (isset($result1['ce1dd168']) || isset($result1['41b89304']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['ce1dd168']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="15" <?=isset($tableaux2['ce1dd168']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox15">Valider commande</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['41b89304']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="16" <?=isset($tableaux2['41b89304']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox16">Annuler commande</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['78c12891']) || isset($result1['1b994ea4']))  {?>
                     <label style="color: blue;">Commande livrés</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['78c12891']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="17" <?=isset($tableaux2['78c12891']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox17">Voir</label>
                                </div>
                            </div>
                        </div>
                         <?php } ?>
                                <?php  if (isset($result1['1b994ea4']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="18" <?=isset($tableaux2['1b994ea4']) ?'checked="checked"' : '' ?>  id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox18">Supprimer</label>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['4db75fb9']) || isset($result1['6fddb18d']))  {?>
                     <label style="color: blue;">Commande annulés</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['4db75fb9']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="19" <?=isset($tableaux2['4db75fb9']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox19">Voir</label>
                                </div>
                                </div>
                        </div>
                        <?php } ?>
                                 <?php  if (isset($result1['6fddb18d']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="20" <?=isset($tableaux2['6fddb18d']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox20">Supprimer</label>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                      <?php } ?>   
                      <?php  if (isset($result1['f51f55a3']) || isset($result1['7c10c73f']) || isset($result1['9a9fece8']) || isset($result1['11375e98']))  {?>    
                        
                 <label style="color: blue;">Slide</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['f51f55a3']) || isset($result1['7c10c73f']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['f51f55a3']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="21" <?=isset($tableaux2['f51f55a3']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox21">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['7c10c73f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="22" <?=isset($tableaux2['7c10c73f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox22">Modifier</label>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <?php } ?> 
                        <?php  if (isset($result1['9a9fece8']) || isset($result1['11375e98']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['9a9fece8']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="23" <?=isset($tableaux2['9a9fece8']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox23">Supprimer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['11375e98']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="24" <?=isset($tableaux2['11375e98']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox24">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?> 
                    <?php  if (isset($result1['7c10c73f']) || isset($result1['d8ad8d4a']))  {?>
                    <label style="color: blue;">Utilisateur</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['7c10c73f']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="25" <?=isset($tableaux2['7c10c73f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox25">Supprimer</label>
                                </div>
                                <?php } ?>
                                </div>
                        </div>
                        <?php } ?>
                                <?php  if (isset($result1['d8ad8d4a']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['d8ad8d4a']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="26" <?=isset($tableaux2['d8ad8d4a']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox26">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    ?php } ?>
                    <?php  if (isset($result1['8ab3e23d']) || isset($result1['9101612f']) || isset($result1['c07be8ea']) || isset($result1['e0470ab7']))  {?>
                 <label style="color: blue;">Publicité</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['8ab3e23d']) || isset($result1['9101612f']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['8ab3e23d']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="27" <?=isset($tableaux2['8ab3e23d']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox27">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9101612f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="28" <?=isset($tableaux2['9101612f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox28">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['c07be8ea']) || isset($result1['e0470ab7']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['c07be8ea']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="29" <?=isset($tableaux2['c07be8ea']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox29">Supprimer</label>
                                </div>
                                <?php } ?>
                                 <?php  if (isset($result1['e0470ab7']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="30" <?=isset($tableaux2['e0470ab7']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox30">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                     <?php } ?>
                    <?php  if (isset($result1['aa980022']) || isset($result1['91741bc5']) || isset($result1['cd39aef3']) || isset($result1['02978515']))  {?>
                    <label style="color: blue;">Dessiner modele</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['aa980022']) || isset($result1['91741bc5']))  {?>
                  <div class="col-sm-6">                            
                    <div class="col-sm-12">
                               <?php  if (isset($result1['aa980022']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="31" <?=isset($tableaux2['aa980022']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox31">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['91741bc5']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="32" <?=isset($tableaux2['91741bc5']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox32">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                         <?php } ?>
                        <?php  if (isset($result1['cd39aef3']) || isset($result1['02978515']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['cd39aef3']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="33" <?=isset($tableaux2['cd39aef3']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox33">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['02978515']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="34" <?=isset($tableaux2['02978515']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox34">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                         <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['ab3e84e0']) || isset($result1['b504fb01']) || isset($result1['ee1b6ca9']) || isset($result1['25c07ac8']))  {?>
                 <label style="color: blue;">Blog</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                     <?php  if (isset($result1['ab3e84e0']) || isset($result1['b504fb01']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['ab3e84e0']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="35" <?=isset($tableaux2['ab3e84e0']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox35">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['b504fb01']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="36" <?=isset($tableaux2['b504fb01']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox36">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                         <?php } ?>
                        <?php  if (isset($result1['ee1b6ca9']) || isset($result1['25c07ac8']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['ee1b6ca9']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="37" <?=isset($tableaux2['ee1b6ca9']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox37">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['25c07ac8']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="38" <?=isset($tableaux2['25c07ac8']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox38">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['09014b60']) || isset($result1['5cdbe69a']) || isset($result1['a168c326']) || isset($result1['5941cfd1']))  {?>
                 <label style="color: blue;">Partenaire</label><br>
                <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                     <?php  if (isset($result1['09014b60']) || isset($result1['5cdbe69a']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                              <?php  if (isset($result1['09014b60']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="39" <?=isset($tableaux2['09014b60']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox39">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['5cdbe69a']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="40" <?=isset($tableaux2['5cdbe69a']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox40">Modifier</label>
                                </div>
                               <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['a168c326']) || isset($result1['5941cfd1']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                 <?php  if (isset($result1['a168c326']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="41" <?=isset($tableaux2['a168c326']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox41">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['5941cfd1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="42" <?=isset($tableaux2['5941cfd1']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox42">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                     <?php  if (isset($result1['68811608']) || isset($result1['ba0fb393']) || isset($result1['e5dd7d16']) || isset($result1['6efaac09']))  {?>
                 <label style="color: blue;">Equipe</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['68811608']) || isset($result1['ba0fb393']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['68811608']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="43"  <?=isset($tableaux2['68811608']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox43">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['ba0fb393']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="44"  <?=isset($tableaux2['ba0fb393']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox44">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['e5dd7d16']) || isset($result1['6efaac09']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['e5dd7d16']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="45"  <?=isset($tableaux2['e5dd7d16']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox45">Supprimer</label>
                                </div>
                                <?php } ?>
                                 <?php  if (isset($result1['6efaac09']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="46"  <?=isset($tableaux2['6efaac09']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox46">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                     <?php } ?>
                    <?php  if (isset($result1['aacca4cb']) || isset($result1['0e03e5eb']) || isset($result1['c433ca7a']) || isset($result1['6e696de1']))  {?>
                    <label style="color: blue;">Evenement</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                     <?php  if (isset($result1['aacca4cb']) || isset($result1['0e03e5eb']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['aacca4cb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="47" <?=isset($tableaux2['aacca4cb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox47">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['0e03e5eb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="48" <?=isset($tableaux2['0e03e5eb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox48">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                          <?php } ?>
                        <?php  if (isset($result1['c433ca7a']) || isset($result1['6e696de1']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['c433ca7a']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="49" <?=isset($tableaux2['c433ca7a']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox49">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['6e696de1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="50" <?=isset($tableaux2['6e696de1']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox50">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                    <?php  if (isset($result1['fd0262a9']) || isset($result1['36caa469']) || isset($result1['cf045173']) || isset($result1['9dfcb1616e696de1']))  {?>
                    <label style="color: blue;">Photo professionnelle</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['fd0262a9']) || isset($result1['36caa469']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['fd0262a9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="61" <?=isset($tableaux2['fd0262a9']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox61">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['36caa469']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="62" <?=isset($tableaux2['36caa469']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox62">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['cf045173']) || isset($result1['6e696de1']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['cf045173']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="63" <?=isset($tableaux2['cf045173']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox63">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['6e696de1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="64" <?=isset($tableaux2['6e696de1']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox64">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['f0aa5df4']) || isset($result1['e95f51f6']) || isset($result1['89cb8078']) || isset($result1['495db1b4']))  {?>
                    <label style="color: blue;">Prestation de services</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['f0aa5df4']) || isset($result1['e95f51f6']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['f0aa5df4']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="65" <?=isset($tableaux2['f0aa5df4']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox65">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['e95f51f6']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="66" <?=isset($tableaux2['e95f51f6']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox66">Modifier</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['89cb8078']) || isset($result1['495db1b4']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['89cb8078']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="67" <?=isset($tableaux2['89cb8078']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox67">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['495db1b4']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="68" <?=isset($tableaux2['495db1b4']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox68">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['129ff971']) || isset($result1['9eaff737']) || isset($result1['602917eb']))  {?> 
                    <label style="color: blue;">Coudre</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['129ff971']) || isset($result1['9eaff737']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['129ff971']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="69" <?=isset($tableaux2['129ff971']) ?'checked="checked"' : '' ?>  id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox65">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9eaff737']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="70" <?=isset($tableaux2['9eaff737']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox66">Details</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['602917eb']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['602917eb']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="71" <?=isset($tableaux2['602917eb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox67">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                     <?php  if (isset($result1['9da60bf3']) || isset($result1['7b4d9337']) || isset($result1['62c147eb']) || isset($result1['d5cfcacd']))  {?>
                    <label style="color: blue;">Code promo</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['9da60bf3']) || isset($result1['7b4d9337']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['9da60bf3']))  {?> 
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="72" <?=isset($tableaux2['9da60bf3']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox72">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['7b4d9337']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="73" <?=isset($tableaux2['7b4d9337']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox73">Reactiver</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php  if (isset($result1['62c147eb']) || isset($result1['d5cfcacd']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['62c147eb']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="74" <?=isset($tableaux2['62c147eb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox74">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['d5cfcacd']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="75" <?=isset($tableaux2['d5cfcacd']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                        <label class="custom-control-label" for="checkbox73">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['76ea0beb']) || isset($result1['de95b43b']) || isset($result1['099af53f']) || isset($result1['efcbb215']) || isset($result1['ab4f63f9']) || isset($result1['1cde3717']) || isset($result1['f5085522']) || isset($result1['367278db']) || isset($result1['910f64cb']) || isset($result1['fd0262a9']))  {?>
                 <label style="color: blue;">Parametre</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['76ea0beb']) || isset($result1['de95b43b']) || isset($result1['099af53f']) || isset($result1['efcbb215']) || isset($result1['ab4f63f9']) || isset($result1['1cde3717']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                               <?php  if (isset($result1['76ea0beb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="51" <?=isset($tableaux2['76ea0beb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox51">Ajouter administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['de95b43b']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="52" <?=isset($tableaux2['de95b43b']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox52">Modifier administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['099af53f']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="53" <?=isset($tableaux2['099af53f']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox53">Supprimer administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['efcbb215']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="60" <?=isset($tableaux2['efcbb215']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox60">Voir administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['ab4f63f9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="54" <?=isset($tableaux2['ab4f63f9']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox54">Modifier profil</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['1cde3717']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="55" <?=isset($tableaux2['1cde3717']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox55">Audit</label>
                                </div>
                                <?php } ?>
                              </div>
                          </div>
                          <?php } ?>
                          <?php  if (isset($result1['f5085522']) || isset($result1['367278db']) || isset($result1['910f64cb']) || isset($result1['fd0262a9']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">  
                               <?php  if (isset($result1['f5085522']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="56" <?=isset($tableaux2['f5085522']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox56">Modifier fonctionalité</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['367278db']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="58" <?=isset($tableaux2['367278db']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox58">Ajouter boutique</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12">  
                               <?php  if (isset($result1['910f64cb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="59" <?=isset($tableaux2['910f64cb']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox59">Modifier boutique</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['fd0262a9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="61" <?=isset($tableaux2['fd0262a9']) ?'checked="checked"' : '' ?> id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox61">Voir commande</label>
                                </div>
                               <?php } ?>
                            </div>
                        </div>
                     </div>
                     <?php } ?>
                    </div>
                    <?php } ?>

                    <?php  if (isset($result1['dc7161be']))  {?>
                  <label style="color: blue;">Tableau de bord</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['dc7161be']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="56"  <?=isset($tableaux2['dc7161be']) ?'checked="checked"' : '' ?> id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox56">Tableau de bord</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                  </div> 
                  <?php } ?>
                  <?php } ?>             
                      <div class="ln_solid"></div>
                      <div class="pull-right">
                       <input type="submit" name="annuler" class="btn btn-danger" value="Annuler">
                       <input class="btn btn-primary" name="submit" type="submit" value="Ajouter">
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

            $sql = "UPDATE newprofil set intitule='$intitule', nomResp='$nomResp' WHERE idprofil= '$profil'";
            $run_sql =  mysqli_query($con,$sql);
            
            $sql1 = "DELETE FROM newprofil_fonc WHERE idprofil='$profil'";
            $run_sql1 =  mysqli_query($con,$sql);
             
             $checkbox = $_POST['droits'];
             for($i=0;$i<count($checkbox);$i++){
              $droits_id = $checkbox[$i];
              $run_new_profil = mysqli_query($con,"INSERT into newprofil_fonc (idprofil,idfonc) values ('$profil','".$droits_id."')") or die(mysqli_error($con));
         }

      if ($run_new_profil) {
          echo "<script>alert('Administrateur modifier avec succes')</script>";
       echo "<script>window.open('administrateur.php','_self')</script>";
      }
}
?>

