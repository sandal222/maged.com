

<?php

$db =mysqli_connect('localhost','root','','dodata');
$number =$_POST['number'];
$sql ="select * from ddata where number ='$number'";
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
