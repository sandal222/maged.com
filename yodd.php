
<?php

$name=$_POST['name'];
$parice=$_POST['parice'];
$surnumber=$_POST['surnumber'];
$number=$_POST['number'];
$dbuser="root";
$dbpassword="";
$dbdatabasename="dodata";

$db =  mysqli_connect('localhost', 'root', '', 'dodata');





$sql ="insert into ddata values ('$number','$name','$parice','$surnumber')";

// تنفيذ الإستعلام

$result= mysqli_query($db,$sql);
if($result==!true)
    echo "تم اضافة سجل البيانات بنجاح";
 
else
    echo "لم يتم اضافه   " ;
	
?>
