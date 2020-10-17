<?php 
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "unconnection";
}

$db = mysqli_select_db($con,'place_management');

if(isset($_POST['log_btn'])){
    $user=$_POST['usn'];
    $pass=$_POST['password'];
    
    $sql = "select * from student where usn='$user' and password='$pass'";
    
    $query = mysqli_query($con,$sql);
    
    $row = mysqli_num_rows($query);
    if($row==1){
        
        echo "login successful";
        $_SESSION['username']=$user;
        header('location:studenthome.php');
    }
    else{
        echo "login failed";
        header('location:login1.php');
    }
}
?>