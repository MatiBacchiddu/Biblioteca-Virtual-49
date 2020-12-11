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
    <title>categorias</title>
  </head>
  <body>


    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-bordo">
        <div class="container">
                    <a class="navbar-brand" href="{{route('biblioteca.index')}}">
                        <i class="far fa-arrow-alt-circle-left"> volver</i>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
        </div>
    </nav>

    <section id="speakers" class="mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <h1 class="font-weight-bold titulo-contenidos">Todas las categorias</h1>
                    <hr class="hr-contenidos">
                </div>
            </div>
        </div>
    </section>

    <section id="novedades">
        <div class="container">
            <div class="row">

            @if(count($categorias) > 0)
                @foreach($categorias as $categoria)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body contenedor-materia">
                          <a href="{{route('categorias.show', ['categoria' => $categoria->id])}}" class="link-materia"><h5 class="card-title">{{$categoria->nombre}} <br> <small>Ver libros de esta categoria</small></h5></a>
                        </div>
                      </div>
                </div>
            @endforeach

            @else
                <p class="text-center mt-5">No hay materias</p>

            @endif

            </div>
        </div>
    </section>






<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>
