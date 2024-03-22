<!-- login session start code -->
<?php
session_start();
if (!isset($_SESSION['admin_id']) and !isset($_SESSION['admin_nm'])) {
    header("location:admin_login.php");
} ?>
<!-- session variables -->

<!-- php code to logout -->
<?php
if (isset($_POST['lgobtn'])) {
    session_unset();
    session_destroy();
    header("location:admin_login.php");
}

?>