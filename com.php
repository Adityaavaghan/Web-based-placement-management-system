<?php
session_start();
$conn=mysqli_connect('localhost','root');
if($conn){
    echo "connection successful";
}
else{
    echo "unconnection";
}
      $sql = "select * from companyname";
      $query = mysqli_query($conn,$sql);
      $row = mysqli_num_rows($query);
      if($row > 0){
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
          while($r = mysqli_fetch_assoc[$result]){
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