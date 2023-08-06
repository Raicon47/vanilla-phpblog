<?php 
 include('path.php');
 include(ROOT_PATH . '/database/conn.php');
// include(ROOT_PATH . "/app/controllers/admin.php"); 
if(isset($_POST['login-btn'])) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/bootstrap.min.css' ?>">
</head>
<body>

<title>Tangul - Admin Login</title>

<div class="bg-dark p-3 shadow">
 <h2 class="font-weight-bold text-light">Login Form</h2>
</div>

<div class="container p-5">

<form action="login.php" method="POST">

  <div class="form-group">
      <label for="inputEmail4"><h3>Username</h3></label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="first name">
    </div>

    <div class="form-group">
      <label for="inputEmail4"><h3>Password</h3></label>
      <input type="password" class="form-control" name="password" id="password" placeholder="last name">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-success" name="login-btn">Login</button>
    </div>
    
</form>
</div>



