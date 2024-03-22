<?php include_once("./header.php") ?>

<head>
    <title>OVS| Prev. Stats</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<div class="container">
    <div class="row">
        <!-- chart 1 votes received 2021 -->
        <div class="col-md-6 col-sm-12 col-lg-12">
            <h1 class="display-2 text-center m-2 text-white"> Votes Received In 2021</h1>
            <canvas id="myChart" style="background-color:aliceblue" class="m-2 p-2"></canvas>

            <script>
                var xValues = ["Candidate A", "Candidiate B", "Candidate C", "Candidate D", "Candidate E"];
                var yValues = [7086, 6585, 7412, 6404, 8593];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("myChart", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "Votes Received In Year 2021 "
                        }
                    }
                });
            </script>
        </div>
        <!-- chart votes received in 2022 -->
        <div class="col-md-6 col-sm-12 col-lg-12">
            <h1 class="display-2 text-center m-2 text-white"> Votes Received In 2022</h1>
            <canvas id="myChart2" style="background-color:wheat" class="m-2 p-2"></canvas>

            <script>
                var xValues = ["Candidate A", "Candidiate B", "Candidate C", "Candidate D", "Candidate E"];
                var yValues = [6453, 7674, 3436, 8554, 2544];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("myChart2", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "Votes Received In Year 2022 "
                        }
                    }
                });
            </script>
        </div>
        <!-- vote share in 2021  pi chart   -->
        <div class="col-md-6 col-sm-12 col-lg-12 justify-content-center">
            <h1 class="display-2 text-center m-2 text-white"> Vote Share In 2021</h1>
            <canvas id="pyChart21" style="width:100%;max-width:600px ;background-color:aliceblue"></canvas>

            <script>
                var xValues = ["Candidate A", "Candidiate B", "Candidate C", "Candidate D", "Candidate E"];
                var yValues = ["19.64", "18.25", "20.54", "17.75", "23.82"];
                var barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ];

                new Chart("pyChart21", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Vote Share in 2021 Elections"
                        }
                    }
                });
            </script>
        </div>
        <!-- vote share in 2022  pi chart   -->
        <div class="col-md-6 col-sm-12 col-lg-12 justify-content-center">
            <h1 class="display-2 text-center m-2 text-white"> Vote Share In 2022</h1>
            <canvas id="pyChart22" style="width:100%;max-width:600px ;background-color:wheat"></canvas>

            <script>
                var xValues = ["Candidate A", "Candidiate B", "Candidate C", "Candidate D", "Candidate E"];
                var yValues = ["22.51", "26.78", "11.99", "29.85", "8.88"];
                var barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ];

                new Chart("pyChart22", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Vote Share in 2022 Elections"
                        }
                    }
                });
            </script>
        </div>
    </div>
</div>

<?php include_once("./footer.php") ?>