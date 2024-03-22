<?php include_once "./user_session.php" ?>
<?php include_once("./header.php") ?>

<head>
    <title>OVS| Candidate Register</title>
</head>
<h2 class=" text-center mt-5 display-3 text-light">Candidate Registration</h2>
<div class="container mt-5 text-light bg-ppl  ">
    <form action="#" method="POST" enctype="multipart/form-data" class="bg-ppl">
        <div class="form-group">
            <label for="c_nm">Candidate's Name</label>
            <input type="text" class="form-control" id="c_nm" name="c_nm" required>
        </div>
        <div class="form-group">
            <label for="c_py">Political Party Affiliation or Independent</label>
            <input type="text" class="form-control" id="c_py" name="c_py" required>
        </div>
        <div class="form-group">
            <label for="c_e_id">Election </label>
            <select class="form-control" id="c_e_id" name="c_e_id" required>
                <?php include_once("./ovs_db.php"); // Fetch options from the database
                $sql = "SELECT elec_id, elec_nm FROM elections ";
                $result = mysqli_query($link, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['elec_id'] . '">' . $row['elec_nm'] . '</option>';
                    }
                } ?>
                <option value="" selected disabled> --Select Elections--</option>
            </select>
        </div>
        <div class="form-group">
            <label for="c_c"> Candidate's Constituency</label>
            <select class="form-control" id="c_c" name="c_c" required>
                <?php include_once("./ovs_db.php"); // Fetch options from the database
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
        <div class="form-group">
            <label for="c_edu">Candidate's Education</label>
            <input type="text" class="form-control" id="c_edu" name="c_edu" required>
        </div>
        <div class="form-group">
            <label for="c_ach">Candidate's Achievements</label>
            <textarea class="form-control" id="c_ach" name="c_ach" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="c_bio">Candidate's Biography</label>
            <textarea class="form-control" id="c_bio" name="c_bio" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="c_gls">Candidate's Goals</label>
            <textarea class="form-control" id="c_gls" name="c_gls" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="c_img">Candidate's Image</label>
            <input type="file" class="form-control-file" id="c_img" name="c_img" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="c_py_lg">Candidate's Party Logo</label>
            <input type="file" class="form-control-file" id="c_py_lg" name="c_py_lg" accept="image/*" required>
        </div>
        <button name="sub_btn" type="submit" class="btn btn-warning m-2">Register</button>
        <!-- validation for img files only -->
        <script>
            document.getElementById("c_img").addEventListener("change", function() {
                var fileInput = this;
                if (fileInput.files.length > 0) {
                    var fileType = fileInput.files[0].type;
                    if (!fileType.startsWith("image/")) {
                        alert("Please select a valid image file.");
                        fileInput.value = ""; // Clear the file input
                    }
                }
            });

            document.getElementById("c_py_lg").addEventListener("change", function() {
                var fileInput = this;
                if (fileInput.files.length > 0) {
                    var fileType = fileInput.files[0].type;
                    if (!fileType.startsWith("image/")) {
                        alert("Please select a valid image file.");
                        fileInput.value = ""; // Clear the file input
                    }
                }
            });
        </script>
    </form>
</div>

<?php include_once("./footer.php") ?>

<?php
if (isset($_REQUEST['sub_btn']) and !empty($_REQUEST['c_nm']) and !empty($_REQUEST['c_py'])  and !empty($_REQUEST['c_edu']) and !empty($_REQUEST['c_ach'])  and !empty($_REQUEST['c_bio']) and !empty($_REQUEST['c_gls']) and !empty($_REQUEST['c_e_id']) and !empty($_REQUEST['c_c'])) {
    include_once("./ovs_db.php");
    // Escape and sanitize user inputs
    $c_nm = mysqli_real_escape_string($link, $_REQUEST['c_nm']);
    $c_py = mysqli_real_escape_string($link, $_REQUEST['c_py']);
    $c_edu = mysqli_real_escape_string($link, $_REQUEST['c_edu']);
    $c_ach = mysqli_real_escape_string($link, $_REQUEST['c_ach']);
    $c_bio = mysqli_real_escape_string($link, $_REQUEST['c_bio']);
    $c_gls = mysqli_real_escape_string($link, $_REQUEST['c_gls']);
    // img variables
    $c_pic = $_FILES['c_img']['name'];
    $c_lg = $_FILES['c_py_lg']['name'];
    // img type validation
    $alext = array('jpeg', 'gif', 'jpg', 'png', 'PNG', 'JPEG', 'GIF', 'JPG');
    $ciname = $_FILES['c_img']['name'];
    $cplname = $_FILES['c_py_lg']['name'];
    $cinmext = pathinfo($ciname, PATHINFO_EXTENSION);
    $cplnmext = pathinfo($cplname, PATHINFO_EXTENSION);
    if (in_array($cinmext, $alext) and in_array($cplnmext, $alext)) {
        $add_qry = "INSERT INTO candidates (elec_id, c_nm, c_py, c_edu, c_ach, c_bio, c_gls, c_img, c_py_lg,cc) VALUES ($_REQUEST[c_e_id], '$c_nm', '$c_py', '$c_edu', '$c_ach', '$c_bio', '$c_gls', '$c_pic', '$c_lg', $_REQUEST[c_c])";

        // echo $add_qry;
        $x = mysqli_query($link, $add_qry);
        if ($x == 1) {
            move_uploaded_file($_FILES['c_img']['tmp_name'], 'uploads/' . $_FILES['c_img']['name']);
            move_uploaded_file($_FILES['c_py_lg']['tmp_name'], 'uploads/' . $_FILES['c_py_lg']['name']);

            echo "<p class='alert alert-success p-1 mx-3 text-center'>Candidate Request Received successfully!</p>";
        } else {
            echo "problem";
        }
    } else {
        echo "<p class='alert alert-warning mx-5'>only Images are allowed</p>";
    }
}
?>