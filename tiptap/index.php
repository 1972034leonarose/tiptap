<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png">
    <title>TipTap</title>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Standard CSS -->
    <link href="assets/css/style-index.css" rel="stylesheet" />
    <link href="assets/css/style-login.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="logo" class="img-fluid" /></a>

            <!-- mobile toggle  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list mobile-nav-toggle"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?mn=home">Home</a>

                    <li class="nav-item">
                        <a class="nav-link" href="?mn=about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?mn=contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?mn=book">Book a Storage</a>
                    </li>
                </ul>

                <div class="btn-area-header">
                    <div class="mr-3">
                        <button class="btn btn-header btn--login"><a href="?mn=login" style="color: #d3455b; padding:0;">Login</a></button>
                    </div>
                    <button class="btn btn-header btn--signup"><a href="?mn=signup" style="color:white; padding:0;">Sign Up</a></button>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========= End Navbar ========= -->

    <?php
    $menu = filter_input(INPUT_GET, "mn");
    switch ($menu) {
        case "home":
            include_once 'pages/home.php';
            break;
        case "about":
            include_once 'index.php';
            break;
        case "contact":
            include_once 'index.php';
            break;
        case "book":
            include_once 'index.php';
            break;
        case "signup":
            include_once 'pages/signup-page.php';
            break;
        case "login":
            include_once 'pages/login-page.php';
            break;
        default:
            include_once 'pages/home.php';
    };
    ?>
</body>

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer-contact">
                    <div class="icon-text">
                        <span style="padding-right: 20px">
                            <i class="fas fa-laptop"></i>
                        </span>
                        <p>Jl. Surya Sumantri
                            <br> <strong>Bandung, Indonesia</strong>
                        </p>
                    </div>

                    <div class="icon-text">
                        <span style="padding-right: 20px">
                            <i class="fas fa-laptop"></i>
                        </span>
                        <p>TipTapMantap@gmail.com</p>
                    </div>

                    <div class="icon-text">
                        <span style="padding-right: 20px">
                            <i class="fas fa-laptop"></i>
                        </span>
                        <p>+62 089887689</p>
                    </div>
                </div>

                <div class="col-lg-4 ms-auto footer-right">
                    <h4>TipTap</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magnaTamen quem nulla quae legam multos aute sint culpa legam noster magnaTamen quem nulla quae legam multos aute sint culpa legam noster magnaTamen quem nulla quae
                        legam multos aute sint culpa legam noster magna</p>

                </div>
            </div>
        </div>
    </div>

    <div class="d-md-flex py-4 footer-credits">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Leona&Exelonia</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="instagram"><i class="fab fa-facebook-square"></i></a>
        </div>
    </div>
</footer>
<!-- ======= End Footer ======= -->

</html>