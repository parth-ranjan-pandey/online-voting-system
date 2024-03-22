<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../multimedia/images/ovsicni.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OVS | Admin Log in</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.css">
    <link rel="shortcut icon" href="../multimedia/images/ovsicn.ico" type="image/x-icon">
</head>

<body class="hold-transition login-page" style="background-color: #735290;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center" style="background-color: #F2D398;">
                <a href="#" class="h1"><b>Admin</b>OVS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="ctrl_nm" class="form-control" placeholder="admin name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="ctrl_pwd" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" name="lg_btn" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>
<!-- admin login code -->
<?php
if (isset($_REQUEST['lg_btn']) and !empty($_REQUEST['ctrl_nm']) and !empty($_REQUEST['ctrl_pwd'])) {
    include_once("../ovs_db.php");
    $lgn_qry = "select * from admins where ad_nm='$_REQUEST[ctrl_nm]' and ad_pwd='$_REQUEST[ctrl_pwd]'";
    $result_set =  mysqli_query($link, $lgn_qry);
    $n = mysqli_num_rows($result_set);
    $row = mysqli_fetch_assoc($result_set);
    if ($n == 1) {
        session_start();
        $u = $_SESSION['admin_id'] = $row['ad_id'];
        $n = $_SESSION['admin_nm'] = $row['ad_nm'];
        header("location:admin_panel.php");
        exit;
    } else {
        echo "<h3 class='text-center text-dark mt-2'> Invalid user or  Details !</h3>";
    }
}
?>