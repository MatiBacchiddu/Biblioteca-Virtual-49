<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contenidos</title>
</head>
<body>

    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="{{asset('css/matiestilos.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Hawai</title>
  </head>
  <body>

    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-bordo">
        <div class="container">
                    <a class="navbar-brand" href="{{route('contenidos.index')}}">
                        <i class="far fa-arrow-alt-circle-left"></i> Todos los contenidos
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @foreach($materias as $materia)
                        <li class="nav-item active">
                        <a class="nav-link hover materia-hover" href="{{route('materias.show', ['materia' => $materia->id])}}">{{$materia->nombre}}<span class="sr-only">(current)</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
        </div>
    </nav>


    <!--Speakers-->
    <section id="speakers" class="mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <h1 class="font-weight-bold">Aquí encontrarás los contenidos necesarios</h1>
                    <hr class="hr-contenidos">
                </div>
            </div>

            <p class="font-weight-bold">Resultados de la busqueda: <span class="text-uppercase span-buscador">{{$busqueda}}</span></p>

            <div class="buscador">
                <form action="{{route('buscar.show')}}" class="container h-100">
                    <div class="row h-100 align-items-center">
                        <p class="display-4 font-weight-bold texto-buscar">¿Que estas buscando?</p>
                        <input type="search" name="buscar" class="form-control" placeholder="Ej: Libro de Matematicas avanzadas, etc">
                    </div>
                </form>
            </div>
            <div class="row">
                @foreach($contenidos as $contenido)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-mati">
                        <div class="card-body">
                          <h5 class="card-title text-uppercase font-weight-bold">{{$contenido->nombre}}</h5>
                          <p>Para: {{$contenido->año}}</p>
                          <a href="/storage/{{$contenido->archivo}}" download="{{$contenido->nombre}}.pdf" class="btn btn-outline-danger"><i class="fas fa-download"></i> Descargar PDF</a>
                          <br>
                          <a href="/storage/{{$contenido->archivo}}" class="btn btn-outline-danger mt-4" target="_blank"><i class="fas fa-eye"></i> Ver PDF</a>
                          <p><span class="badge badge-danger font-mati mt-4">{{$contenido->materia->nombre}}</span></p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{$contenidos->links()}}
            </div>
        </div>
    </section>
    <!--Cierre speakers-->




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>
