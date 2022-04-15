
	
	<?php


// php search data in mysql database using PDO
// set data in input text


$number = "";
$name = "";
$address = "";
$surnumber = "";


if(isset($_POST['sherc']))
{
     
   $mysqli_connection = new mysqli("localhost", "root", "", "mdcdata");
   if ($mysqli_connection->connect_error) {
    die("فشل الإتصال: " . $mysqli_connection >connect_error);
}
   
         
  
    $number= $_POST['number'];
    
   
    $sql = " SELECT * FROM mdata WHERE number = $number";
    
    $pdoResult = $mysqli_connection->prepare($sql);
    
   
    $pdoExec = $pdoResult->execute(array(":number"=>$number));
    
    if($pdoExec)
    {
           
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
            echo      $row['number'] ;
            echo  $row['name'] ;
            echo    $row['address'] ;
             echo   $row['surnumber'] ;
            }
        }
            
        else{
            echo 'No Data With This number';
        }
    }else{
        echo 'ERROR Data Not Inserted';
    }
}




?>





