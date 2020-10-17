<?php
$pu=$_POST['puc'];
$en=$_POST['be'];
$cname=$_POST['companyname'];
$br=$_POST['branch'];
$pro=$_POST['prob'];
$com=$_POST['comp'];
$co=$_POST['comm'];
$tra=$_POST['trans'];
$con=new mysqli('localhost','root','','place_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into eligible(puc,be,companyname,branch,prob,comp,comm,trans) values(?,?,?,?,?,?,?,?)");
   $stmt->bind_param("isssssss",$pu,$en,$cname,$br,$pro,$com,$co,$tra);
   $stmt->execute();
   echo "Successfully registered...";
   $stmt->close();
   $con->close();
}
    
?>