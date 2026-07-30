<?php
session_start();

$error = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple Admin Credentials (You can change later)
    $admin_user = "Subarna";
    $admin_pass = "13579";

    if($username == $admin_user && $password == $admin_pass)
    {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Trinity Hospital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(to right, #1565c0, #1e88e5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            width: 380px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .login-title {
            text-align: center;
            color: #1565c0;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .btn-login {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #218838;
        }

        .error-msg {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="login-card">

    <h3 class="login-title">Admin Panel Login</h3>

    <?php if($error != "") { ?>
        <div class="error-msg"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="login" class="btn btn-login btn-block">
            Login
        </button>

    </form>

</div>

</body>
</html>
