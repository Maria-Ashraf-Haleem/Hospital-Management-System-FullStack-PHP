<?php
session_start();
include "config/database.php";

if (isset($_POST['register'])) {

    $name = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $role = $_POST['role'];
    $phone = trim($_POST['phone'] ?? "");
    $department = trim($_POST['department'] ?? "");
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validation
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {

        $message = "Please fill in all fields.";

    } elseif ($password != $confirm_password) {

        $message = "Passwords do not match.";

    } else {

        // Check if email already exists
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

        if (mysqli_num_rows($check) > 0) {

            $message = "This email is already registered.";

        } else {

            $sql = "insert INTO users
                    (name,email,password,role,phone,department)

                    VALUES

                ('$name','$email','$password','$role','$phone','$department')";
            if (mysqli_query($conn, $sql)) {

                $message = "Registration successful! You can now login.";

            } else {

                $message = "Something went wrong.";

            }

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register - Hospital Management System</title>
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

    <h1>Create Account</h1>
    <p>Register to access the hospital system</p>

    <?php
    if(isset($message)){
        echo "<p style='color:green; text-align:center;'>$message</p>";
    }
    ?>

    <form action="" method="POST">

      <label>
        Full Name
        <input type="text" name="fullname" placeholder="Enter your full name" required>
      </label>

      <label>
        Email
        <input type="email" name="email" placeholder="Enter your email" required>
      </label>

      <label>
        Role
        <select name="role" required>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select>
      </label>
      <label id="phoneField" style="display:none;">
              Phone
    <input type="text" name="phone" placeholder="Enter phone number">
</label>

<label id="departmentField" style="display:none;">
    Department
    <select name="department">
        <option value="">Select Department</option>
        <option value="Cardiology">Cardiology</option>
        <option value="Neurology">Neurology</option>
        <option value="Dermatology">Dermatology</option>
        <option value="Pediatrics">Pediatrics</option>
        <option value="Orthopedics">Orthopedics</option>
    </select>
</label>

      <label>
        Password
        <input type="password" name="password" placeholder="Enter your password" required>
      </label>

      <label>
        Confirm Password
        <input type="password" name="confirm_password" placeholder="Confirm your password" required>
      </label>

      <button type="submit" name="register" class="btn">
          Register
      </button>

    </form>

    <div class="form-footer">
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>

  </div>
</section>

<footer>
  <p>Developed By: Meroooooo</p>
</footer>
<script>

const role = document.querySelector("select[name='role']");
const phone = document.getElementById("phoneField");
const department = document.getElementById("departmentField");

role.addEventListener("change", function(){

    if(this.value==="doctor"){

        phone.style.display="block";
        department.style.display="block";

    }else{

        phone.style.display="none";
        department.style.display="none";

    }

});

</script>
</body>
</html>