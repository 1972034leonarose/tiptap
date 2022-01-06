<nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a href="index.php" class="logo me-auto"><img src="{{url('/img/logo.png')}}" alt="logo" class="img-fluid" /></a>

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