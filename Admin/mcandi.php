<!-- php code for buttons -->
<!-- php code to verify candidates -->
<?php
if (isset($_GET['vid'])) {
    include_once("../ovs_db.php");
    $v = $_GET['vid'];
    $vqry = "update  candidates set stat='verified' where c_id=$v";
    echo $vqry;
    $y = mysqli_query($link, $vqry);
    if ($v) {
        // echo "<h1 class='text-center'> $v hellohello hello hello hello</h1>hello";
        header("location:mcandi.php");
    }
}
?>
<!-- php to disabble candidate -->
<?php
if (isset($_GET['did'])) {
    include_once("../ovs_db.php");
    $v = $_GET['did'];
    $vqry = "update  candidates set stat='pending' where c_id=$v";
    echo $vqry;
    $y = mysqli_query($link, $vqry);
    if ($v) {
        //  echo "<h1 class='text-center'> $v hellohello hello hello hello</h1>hello";
        header("location:mcandi.php");
    }
}
?>

<?php include_once("./admin_session.php")
?>

<head>
    <style>
        .pylg {
            height: 100px;
            width: 100px;
            border-radius: 100%;
        }
    </style>
    <title>OVS|Manage Candidates</title>
</head>
<?php include_once("./header.php") ?>
<?php include_once("../ovs_db.php") ?>
<!-- php to show candidates requests -->
<?php

// $select_qry = "select * from candidates ";
// $select_qry = "select candidates.*,elections.elec_nm AS en,constituency.constituency_name AS cn from candidates INNER JOIN constituency ON candidates.cc=constituency_id ";
$select_qry = "SELECT candidates.*,elections.elec_nm AS en,constituency.constituency_name AS cn FROM candidates INNER JOIN constituency ON candidates.cc = constituency.constituency_id INNER JOIN elections ON candidates.elec_id = elections.elec_id";
$result_set = mysqli_query($link, $select_qry);
?>
<!-- election candidates cards -->
<div class="container my-1 p-5">
    <h1 class="text-center my-2">Verify/Disable Candidates</h1>
    <section>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($result_set)) {
            ?>
                <div class="m-1 p-1">
                    <div class="card" style="width: 18rem;">
                        <img src="../uploads/<?php echo $row['c_img'] ?>" class="card-img-top img-fluid">
                        <div class="d-flex justify-content-center">
                            <span><img src="../uploads/<?php echo $row['c_py_lg'] ?>" class="img-fluid pylg "></span>
                            <div>
                                <h6><b><?php echo $row['c_py'] ?></b></h6>
                            </div>
                        </div>
                        <hr>
                        <div class="card-header">
                            <h5 class="card-title"><b><?php echo $row['c_nm'] ?></b></h5><br>
                            <h6 class="card-title"><b>Election : &nbsp;<?php echo $row['en'] ?></b></h6>
                            <h6 class="card-title"><b>Candidate Constituency : &nbsp;<?php echo $row['cn'] ?></b></h6>
                            <p class="card-text"><?php echo "<h6><b>About</b></h6>" . $row['c_bio'] ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo "<h6><b>Education</b></h6>" . $row['c_edu'] ?></li>
                            <li class="list-group-item"><?php echo "<h6><b>Acheivements</b></h6>" . $row['c_ach'] ?></li>
                            <li class="list-group-item"><?php echo "<h6><b>Manifesto</b></h6>" . $row['c_gls'] ?></li>
                        </ul>
                        <div class="card-body">
                            <span class="btn btn-warning m-1 p-1 text-center d-flex"><?php echo "Status:" . $row['stat'] ?></span>
                            <form action="mcandi.php" method="get">
                                <a href="mcandi.php?vid=<?php echo $row['c_id'] ?>" class="card-link btn btn-success">Verify</a>
                                <a href="mcandi.php?did=<?php echo $row['c_id'] ?>" class="card-link btn btn-danger">Disable</a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>

<?php include_once("./footer.php") ?>