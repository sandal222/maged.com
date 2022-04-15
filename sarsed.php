
<?php

$name=$_POST['name'];


$dbuser="root";
$dbpassword="";
$dbdatabasename="mdcdata";

$db =  mysqli_connect("localhost", "root", "",);
if ($db->connect_error) {
    die("فشل الإتصال: " . $db >connect_error);
}



$sql="SELECT name,address,name,parice from  mdata inner join  ddata colone1=colone2  WHRE name= '$name'";
$result =  mysqli_query($db,$sql);
$list =array();
if($result)
{
	while($row=mysqli_fetch_row($result))
	{
		$list []=$row;
	}
	for($i=0;$i<sizeof($list);$i++)
	echo json_encode($list[$i]);
}




?>