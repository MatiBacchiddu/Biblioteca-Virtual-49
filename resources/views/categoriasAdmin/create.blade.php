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

<h1 class="text-center"> Agrega una categoria a la biblioteca </h1>
<!-- Main content -->
<form
action ="{{route('categoriaAdmin.store')}}"
method="POST"
enctype="multipart/form-data"
class="max-w-lg mx-auto my-10">

@csrf
  <div class="form-group ml-5 mr-5">
    <label for="nombre">Nombre de la categoria</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary ml-5">Crear</button>


</form>


<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('navAdmin.footer');
