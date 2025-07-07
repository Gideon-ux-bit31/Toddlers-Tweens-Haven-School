<?php
session_start();
if (isset($_SESSION['id'])){


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - TT Havenschools</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Make sure this file exists -->
<link rel="icon" type="image/png" href="images/loogo.png">
</head>
<body class="body-home"> 
    <div class="d-flex justify-content-center align-items-center vh-100"> 
        <div class="shadow w-450 p-3 text-center">
            <small>Role:
              <b>
                <?php
                if ($_SESSION['role'] == 'Admin'){
                echo "Admin";
                }else if ($_SESSION['role'] == 'Staff'){
                 echo "Staff";
                }else {
                  echo "Learner";
                }
                ?>
              </b><br>
              <h3><?=$_SESSION['fname']?></h3>
              <a href="logout.php" class="btn btn-warning">Logout</a>
            </small>
            
      <div class="text-center text-light">
        Copyright &copy; 2025 T&T HavenSchools. All rights reserved.
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
}else{
    header("Location: login.php");
     exit;

}
?>
