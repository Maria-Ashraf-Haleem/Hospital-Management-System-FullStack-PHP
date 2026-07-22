<?php

session_start();
include "config/database.php";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['id']=$user['id'];
        $_SESSION['name']=$user['name'];
        $_SESSION['role']=$user['role'];

        header("Location: dashboard.php");
        exit();

    }else{

        $error="Invalid Email or Password";

    }

}

?>

<?php
if(isset($error)){
    echo "<p>$error</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Hospital Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="top-bar">
    <div class="logo">Hospital Management System</div>
    <nav>
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
</ul>
</nav>
  </div>
</header>

<section class="form-wrapper">
  <div class="form-card">
    <h1>Welcome Back</h1>
    <p>Login to manage your hospital dashboard</p>
    <form action="" method="post">
      <label>
        Email
        <input type="email" name="email" placeholder="Enter your email">
      </label>
      <label>
        Password
        <input type="password" name="password" placeholder="Enter your password">
      </label>
      <button type="submit" name="login" class="btn">
    Login
</button>
    </form>
    <div class="form-footer">
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
  </div>
</section>

<footer>
  <p>Developed By: Meroooooo</p>
</footer>

</body>
</html>