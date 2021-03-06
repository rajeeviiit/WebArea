<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../dashboard/assets/image/logo.ico">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../view/css/reset.css">
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>

<body>
<?php
include_once "init.php";
admin_protact_page();
?>
<div class="login-logo">
    <img src="assets/image/logo.png">
</div>
<div class="form-content">
    <div class="form">
        <h2>Forgot Password</h2>
        <?php
        if (isset($_GET['errors']) == true) {
            $errors = $_GET['errors'];
            ?>
            <p class="errors">
                <?php
                print_r($errors);
                ?>
            </p>
            <?php
        }
        if (isset($_GET['success']) && empty($_GET['success'])) {
            echo "<p style='text-align: center;'>Thanks we've emailed you to recover password</p>";
        }
        ?>
        <form action="../controller/admin_auth.php" method="post">
            <input type="email" placeholder="Email Address" id="email" name="email"/>
            <button type="submit" name="forgot_password"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                Submit
            </button>
        </form>
        <div class="cta"><a href="login.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Back to Login</a></div>
    </div>
</div>
<script src='assets/js/jquery-3.1.1.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src="../view/js/main.js"></script>
</body>
</html>
