<?php
include "config/auth.php";
if($_SESSION['role']!="patient"){

header("Location: dashboard.php");
exit();

}
$patient_id = $_SESSION['id'];

$sql = "SELECT
            appointments.*,
            users.name AS doctor_name,
            users.department
        FROM appointments
        JOIN users
            ON appointments.doctor_id = users.id
        WHERE appointments.patient_id = '$patient_id'
        ORDER BY appointment_date DESC, appointment_time DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Appointments - Hospital Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="top-bar">
    <div class="logo">Hospital Management System</div>

<nav>
<ul>

<li><a href="dashboard.php">Dashboard</a></li>

<li><a href="doctors.php">Doctors</a></li>

<li><a href="book-appointment.php">Book Appointment</a></li>

<li><a href="appointments.php">My Appointments</a></li>

<li><a href="logout.php">Logout</a></li>

</ul>
</nav>
  </div>
</header>

<section class="container">

<h1 class="section-title">My Appointment History</h1>

<div class="table-wrapper">

<table>

<tr>

<th>Doctor</th>
<th>Department</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>

</tr>

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo htmlspecialchars($row['doctor_name']); ?></td>

<td><?php echo htmlspecialchars($row['department']); ?></td>

<td><?php echo $row['appointment_date']; ?></td>

<td><?php echo $row['appointment_time']; ?></td>

<td><?php echo $row['status']; ?></td>

</tr>

<?php

    }

}else{

?>

<tr>

<td colspan="5" style="text-align:center;">
No appointments found.
</td>

</tr>

<?php

}

?>

</table>

</div>

</section>

<footer>
<p>Developed By: Meroooooo</p>
</footer>

</body>
</html>