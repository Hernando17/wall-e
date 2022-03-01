<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wall-E - HD Image For You</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('MyPortfolio') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('MyPortfolio') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('MyPortfolio') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('MyPortfolio') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('MyPortfolio') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('MyPortfolio') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('MyPortfolio') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyPortfolio - v4.7.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <nav class="navbar navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Wall-e</a>
        </div>
    </nav>

    <main id="main">


        <div class="container mt-5">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <a href="{{ route('index') }}" class="btn btn-dark">Back</a>
                </div>
            </div>
        </div>

        <div class="site-section pb-0">
            <div class="container p-5">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        <img src="{{ asset('storage') }}/images/{{ $image->image }}" alt="Image"
                            class="img-fluid">
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <h3 class="h3">{{ $image->title }}</h3>
                            <p class="mb-4"><span class="text-muted">Design</span></p>

                            <div class="mb-5">
                                <p>{{ $image->description }}</p>

                            </div>
                            <p>
                                <a href="{{ asset('storage') }}/images/{{ $image->image }}"
                                    class="readmore">Download</a>
                            <form action="{{ route('delete', $image->id) }}" method="post" style="display:inline;">
                                @csrf
                                <button type="submit" class="readmore"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('MyPortfolio') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('MyPortfolio') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('MyPortfolio') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('MyPortfolio') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('MyPortfolio') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('MyPortfolio') }}/assets/js/main.js"></script>

</body>

</html>
