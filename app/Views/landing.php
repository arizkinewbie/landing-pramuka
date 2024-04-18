<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Home')); ?>

    <!--Swiper slider css-->
    <link href="/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

    <!-- Style text bbrown -->
    <style>
        .text-brown {
            color: brown;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <span class="logo-txt">#Warta</span><span class="text-brown">DewanKerja</span>
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plans">Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team">Team</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="">
                                <h5 class="fs-14 mb-0 text-muted me-2">Light</h5>
                                <div class="form-check form-switch" onclick="toggleDarkMode()">
                                    <input class="form-check-input" type="checkbox" id="plan-switch">
                                    <label class="form-check-label" for="mode-switch"></label>
                                </div>
                                <h5 class="fs-14 mb-0 text-muted">Dark</h5>
                            </a>
                        </li>
                    </ul>
                    <div class="">
                        <a href="https://www.instagram.com/dk_nasional/" class="btn btn-soft-primary">Ikuti Kami</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center mt-lg-5 pt-5">
                            <h1 class="display-6 fw-semibold mb-3 lh-base">Official Account of National Rover Scout Council of Indonesia <span class="text-brown">Kwartir Nasional Gerakan Pramuka</span></h1>
                            <p class="lead text-muted lh-base">#SetiapPramukaAdalahPerwarta</p>

                            <div class="d-flex gap-2 justify-content-center mt-4">
                                <a href="https://pramuka.or.id/" class="btn btn-primary" title="Gerakan Pramuka">Visit Website<i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>

                        <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                            <div class="demo-img-patten-top d-none d-sm-block">
                                <img src="/assets/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
                            </div>
                            <div class="demo-img-patten-bottom d-none d-sm-block">
                                <img src="/assets/images/landing/img-pattern.png" class="d-block img-fluid" alt="...">
                            </div>
                            <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <img src="/assets/images/1.jpg" class="d-block w-100 mx-auto" alt="..." title="#DewanKerjaBermanfaat">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/images/2.jpg" class="d-block w-100 mx-auto" alt="..." title="#DewanKerjaBermanfaat">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/images/3.jpg" class="d-block w-100 mx-auto" alt="..." title="#DewanKerjaBermanfaat">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                        <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                        </path>
                    </g>
                </svg>
            </div>
            <!-- end shape -->
        </section>
        <!-- end hero section -->

        <!-- start client section -->
        <div class="pt-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="text-center mt-5">
                            <h5 class="fs-20">Supported by</span></h5>

                            <!-- Swiper -->
                            <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="https://pramuka.or.id/assets/uploads/2022/01/logo-pramuka.png" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="https://pramuka.id/assets/uploads/2022/10/warta-gerakan-pramuka-small.png" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/ambilperan-logo.png" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="assets/images/karyabakti-logo.png" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="https://madupramuka.co.id/wp-content/uploads/2021/04/logo-madu-pramuka-web.png" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-images">
                                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgl5ABU86kzEQhou7wSOqEdj83ki3XQl2dczXZ8OcPI5y6Jc2-Kc3f_lsGeNxSxC_NUDLHkXO5J60Lj3yJeITC436Z5THhn4BlqkYv33VKI9w4lHj44tsVCM22ibCjkTbkg_-Uu-Vhl1zFPnUZ1LzY-4sVG1KgGr5suOp1kxaKVKDSjXtPEpBSBRXhi8Q=w1200-h630-p-k-no-nu" alt="client-img" class="mx-auto img-fluid d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end client section -->

        <!-- start features -->
        <section class="section bg-light py-5" id="features">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 col-sm-7 mx-auto">
                        <div>
                            <img src="/assets/images/logo-sm.png" alt="" class="img-fluid w-50 d-block mx-auto">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <h3 class="mb-3 fs-20">Tentang Dewan Kerja Nasional</h3>
                            <p class="mb-4 ff-secondary fs-16">Dewan Kerja Nasional (DKN) adalah lembaga tinggi Pramuka Penegak dan Pandega yang bertugas mengkoordinasikan kegiatan kepramukaan di tingkat nasional. DKN terdiri dari anggota terpilih yang berdedikasi untuk meningkatkan kualitas dan cakupan program kepramukaan di Indonesia.</p>
                            <h5>#DewanKerjaBermanfaat</h5>
                            <!-- Default Modals -->
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal">Program Kerja</button>
                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="text-center mb-5">
                                                        <h3 class="mb-3 fw-semibold">Program Utama</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row text-center">
                                                <div class="col-lg-4">
                                                    <div class="process-card mt-4">
                                                        <div class="process-arrow-img d-none d-lg-block">
                                                            <img src="/assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="avatar-sm icon-effect mx-auto mb-4">
                                                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                                                <i class="ri-quill-pen-line"></i>
                                                            </div>
                                                        </div>

                                                        <h5>Pelatihan Kepemimpinan</h5>
                                                        <p class="text-muted ff-secondary">Program pelatihan untuk mengembangkan keterampilan kepemimpinan dan manajemen organisasi.</p>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-4">
                                                    <div class="process-card mt-4">
                                                        <div class="process-arrow-img d-none d-lg-block">
                                                            <img src="/assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="avatar-sm icon-effect mx-auto mb-4">
                                                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                                                <i class="ri-user-follow-line"></i>
                                                            </div>
                                                        </div>

                                                        <h5>Kegiatan Sosial dan Komunitas</h5>
                                                        <p class="text-muted ff-secondary">Inisiatif yang bertujuan untuk memberikan dampak positif pada masyarakat melalui kegiatan sukarelawan dan sosial.</p>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-4">
                                                    <div class="process-card mt-4">
                                                        <div class="avatar-sm icon-effect mx-auto mb-4">
                                                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                                                <i class="ri-book-mark-line"></i>
                                                            </div>
                                                        </div>

                                                        <h5>Penelitian dan Pengembangan</h5>
                                                        <p class="text-muted ff-secondary">Kegiatan yang mendukung penelitian dan pengembangan metode serta materi kepramukaan yang relevan dengan tantangan zaman.</p>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <div class="row pt-3">
                                <div class="col-4">
                                    <h4>2023-2028</h4>
                                    <p>Masa Bakti</p>

                                </div>
                                <div class="col-4">
                                    <h4>150+</h4>
                                    <p>Anggota</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end features -->

        <!-- start blog -->
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Our Latest <span class="text-primary">News</span></h1>
                            <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://pramuka.id/assets/uploads/2024/04/WhatsApp-Image-2024-04-05-at-16.13.13-e1712385517692-750x491.jpeg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="card-body">
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 06 Apr, 2024
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 364 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>Ketua Kwarnas Kukuhkan Dewan Kerja Nasional Masa Bakti 2023-2028</h5>
                                </a>
                                <p class="text-muted fs-14">JAKARTA - Pengukuhan dan pelantikan pengurus Dewan Kerja Nasional Masa Bakti Tahun 2023-2028. Pengukuhan tersebut berlangsung di Gedung Kwartir Nasional, pada Jumat (5/4/2024) siang.</p>

                                <div>
                                    <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://munas2023.pramuka.or.id/assets/uploads/2024/04/pelantikan-pimpinan-kwarnas-2023-2028.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="card-body">
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 23 Sept, 2021
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 354 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>Jajaran Pengurus Kwarnas Masa Bakti 2023-2028 Resmi Dilantik</h5>
                                </a>
                                <p class="text-muted fs-14">JAKARTA — Kak Budi Waseso beserta seluruh jajaran pengurus Kwartir Nasional Gerakan Pramuka masa bakti 2023-2028 resmi dilantik oleh Presiden Joko Widodo di Istana Negara pada Jumat, 5 April 2024.</p>

                                <div>
                                    <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://munas2023.pramuka.or.id/assets/uploads/2023/12/munas-lancar.jpg" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="card-body">
                                <ul class="list-inline fs-14 text-muted">
                                    <li class="list-inline-item">
                                        <i class="ri-calendar-line align-bottom me-1"></i> 05 Apr, 2024
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ri-message-2-line align-bottom me-1"></i> 245 Comment
                                    </li>
                                </ul>
                                <a href="javascript:void(0);">
                                    <h5>Kak Budi Waseso Terpilih secara Aklamasi sebagai Ketua Kwarnas Masa Bakti 2023-2028</h5>
                                </a>
                                <p class="text-muted fs-14">BANDA ACEH — Kak Komjen Pol. (Purn) Drs. Budi Waseso terpilih secara aklamasi sebagai Ketua Kwartir Nasional (Kwarnas) Gerakan Pramuka Masa Bakti 2023-2028.</p>
                                <div>
                                    <a href="#!" class="link-success">Learn More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end blog -->

        <!-- start plan -->
        <section class="section bg-light" id="plans">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                            <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you business.</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <h5 class="fs-14 mb-0">Month</h5>
                                </div>
                                <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                    <input class="form-check-input" type="checkbox" id="plan-switch">
                                    <label class="form-check-label" for="plan-switch"></label>
                                </div>
                                <div>
                                    <h5 class="fs-14 mb-0">Annual <span class="badge bg-success-subtle text-success">Save 20%</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Basic Plan</h5>
                                        <p class="text-muted mb-0">For Startup</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-book-mark-line fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">19</span> <span class="fs-13 text-muted">/Month</span></h1>
                                    <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">171</span> <span class="fs-13 text-muted">/Year</span></h1>
                                </div>

                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Upto <b>3</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Upto <b>299</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>5</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0 ribbon-box right">
                            <div class="card-body p-4 m-2">
                                <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Pro Business</h5>
                                        <p class="text-muted mb-0">Professional plans</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-medal-fill fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">29</span> <span class="fs-13 text-muted">/Month</span></h1>
                                    <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">261</span> <span class="fs-13 text-muted">/Year</span></h1>
                                </div>

                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Upto <b>15</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>12</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-danger me-1">
                                                    <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card plan-box mb-0">
                            <div class="card-body p-4 m-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-semibold">Platinum Plan</h5>
                                        <p class="text-muted mb-0">Enterprise Businesses</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary">
                                            <i class="ri-stack-fill fs-20"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <h1 class="month"><sup><small>$</small></sup><span class="ff-secondary fw-bold">39</span> <span class="fs-13 text-muted">/Month</span></h1>
                                    <h1 class="annual"><sup><small>$</small></sup><span class="ff-secondary fw-bold">351</span> <span class="fs-13 text-muted">/Year</span></h1>
                                </div>

                                <div>
                                    <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 text-success me-1">
                                                    <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!-- end container -->
        </section>
        <!-- end plan -->

        <!-- start faqs -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                            <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!</p>

                            <div class="hstack gap-2 justify-content-center">
                                <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row g-lg-5 g-4">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 me-1">
                                <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-0 fw-semibold">General Questions</h5>
                            </div>
                        </div>
                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore saepe esse hic delectus fugiat rerum aspernatur. Nemo velit recusandae odio quia vero similique, debitis repudiandae accusantium, ratione possimus soluta impedit.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        Lorem ipsum dolor sit?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body ff-secondary">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor fugiat laborum unde id consectetur, eveniet aspernatur inventore totam at impedit eaque tempora nisi exercitationem tenetur veritatis facilis! Dolore, odio itaque!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end faqs -->

        <!-- start review -->
        <section class="section bg-primary" id="reviews">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <div>
                                <i class="ri-double-quotes-l text-success display-3"></i>
                            </div>
                            <h4 class="text-white mb-5"><span class="text-success">19k</span>+ Satisfied clients</h4>

                            <!-- Swiper -->
                            <div class="swiper client-review-swiper rounded" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" I am givng 5 stars. Theme is great and everyone one stuff everything in theme. Future request should not affect current state of theme. "</p>

                                                    <div>
                                                        <h5 class="text-white">gregoriusus</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Awesome support. Had few issues while setting up because of my device, the support team helped me fix them up in a day. Everything looks clean and good. Highly recommended! "</p>

                                                    <div>
                                                        <h5 class="text-white">GeekyGreenOwl</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Amazing template, Redux store and components is nicely designed. It's a great start point for an admin based project. Clean Code and good documentation. Template is completely in React and absolutely no usage of jQuery "</p>

                                                    <div>
                                                        <h5 class="text-white">sreeks456</h5>
                                                        <p>- Veltrix User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                </div>
                                <div class="swiper-button-next bg-white rounded-circle"></div>
                                <div class="swiper-button-prev bg-white rounded-circle"></div>
                                <div class="swiper-pagination position-relative mt-2"></div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end review -->

        <!-- start team -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Our <span class="text-danger">Team</span></h3>
                            <p class="text-muted mb-4 ff-secondary">To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce the grammar.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Nancy Martino</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Team Leader</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-10.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Henry Baird</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Frank Hook</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Project Manager</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-8.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Donald Palmer</a></h5>
                                <p class="text-muted mb-0 ff-secondary">UI/UX Designer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-5.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Erica Kernan</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Web Designer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Alexis Clarke</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Backend Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-6.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Marie Ward</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-xl mx-auto mb-4 position-relative">
                                    <img src="/assets/images/users/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
                                    <a href="apps-mailbox" class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                        <div class="avatar-title bg-transparent">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- end card body -->
                                <h5 class="mb-1"><a href="pages-profile" class="text-body">Jack Gough</a></h5>
                                <p class="text-muted mb-0 ff-secondary">React Js Developer</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-2">
                            <a href="pages-team" class="btn btn-primary">View All Members <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end team -->

        <!-- start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                            <p class="text-muted mb-4 ff-secondary">Sampaikan kerjasama, saran dan masukan untuk kami.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">SEKRETARIAT</h5>
                                <div class="ff-secondary fw-semibold">Jl. Medan Merdeka Timur No. 6 , Gambir Jakarta 10110, Indonesia</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">E-MAIL</h5>
                                <div class="ff-secondary fw-semibold">dewankerja@pramuka.or.id</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase mb-0">MEDIA SOSIAL</h5>
                                <!-- list media social seperti ig, yt dll -->
                                <ul class="list-inline mb-0 mt-0">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="ri-instagram-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="ri-youtube-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="avatar-xs d-block"></a>
                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                            <i class="ri-x-fill"></i>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="form-label fs-13">Name</label>
                                            <input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="form-label fs-13">Email</label>
                                            <input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="subject" class="form-label fs-13">Subject</label>
                                            <input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Your Subject.." />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label fs-13">Message</label>
                                            <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">”Gerakan Pramuka Wadah Utama Pembentukan Kader Pemimpin Bangsa”</h4>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <span class="logo-txt btn btn-light fw-semibold">#Warta<span class="text-brown">DewanKerja</span>
                            </div>
                            <div class="mt-4 fs-13">
                                <p class="ff-secondary">You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-profile">About Us</a></li>
                                        <li><a href="pages-gallery">Gallery</a></li>
                                        <li><a href="apps-projects-overview">Projects</a></li>
                                        <li><a href="pages-timeline">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-pricing">Calendar</a></li>
                                        <li><a href="apps-mailbox">Mailbox</a></li>
                                        <li><a href="apps-chat">Chat</a></li>
                                        <li><a href="apps-crm-deals">Deals</a></li>
                                        <li><a href="apps-tasks-kanban">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-faqs">FAQ</a></li>
                                        <li><a href="pages-faqs">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Dewan Kerja Nasional Gerakan Pramuka.<br> Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://github.com/ArizkiNewbie/" target="_blank" class="text-white">ArizkiNewbie</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <?= $this->include('partials/vendor-scripts') ?>

    <!--Swiper slider js-->
    <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- landing init -->
    <script src="/assets/js/pages/landing.init.js"></script>

    <!-- internal js -->
    <script>
        document.documentElement.setAttribute('data-bs-theme', 'light');
        //buat js untuk ganti light to dark mode
        function toggleDarkMode() {
            document.documentElement.setAttribute('data-bs-theme', document.documentElement.getAttribute('data-bs-theme') === 'light' ? 'dark' : 'light');
        };
    </script>
</body>

</html>