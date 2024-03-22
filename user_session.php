<!-- login session start code -->
<?php
session_start();
if (!isset($_SESSION['u_id']) and !isset($_SESSION['u_nm'])) {
    header("location:u_login.php");
} ?>
<!-- session variables -->
<!-- <?php
        $uid = $_SESSION['u_id'];
        $_SESSION['u_nm'];
        $uc = $_SESSION['u_cc'];
        $ua = $_SESSION['active'];
        $unm = $_SESSION['u_nm']
        ?> -->
<!-- php code to logout -->
<?php
if (isset($_POST['lgobtn'])) {
    session_unset();
    session_destroy();
    header("location:u_login.php");
}

?>