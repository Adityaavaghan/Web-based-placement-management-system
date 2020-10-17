<?php
session_start();
$conn=mysqli_connect('localhost','root','','place_management');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Eligible</title>
  </head>
  <body>
    
  <h3 class="card-header info-color black-text text-center py-4">
    <strong>Eligible Criteria</strong>
  </h3>
<?php
      $sql = "select * from eligible order by be desc";
      $query = mysqli_query($conn,$sql);
      if( mysqli_num_rows($query)>0){
        echo '<table class="table table-dark">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>12th Aggregate</th>";
           echo "<th>BE Aggregate</th>";
           echo "<th>Company Name</th>";
             echo "<th>Branch</th>";
             echo "<th>Problem-Solving?</th>";
             echo "<th>Computer Skills?</th>";
           echo "<th>Communication?</th>";
             echo "<th>Transferable Skills?</th>";
            
          echo "</tr>";
          echo "</thead>";
            echo "<tbody>";
          while($row = mysqli_fetch_assoc($query)){
              echo "<tr>";
              echo "<td>" . $row["puc"] . "</td>";
               echo "<td>" . $row["be"] . "</td>";
               echo "<td>" . $row["companyname"] . "</td>";
               echo "<td>" . $row["branch"] . "</td>";
               echo "<td>" . $row["prob"] . "</td>";
               echo "<td>" . $row["comp"] . "</td>";
               echo "<td>" . $row["comm"] . "</td>";
              echo "<td>" . $row["trans"] . "</td>";
              echo "</tr>";
              
          }
          echo "</tbody>";
     
       
        echo '</table>';
      }
      ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 