<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home2.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Rizki Fadilla</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url('/portofolio')}}">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>Welcome To My Website</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Selamat datang di website milik saya disini saya memberikan profile dan portofolio milik saya dan saya disini juga memberikan berbagai macam artikel yang yang berguna untuk kalian belajar</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">Cerita Singkat Tenyang saya</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Saya adalah seorang pelajar dari SMK Taruna Bhakti sekarang saya berada dikelas 11 pada jurusan Rekayasa Perangkat Lunak atau sering dikenal sebagai RPL</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At My Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fab fa-4x fa-android text-primary mb-3 sr-icon-2"></i>
                        <h3 class="mb-3">Android Developer</h3>
                        <p class="text-muted mb-0">Bisa Membuat aplikasi sederhan di android</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
                        <h3 class="mb-3">Website Developer</h3>
                        <p class="text-muted mb-0">Bisa Membuat Wbsite Statis Maupun Dinamis</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>
