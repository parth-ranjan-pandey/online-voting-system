<?php include_once("./user_session.php")
?>
<?php include_once("./header.php") ?>
<?php include_once("./ovs_db.php") ?>
<!-- session user variables -->
<?php
?>
<div name=" users details" class="m-3 d-flex justify-content-end">
    <span class="text-light">Hi, <?php echo $unm ?></span> &nbsp;
    <span class="text-light"> Your Constituency Code:<?php echo $uc ?></span>
</div>

<head>
    <style>
        .pylg {
            height: 100px;
            width: 100px;
            border-radius: 100%;
        }
    </style>
    <title>OVS| Caste Vote </title>
</head>
<?php
// $eid = $_REQUEST['t'];
if (isset($_REQUEST['t'])) {
    $eid = $_REQUEST['t'];
?>
    <?php
    // echo $eid;
    $ucqry = "SELECT COUNT(*) AS vote_count FROM votes WHERE u_id =$uid AND elec_id = $eid;";
    // echo $ucqry;
    $tr = mysqli_query($link, $ucqry);
    if ($tr) {
        $result = mysqli_fetch_assoc($tr);
        $vcnt = $result['vote_count'];
        // echo $vcnt;
        if ($vcnt > 0) {
            echo "<h1 class='alert alert-warning text-center p-1 m-2'> Already voted !</h1>";
        } else if ($vcnt == 0) { ?>
            <!-- php if user is active -->
            <?php if ($ua == 1) { ?>

                <!-- php to check if user has casted vote ot not -->

                <!-- php to show candidates -->
                <?php
                $select_qry = "select * from candidates where stat='verified' and cc=$uc and elec_id=$eid";
                $result_set = mysqli_query($link, $select_qry);
                ?>

                <!-- election candidates cards -->
                <div class="container">
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_assoc($result_set)) {
                        ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="card mx-4 mt-4 p-2">
                                    <img src="./uploads/<?php echo $row['c_img'] ?>" class="card-img-top img-fluid">
                                    <div class="d-flex justify-content-center">
                                        <span><img src="./uploads/<?php echo $row['c_py_lg'] ?>" class="img-fluid pylg "></span>
                                    </div>
                                    <!-- election id -->
                                    <span> <?php $tt = $row['elec_id']; ?> </span>
                                    <hr>
                                    <div class="card-header">
                                        <h5 class="card-title"><b><?php echo $row['c_nm'] ?></b></h5>
                                        <div>
                                            <h6><b><?php echo $row['c_py'] ?></b></h6>
                                        </div>
                                        <p class="card-text"><?php echo "<h6><b>About</b></h6>" . $row['c_bio'] ?></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?php echo "<h6><b>Education</b></h6>" . $row['c_edu'] ?></li>
                                        <li class="list-group-item"><?php echo "<h6><b>Acheivements</b></h6>" . $row['c_ach'] ?></li>
                                        <li class="list-group-item"><?php echo "<h6><b>Manifesto</b></h6>" . $row['c_gls'] ?></li>
                                    </ul>
                                    <!-- vtbtn -->
                                    <div class="card-body">
                                        <form method="get" action="castevote.php" enctype="multipart/form-data">
                                            <a href="castevote.php?uv=<?php echo $row['c_id'] ?> &ee=<?php echo $row['elec_id'] ?>" class="card-link btn btn-success" data-candidate-id="<?php echo $row['c_id'] ?>" data-candidate-name="<?php echo $row['c_nm'] ?>" onclick="return confirmVote(this)">Vote</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- js for vote cinfirmation -->
                <script>
                    function confirmVote(anchor) {
                        const candidateId = anchor.getAttribute('data-candidate-id');
                        const candidateName = anchor.getAttribute('data-candidate-name');

                        if (candidateId) {
                            const isConfirmed = confirm(`Are you sure you want to vote for ${candidateName}?`);

                            if (!isConfirmed) {
                                alert('Vote canceled.');
                                return false;
                            }
                        } else {
                            alert('Invalid candidate selection.');
                            return false;
                        }
                        return true;
                    }
                </script>
                <?php include_once("./footer.php") ?>
            <?php } elseif ($ua = 0) {
                echo "<h2 class='alert alert-warning'> You Are Not Allowed to Vote!";
            } ?>
    <?php  }
    } ?>

    <!-- js to Disable the ability to navigate back to the previous page -->
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>
<?php } ?>
<!-- php code for casting user's vote -->
<?php
if (isset($_GET['uv'])) {
    $cc = $_GET['uv'];
    $ed = $_GET['ee'];
    $uvqry = "insert into votes (u_id,c_id,voted,elec_id,cc) values ($uid,$cc,1,$ed,$uc) ";
    // echo $uvqry;
    $w = mysqli_query($link, $uvqry);
    if ($w) {
        echo "<h1 class='alert alert-warning mx-1'> Vote Casted Successfully </h1>";
    }
}
?>