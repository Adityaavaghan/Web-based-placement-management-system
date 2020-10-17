<?php
$cname=$_POST['CompanyName'];
$email=$_POST['Email'];
$pass=$_POST['password'];
$user=$_POST['Username'];
$pno=$_POST['PhoneNumber'];
$sta=$_POST['Status'];
$hashed_password=password_hash($pass , PASSWORD_DEFAULT);
$con=new mysqli('localhost','root','','place_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into companyname(CompanyName,Email,password,Username,PhoneNumber,Status) values(?,?,?,?,?,?)");
   $stmt->bind_param("ssssis",$cname,$email,$hashed_password,$user,$pno,$sta);
   $stmt->execute();
   echo "Successfully registered...";
   $stmt->close();
   $con->close();
}
    
?>
