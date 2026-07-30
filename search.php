<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Trinity Hospital | Search Appointment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

/* Buttons */
.btn-hospital {
    background-color: #1976d2;
    color: #ffffff;
}

.btn-hospital:hover {
    background-color: #0d47a1;
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
    <small>Appointment Search</small>
</div>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-9">

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Search Appointment by ID</span>
        <div>
            <a href="entry_form1.php" class="btn btn-hospital btn-sm">
                + New Appointment
            </a>
            <a href="records1.php" class="btn btn-outline-primary btn-sm ms-2">
                Records
            </a>
        </div>
    </div>

    <div class="card-body">

        <form method="POST" class="mb-4">
            <div class="input-group">
                <input type="number" name="id" class="form-control"
                       placeholder="Enter Appointment ID" required>
                <button type="submit" name="search" class="btn btn-hospital">
                    Search
                </button>
            </div>
        </form>

        <table class="table table-bordered table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Department</th>
                </tr>
            </thead>

            <tbody>
            <?php
            require "dbconnect.php";

            if (isset($_POST['search'])) {

                $id = (int) $_POST['id'];

                $sql = "SELECT id, name, email, mobile, course FROM studentdb WHERE id = ?";
                $stmt = mysqli_prepare($conn, $sql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['mobile']); ?></td>
                    <td><?= htmlspecialchars($row['course']); ?></td>
                </tr>
            <?php
                        }
                    } else {
                        echo "<tr>
                                <td colspan='5' class='text-center text-danger'>
                                    No appointment found
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>" . mysqli_error($conn) . "</td></tr>";
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
