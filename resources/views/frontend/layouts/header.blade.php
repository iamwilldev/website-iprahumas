@section('header')
    <!-- ------------------------------------- -->
    <!-- Header Start -->
    <!-- ------------------------------------- -->
    <header class="header-fp p-0 w-100">
        <nav class="navbar navbar-expand-lg bg-primary-subtle py-2 py-lg-10">
            <div class="custom-container d-flex align-items-center justify-content-between">
                <a href="../main/frontend-landingpage.html" class="text-nowrap logo-img">
                    <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                    <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                </a>
                <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="ti ti-menu-2 fs-8"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary"
                                href="../main/frontend-aboutpage.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary"
                                href="../main/frontend-blogpage.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../main/index.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary"
                                href="../main/frontend-pricingpage.html">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary"
                                href="../main/frontend-contactpage.html">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3">
                        <div>
                            <a href="../main/authentication-login.html" class="btn btn-primary py-8 px-9">Log In</a>
                        </div>
                        <div>
                            <a href="../main/authentication-login.html"
                                class="btn btn-light border border-dark py-8 px-9">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ------------------------------------- -->
    <!-- Header End -->
    <!-- ------------------------------------- -->
@endsection
