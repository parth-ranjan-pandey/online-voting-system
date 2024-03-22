<?php include_once("./user_session.php") ?>
<?php include_once("./header.php") ?>

<head>
    <title>OVS| Result</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
</head>
<div name=" users details" class="m-3 d-flex justify-content-end">
    <span class="text-light">Hi, <?php echo $unm ?></span> &nbsp;
    <span class="text-light"> Your Constituency Code:<?php echo $uc ?></span>
</div>

<body>
    <div class="container my-3">
        <table class="table table-warning table-bordered my-2">
            <thead>
                <tr class="text-center">
                    <th>Election</th>
                    <th>Candidates</th>
                    <th>Votes Received</th>
                </tr>
            </thead>
    </div>
</body>
<?php
include_once("./ovs_db.php");
$qry =
    "SELECT candidates.*, votes.cc, votes.*, candidates.c_id, candidates.c_nm, COUNT(votes.v_id) AS votecount, elections.elec_nm FROM candidates LEFT JOIN votes ON candidates.c_id = votes.c_id LEFT JOIN elections ON candidates.elec_id = elections.elec_id WHERE sho = 1 AND votes.cc = $uc GROUP BY candidates.c_id, candidates.c_nm,elections.elec_id ORDER BY votecount DESC";
$sr = mysqli_query($link, $qry);
if ($sr) {
    echo '<tbody>';
    while ($ro = mysqli_fetch_assoc($sr)) {
        echo '<tr>';
        echo '<td>' . $ro['elec_nm'] . '</td>';
        echo '<td>' . $ro['c_nm'] . '</td>';
        echo '<td>' . $ro['votecount'] . '</td>';
        echo '</tr>';
    }
    echo '<tr>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
}
?>
<?php 

?>

<?php include_once("./footer.php") ?>