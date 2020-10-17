<?php
$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','cell1');
if(isset($_POST['Register'])){
    $fname=mysqli_real_escape_string($_POST['First name']);
       $lname=mysqli_real_escape_string($_POST['Last name']);
       $email=mysqli_real_escape_string($_POST['E-mail']);
       $password=mysqli_real_escape_string($_POST['Password']);
       $pno=mysqli_real_escape_string($_POST['Phone number']);
   
    if(empty($email)){
        array_push($errors,"email is required");
    }
     if(empty($password)){
        array_push($errors,"password is required");
    }
    if(count($errors)==0){
        $password1=md5($password);
        $sql="insert into stud(E-mail,Password) values('$email','$password')";
        mysqli_query($db,$sql);
    }
    
    
    
}