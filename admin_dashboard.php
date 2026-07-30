<?php
session_start();

// Prevent direct access without login
if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>

<body>

<h2>Admin Dashboard</h2>

<p>Welcome, <?php echo $_SESSION['admin']; ?></p>

<hr>

<h3>Select an Option:</h3>

<ol>
    <li>
        <a href="records.php">View Records</a>
    </li>

    <li>
        <a href="search.php">Search Patient</a>
    </li>

    <li>
        <a href="appointment.php">Display Appointment</a>
    </li>

    <li>
        <a href="delete_appointment.php">Delete Appointment</a>
    </li>
</ol>

</body>
</html>
