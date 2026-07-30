<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Trinity Hospital | Delete Appointment</title>

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

/* Warning box */
.warning-box {
    background-color: #fff3cd;
    border-left: 5px solid #dc3545;
    padding: 15px;
    border-radius: 6px;
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

<?php
require 'dbconnect.php';

$message = '';
$record  = null;

/* SEARCH RECORD BY ID */
if (isset($_POST['search'])) {

    $id = (int) $_POST['id'];

    $stmt = mysqli_prepare($conn, "SELECT * FROM studentdb WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $record = mysqli_fetch_assoc($result);

    if (!$record) {
        $message = "No appointment found with ID $id";
    }
}

/* CONFIRM DELETE */
if (isset($_POST['confirm_delete'])) {

    $id = (int) $_POST['id'];

    $stmt = mysqli_prepare($conn, "DELETE FROM studentdb WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $message = "Appointment with ID $id deleted successfully.";
        } else {
            $message = "No appointment found to delete.";
        }
    } else {
        $message = "Error deleting appointment.";
    }

    $record = null;
}
?>

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
    <small>Appointment Management</small>
</div>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-7">

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Delete Appointment</span>
        <a href="records1.php" class="btn btn-hospital btn-sm">Records</a>
    </div>

    <div class="card-body">

        <?php if ($message): ?>
            <div class="alert alert-info"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <!-- SEARCH FORM -->
        <?php if (!$record): ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Appointment ID</label>
                <input type="number" name="id" class="form-control"
                       placeholder="Enter appointment ID" required>
            </div>

            <button type="submit" name="search" class="btn btn-danger">
                Find Appointment
            </button>
            
        </form>
        <?php endif; ?>

        <!-- CONFIRMATION SECTION -->
        <?php if ($record): ?>
            <div class="warning-box mt-4">
                <h6 class="text-danger mb-2">
                    ⚠ Confirm Appointment Deletion
                </h6>
                <p class="mb-0">
                    This action is permanent and cannot be undone.
                </p>
            </div>

            <table class="table table-bordered mt-3">
                <tr><th>ID</th><td><?= $record['id'] ?></td></tr>
                <tr><th>Patient Name</th><td><?= htmlspecialchars($record['name']) ?></td></tr>
                <tr><th>Email</th><td><?= htmlspecialchars($record['email']) ?></td></tr>
                <tr><th>Mobile</th><td><?= htmlspecialchars($record['mobile']) ?></td></tr>
                <tr><th>Department</th><td><?= htmlspecialchars($record['course']) ?></td></tr>
            </table>

            <form method="POST">
                <input type="hidden" name="id" value="<?= $record['id'] ?>">

                <button type="submit" name="confirm_delete" class="btn btn-danger">
                    Confirm Delete
                </button>

                <a href="delete.php" class="btn btn-secondary ms-2">
                    Cancel
                </a>
            </form>
        <?php endif; ?>

    </div>
</div>

</div>
</div>
</div>

<footer class="text-center py-3 text-muted">
    © Copyright 2026. Trinity Hospitals Group. All Rights Reserved.
</footer>

</body>
</html>
