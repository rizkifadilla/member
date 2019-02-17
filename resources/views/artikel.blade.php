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
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <style>
        footer {
            background-color: black;
            color: white;
            padding: 5px;
        }
        .li{
            padding: 20px;
        }
        </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" id="mainNav">
        <div class="container">
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
                            {{ Auth::user()->name }}  <span class="caret"> {{$memberships[0]->type}}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a href="{{url('/artikel/editmember', Auth::user()->id)}}" class="dropdown-item">upgrade member</a>

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
                        <strong>Artikel</strong>
                        
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">

                </div>
            </div>
        </div>
    </header>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom pt-5">
                    list artikel
                    @guest
                        @if (Route::has('register'))

                        @endif
                        @else
                    <a href="{{action('artikelController@create')}}"><button type="button" class="btn btn-success mt-2 float-right">tambah data</button></a>
                    @endguest
                    
                </h3>

                @foreach($artikels as $artikel)
                
                <div class="card float-left ml-3 mt-3 mb-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('foto/'.$artikel->foto) }}" alt="Card image cap" width="100%" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$artikel->title}}<br>
                            <small>oleh {{$artikel->username}}</small><br>
                            <small>kategori {{$artikel->category}}</small>
                        </h5>
                        
                        <p class="card-text">
                            {{$artikel->description}}
                        </br>
                        <a href="{{action('artikelController@show', $artikel->id)}}"></br>baca selengkapnya...</a>
                        </p>
                        @guest
                        @if (Route::has('register'))

                        @endif
                        @else
                        <a href="{{action('artikelController@edit', $artikel->id)}}"><button type="button" class="btn btn-warning mt-2 float-left">Edit</button></a>
                        <form action="{{action('artikelController@destroy', $artikel->id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <a href=""><button type="submit" class="btn btn-danger mt-2 float-left ml-3">Delete</button></a>
                        </form>
                        @endguest
                    </div>
                </div>
                @endforeach








            </div>

            <aside class="col-md-4 blog-sidebar">


                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                    @foreach($categories as $category)
                        <li><a href="{{url('/artikel/filter', $category->id)}}">{{$category->categorie}}</a></li>
                        @endforeach
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
    <footer class="container-fluid text-center">
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
