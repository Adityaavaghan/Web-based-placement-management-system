<?php
$em=$_POST['email'];
$messa=$_POST['mess'];

$con=new mysqli('localhost','root','','place_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into mail(email,mess) values(?,?)");
   $stmt->bind_param("ss",$em,$messa);
   $stmt->execute();
    echo "MESSAGE SENT...";
   $stmt->close();
   $con->close();
}
    
?>
