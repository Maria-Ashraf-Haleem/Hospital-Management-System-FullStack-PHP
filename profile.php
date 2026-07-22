<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile - Hospital Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="top-bar">
    <div class="logo">Hospital Management System</div>
    <nav>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="patients.php">Patients</a></li>
        <li><a href="doctors.php">Doctors</a></li>
        <li><a href="book-appointment.php">Appointments</a></li>
        <li><a href="login.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="container">

  <div class="card">
    <h1 class="section-title">My Profile</h1>
    <p>View and update your account information.</p>

    <form action="#" method="post">
      <label>
        Full Name
        <input type="text" name="fullname" value="Dr. Maria Fahmy">
      </label>
      <label>
        Email
        <input type="email" name="email" value="maria.fahmy@hospital.com">
      </label>
      <label>
        Phone Number
        <input type="text" name="phone" value="01099887766">
      </label>
      <label>
        Role
        <select name="role">
          <option value="doctor" selected>Doctor</option>
          <option value="patient">Patient</option>
          <option value="admin">Admin</option>
        </select>
      </label>

      <button type="submit" class="btn">Update Profile</button>
    </form>
  </div>

</section>

<footer>
  <p>Developed By: Meroooooo</p>
</footer>

</body>
</html>