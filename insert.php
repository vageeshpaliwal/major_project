<?php

include 'connect.php';

 extract($_POST);
 if(isset($_POST['namesend']) && isset($_POST['emailsend']) && isset($_POST['passwordsend']) && isset($_POST['contactsend']))
 {
 	$sql="INSERT INTO `operation1`(name,email,password,contact)VALUES('$namesend','$emailsend','$passwordsend','$contactsend')";
 	$result=mysqli_query($con,$sql);

 }

?>