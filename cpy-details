<?php
session_start();
$conn=mysqli_connect('localhost','root','','place_management');
if($conn){
    echo "connection successful";
}
else{
    echo "unconnection";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>company view</title>
  </head>
  <body>
      <h2>COMPANY DETAILS</h2>
<?php
      $sql = "select * from companyname";
      $query = mysqli_query($conn,$sql);
      if( mysqli_num_rows($query)>0){
        echo '<table class="table table-dark">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>Company Name</th>";
           echo "<th>Email</th>";
             echo "<th>UERNAME</th>";
             echo "<th>PHONENUMBER</th>";
             echo "<th>STATUS</th>";
               echo "<th>U WANT TO REGISTER?</th>";
          echo "</tr>";
          echo "</thead>";
            echo "<tbody>";
          while($r = mysqli_fetch_assoc($query)){
              echo "<tr>";
              echo "<td>" . $row["CompanyName"] . "</td>";
               echo "<td>" . $row["Email"] . "</td>";
               echo "<td>" . $row["Username"] . "</td>";
               echo "<td>" . $row["PhoneNumber"] . "</td>";
               echo "<td>" . $row["Status"] . "</td>";
              echo "</tr>";
              
          }
          echo "</tbody>";
     
       
        echo '</table>';
      }
    else
    {
        echo "0 result";
    }
      ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>          

