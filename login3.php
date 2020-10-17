<!doctype html>
<html>
<head>
    <title>ADMINLOGIN</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>
   <div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Admin Login</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" action="adminlog.php" method="post">
      <div class="md-form">
        <input type="text" id="materialLoginFormuser" name="username" class="form-control">
        <label for="materialLoginFormuser">user</label>
      </div>
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" name="password" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="sub_btn">Login</button>
    </form>
     
  </div>

</div>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>