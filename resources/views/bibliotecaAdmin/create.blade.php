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

<h1 class="text-center"> Sube un archivo a la Biblioteca </h1>
<!-- Main content -->
<form
action ="{{route('bibliotecaAdmin.store')}}"
method="POST"
enctype="multipart/form-data"
class="max-w-lg mx-auto my-10">

@csrf
  <div class="form-group ml-5 mr-5">
    <label for="nombre">Nombre del libro</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ml-5 mr-5">
      <label for="autor">Autor</label>
      <input type="text" name="autor" class="form-control" placeholder="Nombre del autor">
    </div>

    <div class="form-group ml-5 mr-5">
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" class="form-control" placeholder="Nombre de la editorial">
      </div>


    <div class="form-group ml-5 mr-5">
      <label for="Libro">Subir Libro</label>
      <input type="file" name="Libro" class="form-control">
    </div>




  <button type="submit" class="btn btn-primary ml-5">Subir</button>


</form>


<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('navAdmin.footer');
