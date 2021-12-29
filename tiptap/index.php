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
                        <a class="nav-link" aria-current="page" href="#">Home</a>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Book a Storage</a>
                    </li>
                </ul>

                <div class="btn-area-header">
                    <div class="mr-3">
                        <button class="btn-header btn--login">Login</button>
                    </div>
                    <button class="btn-header btn--signup">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========= End Navbar ========= -->

    <!-- ========= Header ========= -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Need a place to store your goods?</div>
            <div class="masthead-heading">tiptap.</div>
            <button class="btn btn-primary btn-xl text-uppercase">Book Now</button>
        </div>
    </header>
    <!-- ========= End Header ========= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="column">
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos -delay="100">
                        <div class="card ms-auto me-auto" style="width: 18rem">
                            <img class="card-img-top" src="assets/img/inside.jpeg" alt="Booking card" />
                            <div class="card-body">
                                <p class="card-title">
                                    Booking
                                </p>
                                <p class="card-text">
                                    Book a storage room to store your goods. We'll guarantee you to store that your goods will get the care it needs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card ms-auto me-auto" style="width: 18rem">
                            <img class="card-img-top" src="..." alt="Booking card" />
                            <div class="card-body">
                                <p class="card-title">
                                    Pick Up
                                </p>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card ms-auto me-auto" style="width: 18rem">
                        <img class="card-img-top" src="..." alt="Storage sale card" />
                        <div class="card-body">
                            <p class="card-title">
                                Storage Sale
                            </p>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Book Now Section -->
    <section class="book-section" id="services">
        <div class="container">
            <div class="text-center">
                <div class="section-title">
                    <h2>Here’s how the self-storage process works</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Schedule</h4>
                    <p class="text-muted">Pick a date & duration of storage</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Size</h4>
                    <p class="text-muted">Choose your room size</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Store</h4>
                    <p class="text-muted">Pack your goods and prepare to move in</p>
                </div>
            </div>
            <button class="btn btn-primary btn-xl text-uppercase btn-book">Book Now</button>
        </div>
    </section>
    <!--End Book Now Section-->

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
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

                    <div class="col-lg-4 col-md-6 ms-auto footer-right">
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
    <!--End Footer-->

</body>

</html>