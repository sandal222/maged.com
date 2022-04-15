

<?php

	
$number=$_POST['number'];



$mysqli_connection = new mysqli("localhost", "root", "", "mdcdata");
if ($mysqli_connection->connect_error) {
    die("فشل الإتصال: " . $mysqli_connection >connect_error);
}



if(isset($_POST['delet'])){
$sql = "DELETE FROM mdata WHERE number='$number'";


if ($mysqli_connection->query($sql) ===TRUE) {
    echo "تم حذف السجل بنجاح";
} 
 elseif($mysqli_connection->query($sql) === FALSE) {
    echo "فشل حذف السجل ". $mysqli_connection->error;
}
}
?>

