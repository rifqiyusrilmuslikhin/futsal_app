<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="font-awesome/css/all.min.css">

    <title>Login Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top mb-5">
      <h4 class="text-white">LOGIN ADMIN</h4>
    </nav>

    <div class="container pt-5 rounded" style="width: 40%; border: 1px solid #ccc; margin-top: 150px;">
      <h5 class="alert alert-primary p-2 rounded text-center">Silahkan Login</h5>
      <form action="proses_login.php" class="mt-5" method="post">
        <div class="form-group m-auto" style="width: 60%;">
          <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" name="username" id="inlineFormInputGroupUsername2" placeholder="Username" required>
        </div>
        <div class="form-group mt-3">
          <label class="sr-only" for="inlineFormInputGroupPassword1">Password</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-lock"></i></div>
          </div>
          <input type="password" class="form-control" id="inlineFormInputGroupPassword1" name="password" placeholder="Password" required>
        </div>
        <div class="form-group btn-login">
          <button type="submit" class="btn btn-primary mt-4 mb-5" name="loginadmin" style="width: 100%">Login</button>
        </div>
      </form>
    </div>
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/script.js"></script>
  </body>
</html>