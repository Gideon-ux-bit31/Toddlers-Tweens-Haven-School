<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login-TT Havenschools</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Make sure this file exists -->
<link rel="icon" type="image/png" href="images/loogo.png">
</head>
<body class="body-login"> <!-- Fixed body tag -->

  <div class="black-fill"><br /><br />
    <div class="d-flex justify-content-center align-items-center flex-column">
      
      
                   <form class="login" method="post" action="req/login.php">
                    <div class="text-center">
                        <img src="images/LOGO.png" width="100">

                    </div>

                <h3>LOGIN </h3>
                <?php if (isset($_GET['error']))  { ?>
                
                <div class="alert alert-danger" role="alert">
                  <?=$_GET['error']?>
                </div>
                <?php } ?>
  <div class="mb-3">
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="uname">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
  </div>
  <div class="mb-3">
    <label  class="form-label">login As</label>
    <select class="form-control" name="role">
        <option value="1">Admin</option>
        <option value="2">Staff</option>
        <option value="3">Learner</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="index.html" class="text-decoration-none">Home </a>
</form>
<br /> <br />
      <div class="text-center text-light">  
       Copyright &copy; 2025 T&T HavenSchools. All rights reserved.
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
