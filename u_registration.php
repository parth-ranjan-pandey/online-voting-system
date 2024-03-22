<?php include_once("./header.php") ?>

<head>
    <title>OVS| Registration</title>
</head>
<div class="container mt-5 bg-ppl text-light">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Voter Registration</h2>
            <form action="#" method="post" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="unm" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <small class="form-text text-warning">You must be at least 18 years old.</small>
                    <script>
                        function calculateAge(dateString) {
                            var today = new Date();
                            var birthDate = new Date(dateString);
                            var age = today.getFullYear() - birthDate.getFullYear();
                            var m = today.getMonth() - birthDate.getMonth();
                            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                                age--;
                            }
                            return age;
                        }

                        function validateForm() {
                            var dob = document.getElementById("dob").value;
                            var age = calculateAge(dob);

                            if (age < 18) {
                                alert("You must be at least 18 years old to register.");
                                return false;
                            }

                            return true;
                        }
                    </script>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
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

                <button name="ad_btn" type="submit" class="btn btn-warning btn-block m-2">Register</button>
            </form>
        </div>
    </div>
</div>

<?php include_once("./footer.php") ?>
<!-- php for user registration -->
<?php
if (isset($_REQUEST['ad_btn']) and !empty($_REQUEST['unm']) and !empty($_REQUEST['pwd'])  and !empty($_REQUEST['dob']) and !empty($_REQUEST['email'])  and !empty($_REQUEST['c_c'])) {
    include_once("./ovs_db.php");
    $add_qry = "INSERT INTO users (u_nm, u_pwd, u_mail, u_dob, cc) VALUES ('$_REQUEST[unm]', '$_REQUEST[pwd]', '$_REQUEST[email]', '$_REQUEST[dob]', '$_REQUEST[c_c]')";
    //echo $add_qry;
    $x = mysqli_query($link, $add_qry);
    if ($x == 1) {
        echo "<p class='alert alert-success p-1 mx-3 text-center'> Voter Registered Sucessfully successfully!<a href='./u_login.php'> Login </a></p>";
        exit;
    }
}
?>