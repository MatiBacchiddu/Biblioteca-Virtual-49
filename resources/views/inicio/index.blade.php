
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Escuela Secundaria N*49</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/matiestilos.css')}}">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">49</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu<!--Menú-->
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#historia">Historia</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#novedades">Novedades</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#adm">Administración</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ubicacion">Ubicación</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/biblioteca')}}">Biblioteca</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger contenido-nav" href="{{url('/inicio/contenidos')}}">Contenidos <span class="">{{---$contenidos->count()---}}</span> </a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">

                <div class="masthead-heading text-uppercase titulo-escuela">Escuela Secundaria N*49</div>
                <div class="masthead-subheading titulo-partido">Partido de Morón</div>
            </div>
        </header>



        <!--Historia Escolar-->
        <section class="page-section bg-light" id="historia">
        	<div class="container">
        		<div class="text-center">
        			<div class="historia1">
                    <h2 class="section-heading text-uppercase container titulo-historia">Historia Escolar</h2>
                @if( count($historias) > 0 )

                    @foreach($historias as $historia)
                    <p>{{$historia->descripcion}}</p>
                    @endforeach

                @else
                <p class="text-center mt-5">No hay historia aun</p>

                @endif


                    </div>
        		</div>
        	</div>
        </section>
        {{--Cierre de historia escolar---}}



        {{--Novedades--}}
        <section class="page-section bg-light" id="novedades">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase titulo-novedades">Novedades</h2>
                    <h3 class="section-subheading text-muted texto-novedades">Aquí encontraras las últimas noticias de la Institución.</h3>
                </div>



        <section id="novedades">
            <div class="container">
                <div class="row">

                @if(count($novedades) > 0)
                    @foreach($novedades as $novedad)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card">
                            <div class="header_novedad">
                                <h3 class="text-center novedad-header">49</h3>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">{{$novedad->titulo}}</h5>
                              <p class="card-text">{{$novedad->descripcion}}</p>
                            </div>
                          </div>
                    </div>
                @endforeach

                @else
                    <p class="text-center mt-5">No hay novedades</p>

                @endif

                </div>
            </div>
        </section>
        {{--Cierre de novedades--}}


        <!--Administracion-->
        <section class="page-section bg-light" id="adm">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase titulo-administracion">Administracion</h2>
                    <h3 class="section-subheading text-muted texto-administracion">Directivos</h3>
                </div>
                <div class="row">
                @if(count($directivos) > 0 )
                    @foreach($directivos as $directivo)
                    <div class="col-lg-4">
                        <div class="adm-member">
                            <img class="mx-auto rounded-circle" src="/storage/imagenes/{{$directivo->imagen}}" alt="" />
                            <h4>{{$directivo->nombre}}</h4>
                            <p class="text-muted">{{$directivo->cargo}}</p>

                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="text-center mt-5">No hay directivos aun</p>

                @endif
                </div>
            </div>
        </section>

        <!-- Contacto-->

        <section class="page-section box-mati" id="contacto">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase titulo-contactanos">Contactanos</h2>
                  <h3 class="section-subheading text-uppercase email-contactanos"> Email : <span class="span-contactanos">secundarian49moron@correo.com</span></h3>
                  <h3 class="section-subheading text-uppercase telefono-contactanos"> Teléfono: (011) 1234-5678 </h3>
                </div>

            <section class="page-section" id="ubicacion">
                <div class="container">
                    <div class="text-center">
                    <h2 class="section-heading text-uppercase titulo-ubicacion">Ubicación</h2></div>

                <div class="map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3282.323868677951!2d-58.61923039999999!3d-34.646522918169026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6ff348cdcdac80f!2sEscuela%20N%C3%BAmero%203!5e0!3m2!1ses-419!2sar!4v1599510861539!5m2!1ses-419!2sar"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                </div>
            </section>
            </section></div>


        <!-- Footer-->
        <footer class="footer py-3 mt-6 w-100 footer-mati bg-bordo">
                <div class="row align-items-center">
                    <div class="c-white">Copyright © Escuela Secundaria N*49 2020 </div>
                </div>

                <div class="row align-items-center contenedor-desarrolladores">

                    <div class="c-white">Desarrolladores: <br> <small>Alumnos de Programación</small></div>
                    <ul class="lista-des">
                        <li class="li-des">
                            Bacchiddu Matias
                        </li>

                        <li class="li-des">
                            Garcia Santiago
                        </li>

                        <li class="li-des">
                            Dupuy Tadeo
                        </li>

                        <li class="li-des">
                            Martinez Damian
                        </li>
                    </ul>

                </div>
        </footer>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
