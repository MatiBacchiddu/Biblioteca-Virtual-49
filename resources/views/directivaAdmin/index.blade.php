@include('navAdmin.header');

@include('navAdmin.nav');





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
      <h2 class="text-center mb-3 ">Los Directivos</h2>

  <div class="col-md-10 mx-auto bg-white p-3">
      <table class="table">
          <thead class="bg-primary text-light">
              <tr>
                  <th scole="col">Nombre</th>
                  <th scole="col">Cargo</th>
                  <th scole="col">Imagen</th>
                  <th scole="col">Acciones</th>
              </tr>
          </thead>
          <tbody>



            @foreach($directivos as $directivo)
              <tr>



                  <td>{{$directivo->nombre}}</td>
                  <td>{{$directivo->cargo}}</td>
                  <td>{{$directivo->imagen}}></td>
                  <td>

                      <form action="{{route('directivaAdmin.destroy', ['directivo' => $directivo->id])}}" method="POST">
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
