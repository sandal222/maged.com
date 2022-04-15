<?php
if(isset($_POST['sharc'])){
$db =mysqli_connect('localhost','root','','mdcdata');
$number =$_POST['number'];
$sql ="select * from mdata where name ='$number'";
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
}
?>