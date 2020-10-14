
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#historia">Historia Escolar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#novedades">Novedades</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#adm">Administracion</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ubicacion">Ubicación</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/inicio/contenidos')}}">Contenidos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">

                <div class="masthead-heading text-uppercase">Escuela Secundaria N*49</div>
                <div class="masthead-subheading">Partido de Moron</div>
            </div>
        </header>
        <!--Historia Escolar-->
        <section class="page-section bg-light" id="historia">
        	<div class="container">
        		<div class="text-center">
        			<div class="historia1">
        			<h2 class="section-heading text-uppercase">Historia Escolar</h2>
        			<p>La Escuela de Enseñanza Secundaria N° 5 comenzó a funcionar en <strong>marzo de 1968</strong> en turno vespertino, dado que no tenía edificio propio y le cedieron para su funcionamiento, las instalaciones de la escuela primaria, actual 153 “República de Japón”. <strong>En 1971</strong> egresa la primera promoción de alumnos con el título de Perito mercantil.<br>
 					<strong>En 1979</strong> la Cooperadora de la Escuela Primaria 140 reclamaba una escuela secundaria; construye en parte de su terreno 10 aulas y solicita al Gobierno Provincial la creación de dicha Escuela Secundaria.<br>
 					 Al año siguiente las autoridades escolares deciden que la Escuela que funcionaba solo en turno vespertino en la Primaria 153, sea trasladada a las aulas recientemente construidas del edificio de la escuela 140, en ese espacio ya pudo funcionar en 2 turnos diurnos. Se consiguen muebles y elementos didácticos y en marzo comienzan las clases en el edificio actual, con entrada por la calle Chile, donde actualmente se encuentra la biblioteca.<br>
  					 Algunos años después se le impone el nombre “Islas Malvinas”. Con este mismo nombre <strong>en 1991</strong> se inaugura la Biblioteca “Islas Malvinas”, abierta a la comunidad, sobre la base de la ya existente Biblioteca Escolar de la Media N.º5, que funcionaba en lo que ahora es sala de informática, al hacerla abierta a la comunidad se debe trasladar a algún sector que tenga acceso desde la calle, posteriormente el antiguo salón biblioteca se amplía y remodela con recursos de los socios de la Cooperadora para Taller de Tecnología.<br>
   					 La escuela tiene también un anexo desde <strong>el 2014</strong> cuya entrada es por la calle Miguel Cané, se crea a partir de la necesidad de nuevas aulas cuando, según la Ley Federal de Educación, las escuelas se dividían en un ciclo básico y un ciclo superior. Al crearse esta ESB (Escuela Secundaria Básica) se le da el nombre <strong>“14 de junio de 1982”</strong> elegido por sus padrinos, los excombatientes, esta fecha es el término de la guerra de Malvinas.<br>
  					 Hoy, si bien está incorporado a la Escuela de Enseñanza Secundaria N° 5 con los 3 primeros años, tiene su salón biblioteca específico.
						</p></div>
        		</div>
        	</div>
        </section>
        {{--Cierre de historia escolar---}}



        {{--Novedades--}}
        <section class="page-section bg-light" id="novedades">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Novedades</h2>
                    <h3 class="section-subheading text-muted">Aquí encontraras las ultimas noticias de la Institución.</h3>
                </div>

        <section id="novedades">
            <div class="container">
                <div class="row">
                    @foreach($novedades as $novedad)
                    <div class="col-6 col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/portfolio/01-thumbnail.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$novedad->titulo}}</h5>
                              <p class="card-text">{{$novedad->descripcion}}</p>
                            </div>
                          </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        {{--Cierre de novedades--}}


        <!--Administracion-->
        <section class="page-section bg-light" id="adm">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Administracion</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="adm-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Lorem ipsum</h4>
                            <p class="text-muted">Director</p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="adm-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Lorem ipsum</h4>
                            <p class="text-muted">Visedirector</p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="adm-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Lorem ipsum</h4>
                            <p class="text-muted">Rector</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>

        <!-- Contacto-->

        <section class="page-section box-mati" id="contacto">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                  <h3 class="section-subheading text-uppercase"> Email : secundarian49moron@correo.com </h3>
                  <h3 class="section-subheading text-uppercase"> Telefono: (011) 1234-5678 </h3>
                </div>

            <section class="page-section" id="ubicacion">
                <div class="container">
                    <div class="text-center">
                    <h2 class="section-heading text-uppercase">Ubicación</h2></div>

                <div class="map" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3282.323868677951!2d-58.61923039999999!3d-34.646522918169026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6ff348cdcdac80f!2sEscuela%20N%C3%BAmero%203!5e0!3m2!1ses-419!2sar!4v1599510861539!5m2!1ses-419!2sar"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                </div>
            </section>
            </section></div>


        <!-- Footer-->
        <footer class="footer py-4 mt-6 w-100 footer-mati">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Escuela Secundaria N*49 2020 </div>
                </div>
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
