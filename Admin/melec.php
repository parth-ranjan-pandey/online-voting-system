<!-- php to toggle electionm -->
<?php
if (isset($_REQUEST['t'])) {
    include_once("../ovs_db.php");
    $t = $_REQUEST['t'];
    $tqry = "update elections set stat = CASE WHEN stat = 0 THEN 1 ELSE 0 END WHERE elec_id=$t";
    $e = mysqli_query($link, $tqry);
    if ($e) {
        header("location:melec.php");
    }
}
?>
<?php include_once("./admin_session.php") ?>
<?php include_once("./header.php") ?>
<!-- table to display elections -->

<head>
    <title>OVS|Manage Election</title>
</head>
<div class="container my-2">
    <h1 class="text-center">Enable/Disable Elections</h1>
    <div class="table-responsive ">
        <table class=" ms-3 table table-warning table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Election Starting Date</th>
                    <th>Election Endinging Date</th>
                    <th>Election Constituency</th>
                    <th>Status</th>
                    <th>Enable/Disable</th>
                </tr>
            </thead>
            <tbody>
                <!-- php to fetch details and make table feilds -->
                <?php
                include_once("../ovs_db.php");
                // $slctqry = "select * from elections";
                $slctqry = "select elections.*,	constituency.constituency_name AS cn from elections INNER JOIN constituency ON elections.cc=	constituency_id ";
                $resultset = mysqli_query($link, $slctqry);
                while ($row = mysqli_fetch_assoc($resultset)) {
                    echo "<tr>";
                    echo "<td>" . $row['elec_nm'] . "</td>";
                    echo "<td>" . $row['elec_desc'] . "</td>";
                    echo "<td>" . $row['elec_st_dt'] . "</td>";
                    echo "<td>" . $row['elec_ed_dt'] . "</td>";
                    echo "<td>" . $row['cn'] . "</td>";
                    echo "<td>" . $row['stat'] . "</td>";
                    echo "<td>" . " <a  onclick='return confirmUpdate()' href='melec.php?t=$row[elec_id]' class='btn btn-sm btn-warning'>Enable/Disable </a> " . "</td>";
                    echo "</tr>";
                }
                ?>


                <script>
                    function confirmUpdate() {
                        confirm("Are you sure you want to perform this action?")
                    }
                </script>
                <?php include_once("./footer.php") ?>