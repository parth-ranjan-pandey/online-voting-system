<?php include_once("./admin_session.php") ?>
<?php include_once("./header.php") ?>
<?php include_once("../ovs_db.php") ?>
<?php

?>

<head>
    <title>OVS|Monitor Votes</title>
</head>
<div class="container">
    <h1 class="text-center my-1"> Monitor Votes</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="#" method="post">

                <!-- election -->
                <div class="form-group">
                    <label for="elecSelect">Select Election:</label>
                    <select class="form-control" id="elecSelect" name="elec">
                        <?php
                        $query1 = "SELECT votes.*, elections.elec_nm AS en FROM votes INNER JOIN elections ON  votes.elec_id = elections.elec_id  GROUP BY elec_id";
                        $resultset = mysqli_query($link, $query1);
                        while ($row = mysqli_fetch_assoc($resultset)) {
                            echo '<option value="' . $row['elec_id'] . '">' . $row['en'] . '</option>';
                        }
                        ?>
                        <option selected disabled>Select Election</option>
                    </select>
                </div>

                <!-- constituency -->

                <div class="form-group">
                    <label for="citySelect">Select Constituency:</label>
                    <select class="form-control" id="citySelect" name="const">
                        <?php
                        $query2 = "SELECT votes.*,constituency.constituency_name AS cn FROM votes INNER JOIN constituency ON  votes.cc =constituency.constituency_id GROUP BY cc";
                        $resultset2 = mysqli_query($link, $query2);
                        while ($row2 = mysqli_fetch_assoc($resultset2)) {
                            echo '<option value="' . $row2['cc'] . '">' . $row2['cn'] . '</option>';
                        }
                        ?>
                        <option selected disabled>Select Constituency</option>
                    </select>
                </div>
                <button type="submit" name="vsub" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>
    <!-- table to show data -->
    <div class="table table-responsive my-2">
        <table class="table table-info table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Candidates</th>
                    <th>Votes Received</th>
                </tr>
            </thead>
            <?php include_once("./footer.php") ?>
            <?php
            if (isset($_REQUEST['vsub']) and !empty($_REQUEST['elec']) and !empty($_REQUEST['const'])) {
                $c = $_REQUEST['const'];
                $e = $_REQUEST['elec'];
                $qry = "select * from votes where elec_id=$e and cc=$c";
                // echo $qry;
                $q = mysqli_query($link, $qry);
                if ($q) {
                    $sqry = "SELECT candidates.c_id, candidates.c_nm, COUNT(votes.v_id) AS votecount FROM candidates LEFT JOIN votes ON candidates.c_id = votes.c_id WHERE votes.elec_id = $e AND candidates.cc = $c   GROUP BY candidates.c_id, candidates.c_nm ORDER BY votecount DESC ";
                    // echo $sqry;
                    $res = mysqli_query($link, $sqry);
                    if ($res) {
                        if ($res) {
                            echo '<tbody>';
                            while ($ro = mysqli_fetch_assoc($res)) {
                                echo '<tr>';
                                echo '<td>' . $ro['c_nm'] . '</td>';
                                echo '<td>' . $ro['votecount'] . '</td>';
                                echo '</tr>';
                            }
                            echo '<tr>';
                            echo '<th>' . "<a class='btn btn-success text-center' href='votes.php?s=$e'> Click to show <a/>" . '</th>';
                            echo '<th>' . "<a class='btn btn-danger text-center' href='votes.php?h=$e'> Click to hide <a/>" . '</th>';
                            echo '</tr>';
                            echo '</tbody>';
                            echo '</table>';
                        }
                    }
                }
            } else {
                echo "<p class='text-center'> Choose Election and Constitiuency*.</p>";
            }
            ?>
            <!-- php to show/hide vote show to user -->
            <?php
            if (isset($_REQUEST['s'])) {
                $ei = $_REQUEST['s'];
                $usqry = "update votes set sho=1 where elec_id=$ei ";
                // echo $usqry;
                $i = mysqli_query($link, $usqry);
                if ($i) {
                    echo "<h3 class='alert alert-warning text-center'> Result visible to Users </h3>";
                }
            }
            if (isset($_REQUEST['h'])) {
                $hi = $_REQUEST['h'];
                $uhqry = "update votes set sho=0 where elec_id=$hi ";
                // echo $uhqry;
                $i = mysqli_query($link, $uhqry);
                if ($i) {
                    echo "<h3 class='alert alert-warning text-center'> Result hidden from Users </h3>";
                }
            }
            ?>