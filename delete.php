<?php

include 'connect.php';
if(isset($_POST['deletesend']))
{
	$unique=$_POST['deletsend'];
	$d="DELETE FROM `operation1` where id= $unique";
	$resu=mysqli_query($con,$d);
}

?>