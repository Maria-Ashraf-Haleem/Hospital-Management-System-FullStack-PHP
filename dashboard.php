<?php
include "config/auth.php";

if($_SESSION['role']=="doctor"){

    $patients = mysqli_fetch_assoc(
        mysqli_query($conn,"SELECT COUNT(*) AS total FROM users WHERE role='patient'")
    );

    $doctors = mysqli_fetch_assoc(
        mysqli_query($conn,"SELECT COUNT(*) AS total FROM users WHERE role='doctor'")
    );

    $appointments = mysqli_fetch_assoc(
        mysqli_query($conn,"SELECT COUNT(*) AS total FROM appointments")
    );

    $departments = mysqli_fetch_assoc(
        mysqli_query($conn,"SELECT COUNT(DISTINCT department) AS total
        FROM users
        WHERE role='doctor'")
    );

    $sql = "SELECT
    appointments.*,
    patient.name AS patient_name,
    doctor.name AS doctor_name,
    doctor.department

    FROM appointments

    JOIN users AS patient
    ON appointments.patient_id = patient.id

    JOIN users AS doctor
    ON appointments.doctor_id = doctor.id

    ORDER BY appointments.id DESC

    LIMIT 5";

}else{

    $myAppointments = mysqli_fetch_assoc(
        mysqli_query($conn,"
        SELECT COUNT(*) AS total
        FROM appointments
        WHERE patient_id=".$_SESSION['id'])
    );

    $sql = "SELECT
    appointments.*,
    doctor.name AS doctor_name,
    doctor.department

    FROM appointments

    JOIN users AS doctor
    ON appointments.doctor_id=doctor.id

    WHERE appointments.patient_id=".$_SESSION['id']."

    ORDER BY appointments.appointment_date DESC

    LIMIT 5";
}

$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard - Hospital Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="top-bar">
    <div class="logo">Hospital Management System</div>
    <nav>
<ul>

<li><a href="dashboard.php">Dashboard</a></li>

<?php if($_SESSION['role']=="doctor"){ ?>

<li><a href="patients.php">Patients</a></li>

<li><a href="doctors.php">Doctors</a></li>

<li><a href="doctor-appointments.php">Appointment Requests</a></li>

<?php }else{ ?>

<li><a href="doctors.php">Doctors</a></li>

<li><a href="book-appointment.php">Book Appointment</a></li>

<li><a href="appointments.php">My Appointments</a></li>

<?php } ?>

<li><a href="logout.php">Logout</a></li>

</ul>
</nav>
  </div>
</header>

<section class="container">
<div class="welcome-box">

<h2>

Welcome, <?php echo $_SESSION['name']; ?> 

</h2>

<p>

Role :
<b><?php echo ucfirst($_SESSION['role']); ?></b>

</p>

<?php if($_SESSION['role']=="doctor"){ ?>

<p>
Manage patients and appointments from your dashboard.
</p>

<?php }else{ ?>

<p>
View your appointments and manage your healthcare information.
</p>

<?php } ?>

</div>

<p>

Role:
<b><?php echo ucfirst($_SESSION['role']); ?></b>

</p>
    <p>Here is what is happening in your hospital today.</p>
  </div>

<div class="stats-row">

<?php if($_SESSION['role']=="doctor"){ ?>

<article class="stat-card">
<p>Total Patients</p>
<h2><?php echo $patients['total']; ?></h2>
</article>

<article class="stat-card">
<p>Total Doctors</p>
<h2><?php echo $doctors['total']; ?></h2>
</article>

<article class="stat-card">
<p>Total Appointments</p>
<h2><?php echo $appointments['total']; ?></h2>
</article>

<article class="stat-card">
<p>Departments</p>
<h2><?php echo $departments['total']; ?></h2>
</article>

<?php }else{ ?>

<article class="stat-card">
<p>My Appointments</p>
<h2><?php echo $myAppointments['total']; ?></h2>
</article>

<?php } ?>

</div>
<?php if($_SESSION['role']=="doctor"){ ?>

<h3 class="section-title">Recent Appointments</h3>

<div class="table-wrapper">

<table>

<tr>

<th>Patient</th>
<th>Doctor</th>
<th>Department</th>
<th>Date</th>
<th>Status</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['patient_name']; ?></td>

<td><?php echo $row['doctor_name']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['appointment_date']; ?></td>

<td><?php echo $row['status']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php }else{ ?>

<h3 class="section-title">My Recent Appointments</h3>

<div class="table-wrapper">

<table>

<tr>

<th>Doctor</th>
<th>Department</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['doctor_name']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['appointment_date']; ?></td>

<td><?php echo $row['appointment_time']; ?></td>

<td><?php echo $row['status']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php } ?>
</section>

<footer>
  <p>Developed By: Meroooooo</p>
</footer>

</body>
</html>