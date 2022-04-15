<?php

$name=$_POST['name'];
$address=$_POST['address'];
$surnumber=$_POST['surnumber'];
$number=$_POST['number'];
$dbuser="root";
$dbpassword="";
$dbdatabasename="dodata";

$db =  mysqli_connect('localhost', 'root', '', 'mdcdata');





$sql ="insert into mdata values ('$number','$name','$address','$surnumber')";

// تنفيذ الإستعلام

$result= mysqli_query($db,$sql);
if($result==!true)
    echo "تم اضافة سجل البيانات بنجاح";
 
else
    echo "لم يتم اضافه   " ;
	
?>
