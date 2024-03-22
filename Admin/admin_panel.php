<?php include_once("./admin_session.php")
?>
<?php include_once("./header.php") ?>

<head>
    <title>OVS|Admin</title>
</head>
<div class="content-wrapper my-2">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- admin functionalities boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- create election box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <b>
                                <h4>Create</h4>
                            </b>
                            <p>Election</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="./celec.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- manage election box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <b>
                                <h4>Manage</h4>
                            </b>
                            <p>Elections</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="./melec.php" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <b>
                                <h4>Manage</h4>
                            </b>
                            <p>Candidates</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="./mcandi.php" class="small-box-footer">Go<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <b>
                                <h4>See</h4>
                            </b>
                            <p>Votes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="./votes.php" class="small-box-footer">Go<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
    <?php include_once("./footer.php") ?>
    <!-- php code here -->