<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require 'include/db.php';

if ($db) 
{
	// echo "La base de donnnées es connectée";
}
else
{
	header('Location : include/db.php');
}

if (!$_SESSION['admin_name']) 
{
	header('Location : login.php');
}

?>