<?php
$us=$_POST['usn'];
$cname=$_POST['CompanyName'];
$sname=$_POST['StudentName'];
$email=$_POST['Email'];
$ssl=$_POST['sslc'];
$cgp=$_POST['cgpa'];
$pno=$_POST['PhoneNumber'];
$ski=$_POST['skills'];
$back=$_POST['backlogs'];
$con=new mysqli('localhost','root','','place_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into studreg(usn,CompanyName,StudentName,Email,sslc,cgpa,PhoneNumber,skills,backlogs) values(?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("ssssisssi",$us,$cname,$sname,$email,$ssl,$cgp,$pno,$ski,$back);
   $stmt->execute();
   echo "Successfully registered...";
   $stmt->close();
   $con->close();
}
    
?>