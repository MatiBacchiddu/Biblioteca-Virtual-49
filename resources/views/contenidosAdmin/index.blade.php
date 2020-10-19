@include('navAdmin.header');


      @include('navAdmin.nav');




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h2 class="text-center mb-5 titulo-contenidos">Administra todos los Contenidos</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Año</th>
                    <th scole="col">Archivo</th>
                    <th scole="col">Acciones</th>

                </tr>
            </thead>
            <tbody>

                @foreach($contenidos as $contenido)


                <tr>
                    <td>{{$contenido->nombre}}</td>
                    <td>{{$contenido->año}}</td>
                    <td>{{$contenido->archivo}}</td>
                    <td>

                        <form action="{{route('contenidosAdmin.destroy', ['contenido' => $contenido->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar &times;">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@include('navAdmin.footer');
