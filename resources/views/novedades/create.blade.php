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

    <h1 class="text-center"> Crear una nueva novedad </h1>
    <!-- Main content -->
    <form
    action ="{{route('novedades.store')}}"
    method="POST"
    class="max-w-lg mx-auto my-10">

    @csrf
        <div class="form-group ml-5 mr-5">
          <label for="titulo">Titulo</label>
          <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group ml-5 mr-5">
            <label for="descripcion">Descripcion de la Novedad</label>
            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary ml-5">Enviar</button>


    </form>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('navAdmin.footer');
