<?php
include "config/auth.php";

// Search
$search = "";

if(isset($_GET['search'])){
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM users
            WHERE role='doctor'
            AND name LIKE '%$search%'
            ORDER BY id ASC";
}else{

    $sql = "SELECT * FROM users
            WHERE role='doctor'
            ORDER BY id ASC";
}

$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Doctors - Hospital Management System</title>
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

    <h1 class="section-title">Doctors List</h1>

    <form method="GET">

        <div class="search-box">

            <input
                type="text"
                name="search"
                placeholder="Search doctor by name..."
                value="<?php echo htmlspecialchars($search); ?>">

            <button class="btn">
                Search
            </button>

        </div>

    </form>

    <div class="table-wrapper">

        <table>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Department</th>

                <th>Phone</th>

                <th>Email</th>

                <th>Action</th>

            </tr>

            <?php

            if(mysqli_num_rows($result)>0){

                while($doctor=mysqli_fetch_assoc($result)){

            ?>

            <tr>

                <td><?php echo $doctor['id']; ?></td>

                <td><?php echo htmlspecialchars($doctor['name']); ?></td>

                <td><?php echo htmlspecialchars($doctor['department']); ?></td>

                <td><?php echo htmlspecialchars($doctor['phone']); ?></td>

                <td><?php echo htmlspecialchars($doctor['email']); ?></td>

                <td>

                    <a href="book-appointment.php?doctor_id=<?php echo $doctor['id']; ?>" class="btn">

                        Book Appointment

                    </a>

                </td>

            </tr>

            <?php

                }

            }else{

                echo "<tr>
                        <td colspan='6' style='text-align:center;'>
                            No doctors found.
                        </td>
                      </tr>";

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