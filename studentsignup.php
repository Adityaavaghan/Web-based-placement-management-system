<?php
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$USN=$_POST['USN'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$hashed_password=password_hash($password , PASSWORD_DEFAULT);
$con=new mysqli('localhost','root','','place_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into registration(Firstname,Lastname,USN,Email,password) values(?,?,?,?,?)");
   $stmt->bind_param("sssss",$Firstname,$Lastname,$USN,$Email,$hashed_password);
   $stmt->execute();
   echo "Successfully registered...";
   $stmt->close();
   $con->close();
}
    
?>