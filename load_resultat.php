<?php require 'include/db.php'; ?>
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
          