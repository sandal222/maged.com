<?php



$db = mysqli_connect('localhost', 'root', '','login');
if ($db->connect_error) {
    die("فشل الإتصال: " . $db >connect_error);
}



$sql="select *from  log  WHRE $username=$_GET['username'] password=$_GET['password']";
$result =  mysqli_query($db,$sql);



if($result==!$true)
{
	echo  "تم التسجيل الدخول";
	require 'sadel.php';
		}
?>