@include('navAdmin.header');


      @include('navAdmin.nav');




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h2 class="text-center mb-5 titulo-contenidos">Administra la Biblioteca</h2>



    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Autor</th>
                    <th scole="col">Editorial</th>
                    <th scole="col">Acciones</th>

                </tr>
            </thead>
            <tbody>

                @foreach($bibliotecas as $biblioteca)

                <tr>
                    <td>{{$biblioteca->titulo}}</td>
                    <td>{{$biblioteca->autor}}</td>
                    <td>{{$biblioteca->editorial}}</td>
                    <td>
                        <form action="{{route('bibliotecaAdmin.destroy', ['biblioteca' => $biblioteca->id])}}" method="POST">
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
