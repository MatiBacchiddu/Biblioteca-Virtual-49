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


  @include('navAdmin.footer');
