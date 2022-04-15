 
<?php

	$number=$_POST['number'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$surnumber=$_POST['surnumber'];
$update=$_POST['update'];

$db= mysqli_connect("localhost", "root", "", "mdcdata");

   if ($db->connect_error) {
    die("فشل الإتصال: " . $mysqli_connection >connect_error);
}

	
$sql = " update mdata set   name = '$name' ,  address='$address'  WHERE   number = '$number' ";
$result=mysqli_query($db,$sql);
if ($result==!true)
	echo " <acript>'update' </acript>";


else

	echo "no";

	




?>


   



