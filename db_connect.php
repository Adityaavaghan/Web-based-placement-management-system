<?php
$USN= 'root';
$password='';
$dsn='mysql:host=localhost; dbname=place_management';

try{
    $con=new PDO($dsn,$USN,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "fail to connect to database".$e->getMessage();
}
?>
