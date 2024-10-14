@extends('frontend.layouts.main')
@include('frontend.layouts.header')
@include('frontend.layouts.footer')

@section('contents')
    <div class="main-wrapper overflow-hidden">
        <!-- ------------------------------------- -->
        <!-- banner Start -->
        <!-- ------------------------------------- -->
        <Section class="bg-primary-subtle pt-7 py-lg-0 py-7">
            <div class="custom-container">
                <div class="row justify-content-center pt-lg-5 mb-4">
                    <div class="col-lg-8">
                        <h1 class="text-link-color fw-bolder text-center fs-13 mb-0 pt-lg-2">
                            Most powerful & <span class="text-primary">developer friendly</span> dashboard
                        </h1>
                    </div>
                </div>
                <div class="row align-items-end mb-3">
                    <div class="col-lg-3 d-none d-lg-block">
                        <img src="../assets/images/frontend-pages/banner-top-left.svg" class="ms-n2 w-100"
                            alt="banner-top-left">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center align-items-center gap-9">
                            <ul class="hstack mb-0">
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="../assets/images/profile/user-5.jpg"
                                            class="rounded-circle border border-2 border-white" width="40"
                                            height="40" alt="modernize-img">
                                    </a>
                                </li>
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="../assets/images/profile/user-2.jpg"
                                            class="rounded-circle border border-2 border-white" width="40"
                                            height="40" alt="modernize-img">
                                    </a>
                                </li>
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="../assets/images/profile/user-6.jpg"
                                            class="rounded-circle border border-2 border-white" width="40"
                                            height="40" alt="modernize-img">
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted fs-5 mb-0 fw-bold">52,589+ developers & agencies using our templates
                            </p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-4 my-4 position-relative z-1">
                            <a href="../main/authentication-login.html" class="btn btn-primary">Log In</a>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0)"
                                class="text-dark fs-4 d-flex align-items-center gap-3 fw-bold">
                                <span
                                    class="fs-7 text-primary border border-2 rounded-circle p-6 d-flex align-items-center justify-content-center border-primary">
                                    <iconify-icon icon="bi:play-fill"></iconify-icon>
                                </span>
                                See how it works
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center gap-9 position-relative z-1 pb-lg-13">
                            <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Bootstrap">
                                <img src="../assets/images/frontend-pages/icon-bootstrap.svg" width="28" height="28"
                                    alt="icon" />
                            </a>
                            <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Sass">
                                <img src="../assets/images/frontend-pages/icon-sass.svg" width="28" height="28"
                                    alt="icon" />
                            </a>
                            <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Gulp">
                                <img src="../assets/images/frontend-pages/icon-gulp.svg" width="28" height="28"
                                    alt="icon" />
                            </a>
                            <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Figma">
                                <img src="../assets/images/frontend-pages/icon-figma.svg" width="24" height="24"
                                    alt="icon" />
                            </a>
                            <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow"
                                href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Apexchart">
                                <img src="../assets/images/frontend-pages/icon-apexchart.svg" width="24" height="24"
                                    alt="icon" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <img src="../assets/images/frontend-pages/banner-top-right.svg" class="me-n2 w-100"
                            alt="banner-top-right">
                    </div>
                </div>
                <div class="row d-none d-lg-block">
                    <div class="col-12">
                        <img src="../assets/images/frontend-pages/bottom-part.svg" alt="screenshots" class="w-100">
                    </div>
                </div>
            </div>
        </Section>
        <!-- ------------------------------------- -->
        <!-- banner End -->
        <!-- ------------------------------------- -->

        <section class="bg-primary py-9">
            <div class="container-fluid">
                {{-- badge --}}
                <div class="d-flex gap-3 justify-content-center align-items-center flex-md-nowrap flex-wrap">
                    <span class="badge text-bg-danger p-2">Information Today</span>
                    <p class="text-white fs-4 mb-0 text-md-start text-center">Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit.</p>
                </div>
            </div>
        </section>

        <!-- ------------------------------------- -->
        <!-- Service Start -->
        <!-- ------------------------------------- -->
        <section class="pt-5 pt-md-14 pt-lg-12 pb-4 pb-md-5 pb-lg-14">
            <div class="container-fluid">
                <div class="ml-3 text-center mb-5">
                    <h2 class="fs-10 fw-bolder">Services</h2>
                    <p class="fs-4 mb-0">
                        Temukan berbagai service menarik yang kamu butuhkan disini
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-4 col-6">
                        <div class="card hover-img text-black border-1">
                            <div class="card-body p-4">
                                <span>
                                    <i class="ti ti-layout-grid fs-8"></i>
                                </span>
                                <h4 class="card-title mt-3 mb-0 text-black">450</h4>
                                <p class="card-text text-black opacity-75 fs-3 fw-normal">
                                    New Products
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- Service End -->
        <!-- ------------------------------------- -->

        <!-- ------------------------------------- -->
        <!-- List Start -->
        <!-- ------------------------------------- -->
        <section class="pt-5 pt-md-14 pt-lg-12 pb-4 pb-md-5 pb-lg-14">
            <div class="container-fluid">
                <div class="ml-3 text-center mb-5">
                    <h2 class="fs-10 fw-bolder">Rilis Media</h2>
                    <p class="fs-4 mb-0">
                        Berita, Artikel, dan Pengumuman Terbaru
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                            <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                                <img src="../assets/images/blog/blog-img1.jpg" alt="blog image" class="w-100 img-fluid">
                                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                                </div>
                                <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                        width="44px" height="44px">
                                </div>
                            </a>
                            <div class="mt-10 px-7 pb-7 h-100">
                                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                        <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                            Web Development
                                        </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                        The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                        Explore the latest trends and technologies that are shaping the future of web
                                        development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-9">
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ti ti-circle fs-2"></i>
                                            <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-3 text-center mb-5">
                    <button class="btn btn-primary px-9 py-6">Learn More</button>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- List End -->
        <!-- ------------------------------------- -->
    </div>
@endsection
