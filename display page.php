<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Trinity Hospital | Appointment Details</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #f4f9ff;
    font-family: Arial, sans-serif;
}

/* Header */
.hospital-header {
    background: linear-gradient(90deg, #0d47a1, #1976d2);
    padding: 18px 0;
    color: #ffffff;
}

/* Card */
.card {
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.card-header {
    background-color: #e3f2fd;
    color: #0d47a1;
    font-weight: bold;
}

/* Table */
.table thead {
    background-color: #1976d2;
    color: #ffffff;
}

.table tbody tr:hover {
    background-color: #e3f2fd;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="hospital-header text-center">
    <svg width="65" viewBox="0 0 120 120">
        <circle cx="60" cy="60" r="56" fill="#ffffff" stroke="#1e88e5" stroke-width="4"/>
        <rect x="54" y="30" width="12" height="60" rx="3" fill="#1e88e5"/>
        <rect x="30" y="54" width="60" height="12" rx="3" fill="#1e88e5"/>
        <text x="60" y="110" text-anchor="middle"
              font-size="12" font-weight="bold"
              fill="#1e88e5">
            TRINITY
        </text>
    </svg>
    <h4 class="mb-0 mt-1">Trinity Hospital</h4>
    <small>Appointment Details</small>
</div>

<div class="container mt-5">
<div class="row">
<div class="col-md-11 mx-auto">

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>All Appointments</span>
        <a class="btn btn-outline-primary btn-sm" href="records1.php">
            Back to Records
        </a>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Mobile</th>
                    <th>Department</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
            <?php
            require "dbconnect.php";

            $query = "SELECT * FROM studentdb";
            $run = mysqli_query($conn, $query);

            if (!$run) {
                echo "<tr><td colspan='5'>" . mysqli_error($conn) . "</td></tr>";
            } else {
                while ($student = mysqli_fetch_assoc($run)) {
            ?>
                <tr>
                    <td><?= $student['id']; ?></td>
                    <td><?= htmlspecialchars($student['name']); ?></td>
                    <td><?= htmlspecialchars($student['mobile']); ?></td>
                    <td><?= htmlspecialchars($student['course']); ?></td>
                    <td><?= htmlspecialchars($student['email']); ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>

        </table>

    </div>
</div>

</div>
</div>
</div>

<footer class="text-center py-3 text-muted">
    © Copyright 2026. Trinity Hospitals Group. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
