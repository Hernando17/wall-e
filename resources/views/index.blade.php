<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyPortfolio Bootstrap Template - Index</title>
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
            <a class="navbar-brand" href="index.html">Wall-E</a>

        </div>
    </nav>

    <main id="main">

        <!-- ======= Works Section ======= -->

        <div class="container mt-5">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Wallpaper download</h2>
                    <p class="mb-0">Free HD Image</p>
                </div>
            </div>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark mb-4 float-center" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload new Wallpaper</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="file" class="form-control mb-2" name="image">
                                <input type="text" class="form-control mb-2" name="title" placeholder="Title" />
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                @foreach ($image as $i)
                    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="{{ route('detail', $i->id) }}" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>{{ $i->title }}</h3>
                            </div>
                            <img class="img-fluid" src="{{ asset('storage/images') }}/{{ $i->image }}"  style="height: 420px; width: 420px; object-fit: cover;">
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- End  Works Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


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
