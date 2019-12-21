<?php 
    require 'include/db.php';
    require 'include/config.php';
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
    
    <title>Administration </title>

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
                    <h2>Creer administrateur</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                     <form action="g_profil.php" method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                        <?php  if (isset($result1['367278db'])) {?>
                      <h3>Boutique</h3>
                        <div class="form-group col-sm-12">
                        <label>Nom de la boutique</label>
                        <input type="text" name="nomentre" id="nomentre" class="form-control" placeholder="Entrer le nom de la boutique">
                        </div>
                        <?php } ?> 
                        <h3>Administrateur</h3>
                <div class="form-group col-sm-6">
                   <label>Nom</label>
                   <input type="text" class="form-control" id="" name ="admin_name" placeholder="Entrer le nom de l'administrateur">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Prenom</label>
                   <input name="admin_lname" type="text" class="form-control" id="" placeholder="Entrer le prenom de l'administrateur" required>
                 </div>
                 <div class="form-group col-sm-6">
                   <label>Email</label>
                   <input name="admin_email" type="text" class="form-control" id="" required placeholder="Entre l'adresse email">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Mot de passe</label>
                   <input name="admin_pass" type="password" class="form-control" id="" required placeholder="Entrer le mot de passe">
                 </div>
                 <div class="form-group col-sm-6">
                   <label>Contact</label>
                   <input name="admin_contact" type="text" class="form-control" required id="" placeholder="Entrer le contact">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Fonction</label>
                   <input name="admin_job" type="text" class="form-control" id="" required placeholder="Entrer la fonction"> 
                 </div>
                 <div class="form-group col-sm-12">
                   <label>Image</label>
                   <input type="file" name="admin_image" id="" class="form-control" placeholder="Entrer nom du responsable">
                 </div><br> 
                 <h3>Profil</h3>
                 <div class="form-group col-sm-6">
                   <label>Titre*</label>
                   <input type="text" name="intitule" id="" class="form-control" placeholder="Entrer le titre du profil ">
                 </div>  
                 <div class="form-group col-sm-6">
                   <label>Nom du responsable*</label>
                   <input type="text" name="nomResp" id="" class="form-control" placeholder="Entrer nom du responsable">
                 </div>
                 <h3>Fonctionalité</h3> 
                 <?php  if (isset($result1['dc7161be']) || isset($result1['cd147cc7']) || isset($result1['0ed0328e']) || isset($result1['4f8dc28f']))  {?>
                 <label style="color: blue;">Modele Hommes</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['dc7161be']) || isset($result1['cd147cc7']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['dc7161be']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="1" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox1">Creer</label>
                                </div>
                                <?php } ?>

                                 <?php  if (isset($result1['cd147cc7']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="2" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="3" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox3">Supprimer</label>
                                </div>
                                <?php } ?>

                                <?php  if (isset($result1['4f8dc28f']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="4" id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox4">Voir</label>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['58b01a5b']) || isset($result1['1c0b9b0f']) || isset($result1['6baa34ce']) || isset($result1['4cec2f11']))  {?>
                    <label style="color: blue;">Modele Femmes</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['58b01a5b']) || isset($result1['1c0b9b0f']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['58b01a5b']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="5" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox5">Creer</label>
                                </div>
                                <?php } ?>
                            
                                <?php  if (isset($result1['1c0b9b0f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="6" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="7" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox7">Supprimer</label>
                                </div>
                                <?php } ?>

                                <?php  if (isset($result1['4cec2f11']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="8" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="9" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox9">Creer</label>
                                </div>
                               <?php } ?>

                                <?php  if (isset($result1['f747e892']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="10" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="11" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox11">Supprimer</label>
                                </div>
                                <?php } ?>

                                <?php  if (isset($result1['32521842']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="12" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="13" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox13">Voir</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9083f104']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="14" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="15" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox15">Valider commande</label>
                                </div>
                                <?php } ?>

                                <?php  if (isset($result1['41b89304']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="16" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="17" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox17">Voir</label>
                                </div>
                            </div>
                        </div>
                                <?php } ?>
                                <?php  if (isset($result1['1b994ea4']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="18" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="19" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox19">Voir</label>
                                </div>
                                </div>
                        </div>
                                <?php } ?>
                                 <?php  if (isset($result1['6fddb18d']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="20" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="21" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox21">Creer</label>
                                </div>
                                <?php } ?>

                                <?php  if (isset($result1['7c10c73f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="22" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="23" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox23">Supprimer</label>
                                </div>
                               <?php } ?>

                               <?php  if (isset($result1['11375e98']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="24" id="droits" type="checkbox">
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
                                <?php  if (isset($result1['7c10c73f']))  {?>
                         <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="25" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox25">Supprimer</label>
                                </div>
                                </div>
                        </div>
                                <?php } ?>
                                <?php  if (isset($result1['d8ad8d4a']))  {?>
                            <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="26" id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox26">Voir</label>
                                </div>
                            </div>
                        </div>
                                <?php } ?>
                        
                    </div>
                    <?php } ?>
                    <?php  if (isset($result1['8ab3e23d']) || isset($result1['9101612f']) || isset($result1['c07be8ea']) || isset($result1['e0470ab7']))  {?>  
                 <label style="color: blue;">Publicité</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['8ab3e23d']) || isset($result1['9101612f']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['8ab3e23d']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="27" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox27">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9101612f']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="28" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="29" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox29">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['e0470ab7']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="30" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="31" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox31">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['91741bc5']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="32" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="33" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox33">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['02978515']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="34" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="35" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox35">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['b504fb01']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="36" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="37" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox37">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['25c07ac8']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="38" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="39" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox39">Creer</label>
                                </div>
                                <?php } ?>
                               <?php  if (isset($result1['5cdbe69a']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="40" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="41" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox41">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['5941cfd1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="42" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="43" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox43">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['ba0fb393']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="44" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="45" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox45">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['6efaac09']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="46" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="47" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox47">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['0e03e5eb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="48" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="49" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox49">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['6e696de1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="50" id="droits" type="checkbox">
                                    <label class="custom-control-label" for="checkbox50">Voir</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                     <?php  if (isset($result1['fd0262a9']) || isset($result1['36caa469']) || isset($result1['cf045173']) || isset($result1['9dfcb1616e696de1']))  {?>
                    <label style="color: blue;">Photo professionnelle</label><br>
                 <div class="col-sm-12" style="position: relative;display: flex;flex-wrap: wrap;align-items: stretch;width: 100%;">
                    <?php  if (isset($result1['fd0262a9']) || isset($result1['36caa469']))  {?>
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <?php  if (isset($result1['fd0262a9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="61" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox61">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['36caa469']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="62" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="63" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox63">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['6e696de1']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="64" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="65" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox65">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['e95f51f6']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="66" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="67" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox67">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['495db1b4']))  {?>
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input" name="droits[]" value="68" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="69" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox65">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['9eaff737']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="70" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="71" id="droits" type="checkbox" >
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
                                    <input class="custom-control-input" name="droits[]" value="72" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox72">Creer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['7b4d9337']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="73" id="droits" type="checkbox">
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
                                  <input class="custom-control-input" name="droits[]" value="74" id="droits" type="checkbox" >
                                    <label class="custom-control-label" for="checkbox74">Supprimer</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['d5cfcacd']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="75" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="51" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox51">Ajouter administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['de95b43b']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="52" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox52">Modifier administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['099af53f']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="53" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox53">Supprimer administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['efcbb215']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="60" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox60">Voir administrateur</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['ab4f63f9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="54" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox54">Modifier profil</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['1cde3717']))  {?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="55" id="droits" type="checkbox">
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
                                    <input class="custom-control-input" name="droits[]" value="56" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox56">Modifier fonctionalité</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['367278db']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="58" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox58">Ajouter boutique</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12">  
                               <?php  if (isset($result1['910f64cb']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="59" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox59">Modifier boutique</label>
                                </div>
                                <?php } ?>
                                <?php  if (isset($result1['fd0262a9']))  {?>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="61" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox61">Voir commande</label>
                                </div>
                               <?php } ?>
                               <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="72" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox72">Front end</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="droits[]" value="73" id="droits" type="checkbox">
                                      <label class="custom-control-label" for="checkbox73">Voir modele</label>
                                </div>
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
                                    <input class="custom-control-input" name="droits[]" value="57" id="droits" type="checkbox" >
                                        <label class="custom-control-label" for="checkbox57">Tableau de bord</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                  </div>
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
