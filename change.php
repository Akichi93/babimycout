<?php

require 'include/db.php';
$query =mysql_query($con, "UPDATE admin set status  = '".$_POST['val']."' WHERE admin_id= '".$_POST['admin_id']."'");

if ($query) {
	$q=mysql_query($con, "SELECT * from admin where admin_id ='".$_POST['admin_id']."'");

	$data=mysql_fetch_assoc($query);
	echo $data['status'];
}

?>