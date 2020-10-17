
<!doctype html>
<html>
<head>
    <title>STUDENT LOGIN</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>
   <div class="card">

  <h5 class="card-header info-color black-text text-center py-4">
    <strong>Student Login</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" action="login.php" method="post">
      <div class="md-form">
        <input type="text" name="usn" id="materialLoginFormUSN" class="form-control">
        <label for="materialLoginFormUSN">USN</label>
      </div>
      <div class="md-form">
        <input type="password" name="password" id="materialLoginFormpassword" class="form-control">
        <label for="materialLoginFormpassword">password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
      </div>

      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="log_btn">Login</button>
      <p>Not a member?
        <a href="demo.html">Register</a>
      </p>
    </form>

  </div>

</div>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>