

<!doctype html>
<html>
<head>
    <title>COMPANY LOGIN</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>
    
  <h3 class="card-header info-color black-text text-center py-4">
    <strong>Company Login</strong>
  </h3>
 <form action="companylog.php" method="post">
  <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" name="Username" id="username">
  </div>
  <div class="form-group">
    <label for="password">password:</label>
    <input type="password" class="form-control"  name="password" id="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="log">Login</button>
</form>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>