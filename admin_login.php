<?php
include ("connect.php");
session_start();
if(isset($_POST['login'])){
    
    $name = $_POST["Name"];
    $password = $_POST["Password"];
    
    $sql = "select admin_name,admin_password from admin where admin_password='$password' ";
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result) == 1){
        
        session_start();
        $_SESSION["Name"] = $name;
        
        echo "<script>window.open('admin_index.php','_self')</script>";
        }
    else{
        echo "<script>alert('Your username or password is incorrect.')</script>";

    }
    
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

  <div class="container">
    <div class="wrapper">
    <h1 style="text-align:center">ADMIN LOGIN</h1>
    <div class="form">
      <form action="" method="post" class="form-group">
        <label for="">Name:</label>
        <input type="text" name="Name" class="form-control" id="">
        <label for="">Password:</label>
        <input type="text" name="Password" class="form-control" id="">
        
        <br>
        <input type="submit" class="btn btn-success btn-lg" value="Submit" name="login">
  
      </form>
    </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>