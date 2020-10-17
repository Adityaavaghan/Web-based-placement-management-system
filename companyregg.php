
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Registeration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>

<div class="container">
  <h2>Company Registration</h2>
 
  <form action="companyreg.php" method="post">
       <div class="form-group">
      <label for="usr"> Company Name:</label>
      <input type="text" class="form-control" id="usr" name="CompanyName">
      </div>
       <div class="form-group">
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" name="Email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
       <div class="form-group">
      <label for="Username">Username:</label>
      <input type="text" class="form-control" id="Username" name="Username">
    </div>
       <div class="form-group">
      <label for="phonenumber">Phone Number:</label>
      <input type="tel" class="form-control" id="phonenumber" name="PhoneNumber">
    </div>
      <div class="form-group">
      <label for="status">status:</label>
      <input type="text" class="form-control" id="statusr" name="Status">
    </div>
       
       
  <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="" data-content="Successfully Registered">Register</button>
  </form>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
