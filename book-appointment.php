<?php
include "config/auth.php";
if($_SESSION['role']!="patient"){

header("Location: dashboard.php");
exit();

}

// حفظ الحجز
if(isset($_POST['book'])){

    $patient_id = $_SESSION['id'];
    $doctor_id = $_POST['doctor'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $notes = trim($_POST['notes']);

    if(empty($doctor_id) || empty($appointment_date) || empty($appointment_time)){

        $message = "Please fill all required fields.";

    }else{

        $sql = "INSERT INTO appointments
        (patient_id,doctor_id,appointment_date,appointment_time,notes,status)

        VALUES

        ('$patient_id','$doctor_id','$appointment_date',
        '$appointment_time','$notes','Pending')";

        if(mysqli_query($conn,$sql)){

            $message = "Appointment booked successfully.";

        }else{

            $message = "Error booking appointment.";

        }

    }

}

// جلب الدكاترة
$doctors = mysqli_query($conn,
"SELECT id,name,department FROM users
WHERE role='doctor'
ORDER BY name ASC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Appointment</title>
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

<div class="card">

<h1 class="section-title">Book Appointment</h1>

<?php
if(isset($message)){
echo "<p style='color:green;text-align:center;'>$message</p>";
}
?>

<form method="POST">

<div class="form-row">

<label>

Doctor

<select name="doctor" required>

<option value="">Select Doctor</option>

<?php

while($doctor=mysqli_fetch_assoc($doctors)){

?>

<option value="<?php echo $doctor['id']; ?>">

<?php
echo $doctor['name']." - ".$doctor['department'];
?>

</option>

<?php
}
?>

</select>

</label>

<label>

Date

<input
type="date"
name="appointment_date"
required>

</label>

</div>

<div class="form-row">

<label>

Time

<input
type="time"
name="appointment_time"
required>

</label>

</div>

<label>

Notes

<textarea
name="notes"
placeholder="Write any notes"></textarea>

</label>

<br>

<button
type="submit"
name="book"
class="btn">

Book Appointment

</button>

</form>

</div>

</section>

<footer>

<p>Developed By: Meroooooo</p>

</footer>

</body>
</html>