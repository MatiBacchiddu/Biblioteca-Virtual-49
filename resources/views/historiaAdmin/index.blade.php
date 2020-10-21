@include('navAdmin.header');


@include('navAdmin.nav');

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h2 class="text-center mb-5">La historia</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-bordo text-light">
                <tr>
                    <th scole="col-6">Descripción</th>
                    <th scole="col-6">Acciones</th>

                </tr>
            </thead>
            <tbody>

            @foreach($historias as $historia)

                <tr>
                    <td>{{$historia->descripcion}}</td>
                    <td>

                        <form action="{{route('historiaAdmin.destroy', ['historia' => $historia->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar &times;">
                        </form>
                        <a href="{{route('historiaAdmin.edit', ['historia' => $historia->id])}}" class="btn btn-dark d-block mb-2">Editar</a>
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
