<?php include_once("./admin_session.php")
?>
<?php include_once("./header.php") ?>
<!-- add election form box -->

<head>
    <title>OVS|Create Election</title>
</head>
<div class="container  my-2">
    <h1 class="text-center">Add Election</h1>
    <form onsubmit="return validateForm()" class="m-2" method="post" action="#">
        <div class="mb-2">
            <label for="electionName" class="form-label">Election Name</label>
            <input type="text" class="form-control" name="ctrl_nm" id="electionName" placeholder="Enter Election Name" required>
        </div>
        <div class="mb-2">
            <label for="electionDescription" class="form-label">Election Description</label>
            <textarea class="form-control" id="electionDescription" name="ctrl_desc" rows="3" placeholder="Enter Election Description" required></textarea>
        </div>
        <div class="mb-2">
            <label for="electionStartDate" class="form-label">Election Start Date and Time</label>
            <input type="datetime-local" class="form-control" name="ctrl_stdt" id="electionStartDate" required min="<?php echo date('Y-m-d\TH:i', strtotime('+1 minute')); ?>">
        </div>
        <div class="mb-2">
            <label for="electionEndDate" class="form-label">Election End Date and Time</label>
            <input type="datetime-local" class="form-control" name="ctrl_eddt" id="electionEndDate" required>
        </div>

        <div class="form-group">
            <label for="c_c"> Election's Constituency</label>
            <select class="form-control" id="c_c" name="c_c" required>
                <?php include_once("../ovs_db.php"); // Fetch options from the database
                $sqlc = "SELECT State.state_name, Constituency.constituency_name,Constituency.constituency_id FROM State JOIN Constituency ON State.state_id = Constituency.state_id;";
                $result = mysqli_query($link, $sqlc);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['constituency_id'] . '">' . $row['constituency_name'] . '</option>';
                    }
                } ?>
                <option value="" selected disabled> --Select Constituency--</option>
            </select>
        </div>

        <p id="error-message" class="text-danger"></p>
        <button type="submit" name="ad_btn" class="btn btn-primary">Add Election</button>
    </form>
</div>
<!-- script for validation -->
<script>
    function validateForm() {
        var startDate = new Date(document.getElementById("electionStartDate").value);
        var endDate = new Date(document.getElementById("electionEndDate").value);

        if (startDate > endDate) {
            document.getElementById("error-message").innerText = "Mind Ending Dates !";
            return false;
        }

        return true;
    }
</script>
<?php include_once("./footer.php") ?>
<!-- php code to add election to database -->
<?php
if (isset($_REQUEST["ad_btn"]) and !empty($_REQUEST['ctrl_nm']) and !empty($_REQUEST['ctrl_desc']) and !empty($_REQUEST['ctrl_stdt']) and !empty($_REQUEST['ctrl_eddt'])) {
    include_once("../ovs_db.php");
    $elec_st_dt = date('Y-m-d H:i:s', strtotime($_POST['ctrl_stdt']));
    $elec_ed_dt = date('Y-m-d H:i:s', strtotime($_POST['ctrl_eddt']));
    $add_qry = "INSERT INTO elections (elec_nm, elec_desc, elec_st_dt, elec_ed_dt,cc) VALUES ('$_REQUEST[ctrl_nm]','$_REQUEST[ctrl_desc]',' $elec_st_dt','$elec_ed_dt',$_REQUEST[c_c])";
    // echo $add_qry;
    $x = mysqli_query($link, $add_qry);
    if ($x == 1) {
        echo "<p class='alert alert-success p-1 mx-3 text-center'>Election created successfully!</p>";
        exit;
    }
}
?>