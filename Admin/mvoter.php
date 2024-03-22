<!-- php to enable/ disable user  -->
<?php if (isset($_REQUEST['t'])) {
    include_once("../ovs_db.php");
    $t = $_REQUEST['t'];
    $qry = "update users set active= CASE WHEN active = 0 THEN 1 ELSE 0 END WHERE cc=$t";
    // echo $qry;
    mysqli_query($link, $qry);
} ?>
<?php include_once("./admin_session.php") ?>
<?php include_once("./header.php") ?>

<head>
    <title>OVS|Manage Voters</title>
</head>
<div class="container my-2">
    <h1 class="text-center">Voter's Constituency</h1>
    <!-- voters details -->
    <div class="table table-responsive text-center">
        <table class="table-bordered table-info ms-3 table-striped ">
            <h4 class="text-center my-2 text-danger"><strong>Make Sure to register all voters before initiation of election in constituency.</strong></h4>
            <thead>
                <tr>
                    <th>Constituency</th>
                    <th>Status</th>
                    <th>Enable/Disable</th>
                </tr>
            </thead>
            <tbody>

                <?php include_once("../ovs_db.php");
                $vselect = "select users.*,constituency.constituency_name as cn from users INNER JOIN constituency on users.cc=constituency_id GROUP BY cc ";
                $result_set = mysqli_query($link, $vselect);
                ?>
                <?php while ($row = mysqli_fetch_assoc($result_set)) { ?>
                    <?php echo "<tr>";
                    echo "<td>" . $row['cn'] . "</td>";
                    echo "<td>" . $row['active'] . "</td>";
                    echo "<td>" . " <a href='mvoter.php?t=$row[cc]' class='btn btn-sm btn-warning'>Enable/Disable </a> " . "</td>";
                    echo "</tr>";
                    ?>
    </div>
<?php } ?>

<?php include_once("./footer.php") ?>