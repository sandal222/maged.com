<?php

	$number=$_POST['number'];
	$name=$_POST['name'];
	$parice=$_POST['parice'];
	$surnumber=$_POST['surnumber'];
$update=$_POST['update'];

$db= mysqli_connect("localhost", "root", "", "dodata");

   if ($db->connect_error) {
    die("فشل الإتصال: " . $mysqli_connection >connect_error);
}

	
$sql = " update ddata set   name = '$name' ,  parice='$parice'  WHERE   number = '$number' ";
$result=mysqli_query($db,$sql);
if ($result==!true)
	echo " <acript>'update' </acript>";


else

	echo "no";

	
  



?>