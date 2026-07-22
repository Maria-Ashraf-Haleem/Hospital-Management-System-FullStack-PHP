<?php
include "config/auth.php";


if($_SESSION['role'] != "doctor"){
    header("Location: dashboard.php");
    exit();
}

$doctor_id = $_SESSION['id'];

if(isset($_GET['action']) && isset($_GET['id'])){

    $appointment_id = (int)$_GET['id'];
    $action = $_GET['action'];

    if(in_array($action, ["Approved","Completed","Cancelled"])){

        mysqli_query($conn,
        "UPDATE appointments
        SET status='$action'
        WHERE id='$appointment_id'
        AND doctor_id='$doctor_id'");

    }

    header("Location: doctor-appointments.php");
    exit();
}

$sql = "SELECT
appointments.*,
users.name AS patient_name

FROM appointments

JOIN users
ON appointments.patient_id = users.id

WHERE appointments.doctor_id='$doctor_id'

ORDER BY appointment_date ASC,
appointment_time ASC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Appointment Requests</title>
<link rel="stylesheet" href="style.css">

<style>

.btn-approve,
.btn-complete,
.btn-cancel{

border:none;
padding:8px 14px;
border-radius:20px;
font-size:13px;
cursor:pointer;
color:#fff;
text-decoration:none;
margin-right:5px;

}

.btn-approve{

background:#0f766e;

}

.btn-complete{

background:#2563eb;

}

.btn-cancel{

background:#dc2626;

}

</style>

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

<li><a href="doctor-appointments.php">Appointment Requests</a></li>

<li><a href="logout.php">Logout</a></li>

</ul>
</nav>

</div>

</header>

<section class="container">

<h1 class="section-title">

Appointment Requests

</h1>

<div class="table-wrapper">

<table>

<tr>

<th>Patient</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th>Actions</th>

</tr>

<?php

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo htmlspecialchars($row['patient_name']); ?></td>

<td><?php echo $row['appointment_date']; ?></td>

<td><?php echo $row['appointment_time']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a
class="btn-approve"
href="doctor-appointments.php?id=<?php echo $row['id']; ?>&action=Approved">

Approve

</a>

<a
class="btn-complete"
href="doctor-appointments.php?id=<?php echo $row['id']; ?>&action=Completed">

Complete

</a>

<a
class="btn-cancel"
href="doctor-appointments.php?id=<?php echo $row['id']; ?>&action=Cancelled">

Cancel

</a>

</td>

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

<p>

Developed By: Meroooooo

</p>

</footer>

</body>
</html>