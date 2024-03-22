<!-- php for user login -->
<?php
if (isset($_REQUEST['lg_btn']) and !empty($_REQUEST['vml']) and !empty($_REQUEST['vpd'])) {
    include_once("./ovs_db.php");
    $lgn_qry = "select * from users where u_mail='$_REQUEST[vml]' and u_pwd='$_REQUEST[vpd]'";
    $result_set =  mysqli_query($link, $lgn_qry);
    $n = mysqli_num_rows($result_set);
    $row = mysqli_fetch_assoc($result_set);
    if ($n == 1) {
        session_start();
        $_SESSION['u_id'] = $row['u_id'];
        $_SESSION['u_nm'] = $row['u_nm'];
        $_SESSION['u_cc'] = $row['cc'];
        $_SESSION['active'] = $row['active'];
        header("location:elections.php");
    } else {
        echo "<h3 class='text-center text-dark mt-2'> Invalid user or  Details !</h3>";
    }
}
?>
<?php include_once("./header.php") ?>
<head><title>OVS|Login</title></head>
<div class="container my-5 ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center text-light bg-ppl">
                    <h2>Voter Login</h2>
                </div>
                <div class="card-body bg-ppl">
                    <form action="#" method="POST" class="bg-ppl text-light">
                        <div class="form-group">
                            <label for="voterEmail">Email:</label>
                            <input type="email" class="form-control" id="voterEmail" name="vml" required>
                        </div>
                        <div class="form-group">
                            <label for="voterPassword">Password:</label>
                            <input type="password" class="form-control" id="voterPassword" name="vpd" required>
                        </div>
                        <button name="lg_btn" type="submit" class="btn btn-warning btn-block m-2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("./footer.php") ?>