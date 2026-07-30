<?php
require 'dbconnect.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty($_POST['name'])) {
        $errors[] = "Patient name cannot be left blank";
    }

    if (empty($_POST['email'])) {
        $errors[] = "E-mail cannot be left blank";
    }

    if (empty($_POST['mobile'])) {
        $errors[] = "Mobile number cannot be left blank";
    }

    if (empty($_POST['course'])) {
        $errors[] = "Department field cannot be left blank";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO studentdb (name, email, mobile, course) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param(
                $stmt,
                "ssss",
                $_POST['name'],
                $_POST['email'],
                $_POST['mobile'],
                $_POST['course']
            );

            if (mysqli_stmt_execute($stmt)) {
                echo '<div class="alert alert-success text-center">
                        Appointment booked successfully!
                      </div>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Trinity Hospital | Appointment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f4f9ff;
    font-family: Arial, sans-serif;
}

/* Header */
.hospital-header {
    background: linear-gradient(90deg, #0d47a1, #1976d2);
    padding: 20px 0;
    color: #fff;
}

/* Card */
.card {
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.card-header {
    background-color: #e3f2fd;
    font-weight: bold;
    color: #0d47a1;
}

/* Buttons */
.btn-hospital {
    background-color: #1976d2;
    color: #fff;
}

.btn-hospital:hover {
    background-color: #0d47a1;
}

.btn-record {
    background-color: #0d47a1;
    color: #fff;
}

.btn-record:hover {
    background-color: #08306b;
}

/* Logo */
.logo svg {
    width: 90px;
}
</style>
</head>

<body>

<!-- HEADER WITH LOGO -->
<div class="hospital-header text-center">
    <div class="logo mb-2">
        <svg viewBox="0 0 120 120">
            <circle cx="60" cy="60" r="56" fill="#ffffff" stroke="#1e88e5" stroke-width="4"/>
            <rect x="54" y="30" width="12" height="60" rx="3" fill="#1e88e5"/>
            <rect x="30" y="54" width="60" height="12" rx="3" fill="#1e88e5"/>
            <text x="60" y="110" text-anchor="middle"
                  font-size="12" font-weight="bold"
                  fill="#1e88e5">
                TRINITY
            </text>
        </svg>
    </div>
    <h3 class="mb-0">Trinity Hospital</h3>
    <p class="mb-0">Appointment Booking</p>
</div>

<div class="container my-5">
<div class="row justify-content-center">

<div class="col-md-6">

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="card">
        
        <!-- UPDATED HEADER WITH RECORD BUTTON -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Book an Appointment</span>
            </a>
        </div>

        <div class="card-body">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Patient Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter patient name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input type="tel" name="mobile" class="form-control" placeholder="Enter mobile number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <select name="course" class="form-select">
                        <option value="">Select Department</option>
                        <option>Cardiology</option>
                        <option>Neurology</option>
                        <option>Orthopedics</option>
                        <option>Pediatrics</option>
                        <option>General Medicine</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-hospital">
                        Confirm Appointment
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

</div>
</div>

<footer class="text-center py-3 text-muted">
    © Copyright 2026. Trinity Hospitals Group. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
