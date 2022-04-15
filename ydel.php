

<?php

	
$number=$_POST['number'];



$mysqli_connection =  mysqli_connect("localhost", "root", "", "dodata");
if ($mysqli_connection->connect_error) {
    die("فشل الإتصال: " . $mysqli_connection >connect_error);
}




$sql = "DELETE FROM ddata WHERE number='$number'";

if ($mysqli_connection->query($sql) ===true) {
    echo "تم حذف السجل بنجاح";
}
 else if ($mysqli_connection->query($sql) ==!true){
    echo "فشل حذف السجل ". $mysqli_connection->error;
 }
?>

