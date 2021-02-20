@include('navAdmin.header');


      @include('navAdmin.nav');




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h2 class="text-center mb-5 titulo-contenidos">Administra todas las materias</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Categorias</th>
                    <th scole="col">Acciones</th>

                </tr>
            </thead>
            <tbody>

                @foreach($categorias as $categoria)


                <tr>
                    <td>{{$categoria->nombre}}</td>
                    <td>

                        <form action="{{route('categoriaAdmin.destroy', ['categoria' => $categoria->id])}}" method="POST">
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
