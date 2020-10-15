    @include('navAdmin.header');


      @include('navAdmin.nav');




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <h1 class="text-center"> Sube un nuevo Contenido </h1>
    <!-- Main content -->
    <form
    action ="{{route('contenidosAdmin.store')}}"
    method="POST"
    enctype="multipart/form-data"
    class="max-w-lg mx-auto my-10">

    @csrf
        <div class="form-group ml-5 mr-5">
          <label for="nombre">Nombre del contenido</label>
          <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group ml-5 mr-5">
            <label for="años">Para los Años</label>
            <input type="text" name="años" class="form-control" placeholder="Ejemplo: 1 año y 2 año">
          </div>


          <div class="form-group ml-5 mr-5">
            <label for="archivo">Subir Archivo</label>
            <input type="file" name="archivo" class="form-control">
          </div>

          <div class="form-group ml-5 mr-5">
            <label for="materia">Materia</label>
            <select class="form-control" name="materia" id="materia">
              <option disable selected>-- Selecciona --</option>
                    @foreach($materias as $materia)
                        <option
                        {{old('materia') == $materia->id ? 'selected' : ''}}
                        value="{{$materia->id}}">
                            {{$materia->nombre}}
                        </option>

                    @endforeach
            </select>
          </div>



        <button type="submit" class="btn btn-primary ml-5">Enviar</button>


    </form>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    {{--Inicio footer---}}


    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
      </footer>

      </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@9')}}"></script>

    <script src="{{asset('js/sweetAlert.js')}}"></script>

    <script src="{{asset('js/admin-ajax.js')}}"></script>

    <script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
    </html>



    {{---Cierre footer--}}


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
