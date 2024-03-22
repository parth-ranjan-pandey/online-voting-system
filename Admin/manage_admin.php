<?php include_once("./admin_session.php") ?>
<?php include_once("./header.php") ?>

<head>
    <title>OVS|Manage Admin</title>
</head>
<div class="container my-1">
    <div class="container my-1 p-2">
        <h1 class="text-center">Manage Admin</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 my-2">
                <div class="card">
                    <div class="card-header">
                        Admin Management
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="adminName">Admin Name</label>
                                <input name="anm" type="text" class="form-control" id="adminName" placeholder="Enter admin name" required>
                            </div>
                            <div class="form-group">
                                <label for="adminPassword">Admin New Password</label>
                                <input name="apd" type="password" class="form-control" id="adminPassword" placeholder="Enter admin password" required>
                            </div>
                            <button type="submit" name="upd_btn" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("./footer.php") ?>

    <!-- php to update admin passsword and name -->
    <?php
    if (isset($_REQUEST['upd_btn']) and !empty($_REQUEST['anm']) and !empty($_REQUEST['apd'])) {
        include_once("../ovs_db.php");
        $a = $_SESSION['admin_id'];
        $upd_qry = "UPDATE admins SET ad_nm ='$_REQUEST[anm]' , ad_pwd = '$_REQUEST[apd]' where ad_id = $a";
        // echo $upd_qry;
        $m = mysqli_query($link, $upd_qry);
        if ($m) {
            echo "<p class='alert alert-success text-center'> Updated Sucessfully! </p>";
        }
    }

    ?>