<?php
include "config/auth.php";
if($_SESSION['role'] != "doctor"){
    header("Location: dashboard.php");
    exit();
}

$sql = "SELECT id, name, email
        FROM users
        WHERE role = 'patient'
        ORDER BY name ASC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Patients - Hospital Management System</title>
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
            <li><a href="doctor-appointments.php">Appointment Requests</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</div>
</header>

<section class="container">

<h1 class="section-title">Patients List</h1>

<div class="table-wrapper">
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
    <td>
        <a href="delete-user.php?id=<?php echo $row['id']; ?>&from=patients.php" 
           class="btn-delete" 
           onclick="return confirm('Are you sure you want to delete this patient? All related appointments will be deleted as well.');">
           Delete
        </a>
    </td>
</tr>

<?php
    }
} else {
?>

<tr>
    <td colspan="4" style="text-align:center;">No patients found.</td>
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