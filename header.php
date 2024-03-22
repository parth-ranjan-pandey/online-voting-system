<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="./multimedia/images/icn.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Neuton:ital@1&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- chartsj links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <style>
        body {
            background: #AA076B;
            background: -webkit-linear-gradient(to right, #61045F, #AA076B);
            background: linear-gradient(to right, #61045F, #AA076B);
            font-family: 'Domine', serif;
            font-size: 18px;
        }

        li.nav-item {
            border-bottom: 2px solid transparent;
            text-shadow: none;
            transition: border-bottom 0.3s ease, text-shadow 0.3s ease;
        }

        li.nav-item:hover {
            border-bottom: 2px solid #f4d06f;
            text-shadow: 1px 1px white;
        }

        .navbar {
            box-shadow: 2px 2px 7px 3px black;
            width: 100%;
        }

        .bg-ppl {
            background-color: #AA076B;
        }

        .cimg {
            min-height: 50px;
            min-width: 50px;
        }
    </style>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-dark  fixed ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h2> Online Voting System</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel text-center"> Main-Menu</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./stats.php">Previous Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./result.php">Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./c_regis.php">Candidates Register Request</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                User
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="./u_registration.php">Registration</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="./u_login.php">Caste Vote</a></li>
                                <li>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./T&c.php">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./adminovs.html" target="_blank">Admin</a>
                        </li>
                        <li class="nav-item  my-2">
                            <form action="#" method="post">
                                <input type="submit" class="btn btn-danger btn-sm" name="lgobtn" value="Logout"></input>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>