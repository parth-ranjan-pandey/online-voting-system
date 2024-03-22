<?php include_once("./user_session.php") ?>
<?php include_once("./header.php") ?>
<?php include_once("./ovs_db.php") ?>
<div name=" users details" class="m-3 d-flex justify-content-end">
    <span class="text-light">Hi, <?php echo $unm ?></span> &nbsp;
    <span class="text-light"> Your Constituency Code:<?php echo $uc ?></span>
</div>

<head>
    <title>OVS | Elections</title>
</head>
<p class="text-light align-items-right my-2 mx-2"> </p>
<section class="container my-1">
    <h1 class="text-center text-light my-1">Active Elections</h1>
    <?php $slctqry = "select elections.*,constituency.constituency_name AS cn from elections INNER JOIN constituency ON elections.cc=constituency_id where cc=$uc ";
    $resultset = mysqli_query($link, $slctqry);
    $n = mysqli_num_rows($resultset)
    ?>
    <?php if ($n > 0) { ?>
        <?php if ($ua == 1) { ?>
            <div class="table-responsive ">
                <table class=" my-2 table table-warning table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Election Constituency</th>
                            <th>Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- php to fetch details and make table feilds -->
                        <?php
                        // echo $ua;
                        while ($row = mysqli_fetch_assoc($resultset)) {
                            echo "<tr>";
                            echo "<td>" . $row['elec_nm'] . "</td>";
                            echo "<td>" . $row['elec_desc'] . "</td>";
                            echo "<td>" . $row['cn'] . "</td>";
                            echo "<td>" . " <a onclick='return confirmvote()' href='castevote.php?t=$row[elec_id]' class='btn btn-sm btn-warning'> Vote Now </a> " . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <script>
                function confirmvote() {
                    return confirm("Are you sure to vote")
                }
            </script>
        <?php } elseif ($ua == 0) {
            echo "<h2 class='alert alert-warning'> No Active Elections </h2>";
        } ?>
    <?php } elseif ($n == 0) {
        echo "<h1 class='text-center alert alert-warning mx-2'> No Active Elections ! </h1>";
    } ?>
</section>

<?php include_once("./footer.php") ?>