<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management System || Home Page</title>

    <!-- Custom Theme files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'PT Sans', sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #007bff;
            text-decoration: none;
        }

        .header-agile {
            text-align: center;
            padding: 20px 0;
        }

        .header-agile h1 a {
            font-family: 'Amaranth', sans-serif;
            font-size: 2em;
            color: #333;
        }

        .nav-pills .nav-link {
            color: #333;
            font-weight: 600;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .btn-theme {
            background-color: #007bff;
            border: none;
        }

        .w3ls-banner {
            background: #007bff;
            color: #fff;
            padding: 100px 0;
            height: 100vh;
        }

        .bnr-w3pvt {
            max-width: 700px;
        }

        .bnr-w3pvt h4 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .bnr-w3pvt h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .bnr-w3pvt p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .footer-bottom {
            background: #f8f9fa;
            padding: 20px 0;
        }

        .footer-copy {
            color: #333;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-agile h1 a {
                font-size: 1.5em;
            }

            .bnr-w3pvt h2 {
                font-size: 2.5em;
            }
        }

        @media (max-width: 576px) {
            .header-agile h1 a {
                font-size: 1.2em;
            }

            .bnr-w3pvt h2 {
                font-size: 2em;
            }
        }
    </style>

    <script>
        window.addEventListener("load", function () {
            window.scrollTo(0, 1);
        });

        $(document).ready(function () {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });

        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2) {
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            } else {
                document.getElementById("password2").setCustomValidity('');
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Header -->
            <div class="col-lg-2" id="spy">
                <div class="header-agile">
                    <h1>
                        <a class="navbar-brand" href="index.php">CMS</a>
                    </h1>
                </div>
                <ul class="nav nav-pills flex-column mt-lg-5">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <button type="button" class="btn btn-block mt-lg-5 mt-3 w3ls-btn p-1 btn-theme text-white text-uppercase font-weight-bold">
                        <a class="nav-link text-white" href="admin/index.php">Admin</a>
                    </button>
                    <button type="button" class="btn btn-block mt-lg-5 mt-3 w3ls-btn p-1 btn-theme text-white text-uppercase font-weight-bold">
                        <a class="nav-link text-white" href="client/index.php">Client</a>
                    </button>
                </ul>
            </div>
            <!-- Main -->
            <div class="col-lg-10 scrollspy-example pr-0" data-spy="scroll" data-target="#spy">
                <!-- Banner -->
                <div id="home" class="w3ls-banner d-flex align-items-center justify-content-center">
                    <div class="bnr-w3pvt text-center">
                        <h4>Welcome to!!</h4>
                        <h2 class="bnr-txt-w3">Client Management System</h2>
                        <p>Developed BY Prayangshu</p>
                    </div>
                </div>
                <!-- Contact -->
                <div id="contact" class="pt-lg-5">
                    <div class="section">
                        <div class="footer-bottom py-lg-5 py-3">
                            <div class="footer-copy text-center">
                                <p class="text-dark">2024 Client Management System</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
