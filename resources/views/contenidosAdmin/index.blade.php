@include('navAdmin.header');


      @include('navAdmin.nav');




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <h2 class="text-center mb-5">Administra todas las Novedades</h2>

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
