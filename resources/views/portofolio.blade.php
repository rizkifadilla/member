<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rizki Fadilla - Website</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portofolio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/progress.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <style>
        .padding{
        padding-top: 12rem;
    }
        footer {
            background-color: black;
            color: white;
            padding: 5px;
        }
    
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-dark" id="mainNav"">
        <div class=" container">
        <a class="navbar-brand js-scroll-trigger" href="{{url('/home')}}">Rizki Fadilla</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/artikel')}}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/portofolio')}}">Portfolio</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>MY PORTOFOLIO</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5"></p>
                </div>
            </div>
        </div>
    </header>

    <section id="services" style="background-color: white; height:70%;" class="p-0 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading pt-5">At My Service</h2>
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

    <!-- Image Showcases -->
    <section class="showcase p-0 pb-5">
        <div class="container-fluid">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading pt-5">Bahasa Pemograman Yang Dikuasai</h2>
                <hr class="my-4">
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(../public/img/html.jpg);"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>HTML</h2>
                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will
                        look great on any device, whether it's a phone, tablet, or desktop the page will behave
                        responsively!</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url(../public/img/php.jpg);"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>PHP</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the
                        way in mobile responsive web development! All of the themes on Start Bootstrap are now using
                        Bootstrap 4!</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(../public/img/js.jpg);"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>JAVASCRIPT</h2>
                    <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand
                        some deeper customization options. Out of the box, just add your content and images, and your
                        new landing page will be ready to go!</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url(../public/img/css.png);"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>CSS</h2>
                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the
                        way in mobile responsive web development! All of the themes on Start Bootstrap are now using
                        Bootstrap 4!</p>
                </div>
            </div>
        </div>
    </section>
    <div style="background-color: white;" class=>
        <div class="container">
        <div class="col-lg-12 text-center">
                <h2 class="section-heading pt-5">Tentang Saya</h2>
                <hr class="my-4">
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>NAMA</td>
                        <td>Rizki Fadilla</td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>XI RPL 2</td>
                    </tr>
                    <tr>
                        <td>TEMPAT LAHIR</td>
                        <td>Depok</td>
                    </tr>
                    <tr>
                        <td>TANGGAL LAHIR</td>
                        <td>16 JUNI 2002</td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>rizkifadilla42@gmail.com</td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>jalan haji icang RT 04 RW 01 kelurahan tugu kecamatan <br>cimanggis kota depok NO 142 Kode
                            pos
                            16842</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container mb-5">
    <div class="col-lg-12 text-center">
                <h2 class="section-heading pt-5">Pendidikan Saya</h2>
                <hr class="my-4">
            </div>
        <div class="card-deck">
            <div class="card">
                <br><br><br>
                <img class="card-img-top" src="{{asset('img/sd.png')}}" alt="Card image cap">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">MI.Nasyatul Khair</h5>
                    <p class="card-text">MI.NASYATUL KHAIR adalah Lingkungan Pengembangan Terpadu - Integrated
                        Development Environment (IDE) untuk pengembangan aplikasi Android, berdasarkan IntelliJ IDEA .
                        Selain merupakan editor kode IntelliJ dan alat pengembang yang berdaya guna, Android Studio
                        menawarkan fitur lebih banyak untuk meningkatkan </p>

                </div>
            </div>
            <div class="card">
                <br>
                <img class="card-img-top" src="{{asset('img/smp.jpg')}}" alt="Card image cap" height="400px">
                <br><br>
                <div class="card-body">
                    <h5 class="card-title">SMP Taruna Bhakti</h5>
                    <p class="card-text">SMP TARUNA BHAKTI adalah Lingkungan Pengembangan Terpadu - Integrated
                        Development Environment (IDE) untuk pengembangan aplikasi Android, berdasarkan IntelliJ IDEA .
                        Selain merupakan editor kode IntelliJ dan alat pengembang yang berdaya guna, Android Studio
                        menawarkan fitur lebih banyak untuk meningkatkan </p>

                </div>
            </div>
            <div class="card">
                <br><br><br><br>
                <img class="card-img-top" src="{{asset('img/smk.png')}}" alt="Card image cap">
                <br><br><br>
                <div class="card-body">
                    <h5 class="card-title">SMK Taruna Bhakti</h5>
                    <p class="card-text">SMK TARUNA BHAKTI adalah Lingkungan Pengembangan Terpadu - Integrated
                        Development Environment (IDE) untuk pengembangan aplikasi Android, berdasarkan IntelliJ IDEA .
                        Selain merupakan editor kode IntelliJ dan alat pengembang yang berdaya guna, Android Studio
                        menawarkan fitur lebih banyak untuk meningkatkan </p>

                </div>
            </div>
        </div>
    </div>
    <div style="background-color: white;">
        <div class="container">
        <div class="col-lg-12 text-center">
                <h2 class="section-heading pt-5">Skill Saya</h2>
                <hr class="my-4">
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-3">
                    <h1 class="text-center pb-2">HTML</h1>
                    <div class="progress blue">

                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">90%</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-3">
                    <h1 class="text-center pb-2">CSS</h1>
                    <div class="progress blue">
                        <div class="progress blue">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">90%</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-3">
                        <h1 class="text-center pb-2 pt-4">JavaScript</h1>
                        <div class="progress blue">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">90%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3">\
                        <h1 class="text-center pb-2 pt-2">PHP</h1>
                        <div class="progress blue">
                            <div class="progress yellow">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">75%</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    

    <!-- footer -->
    <footer class="container-fluid text-center" >
        <p>copyright 1900-2020 Rizki Fadilla</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
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
