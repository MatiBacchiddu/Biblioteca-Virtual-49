<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->



    <li class="nav-item has-treeview">
      <a href="{{url('/admin')}}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Panel
        </p>
      </a>
    </li>


    <!--novedades -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>
          Novedades
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('novedades.index')}}" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Ver Todas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('novedades.create')}}" class="nav-link">
          <i class="fas fa-plus-circle"></i>
            <p>Agregar</p>
          </a>
        </li>
      </ul>
    </li>
    <!-- cierre novedades -->

    <!-- Materias -->
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="fas fa-graduation-cap"></i>
          <p>
            Materias
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin/materias')}}" class="nav-link">
            <i class="fas fa-list"></i>
              <p>Ver Todos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/materiasCrear')}}" class="nav-link">
            <i class="fas fa-plus-circle"></i>
              <p>Agregar materia</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- Materias -->





    <!-- Categoria contenidos -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="fas fa-book-reader"></i>
        <p>
          Contenidos
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('/admin/contenidosTodos')}}" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Ver Todos</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/admin/contenidos')}}" class="nav-link">
          <i class="fas fa-plus-circle"></i>
            <p>Agregar archivo</p>
          </a>
        </li>
      </ul>
    </li>
    <!--cierre de contenidos-->



    <!-- Categoria biblioteca -->
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="fas fa-graduation-cap"></i>
          <p>
            Categorias para Biblioteca
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin/categorias')}}" class="nav-link">
            <i class="fas fa-list"></i>
              <p>Ver Todas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/categoriaCrear')}}" class="nav-link">
            <i class="fas fa-plus-circle"></i>
              <p>Agregar categoria</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- Categoria biblioteca -->



    <!-- Categoria contenidos -->
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class=" fas fa-book"></i>
          <p>
            Biblioteca
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/admin/biblioteca')}}" class="nav-link">
            <i class="fas fa-list"></i>
              <p>Ver Todos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/biblioteca/crear')}}" class="nav-link">
            <i class="fas fa-plus-circle"></i>
              <p>Subir Libro</p>
            </a>
          </li>
        </ul>
      </li>
      <!--cierre de Categorias-->



    <!-- Historia -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="fas fa-landmark"></i>
        <p>
          Historia
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('/admin/historia')}}" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Ver</p>
          </a>
        </li>
      </ul>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('/admin/historiaCrear')}}" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Crear</p>
          </a>
        </li>
      </ul>
    </li>
    <!--cierre de Historias-->


  <!-- Directiva -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <i class="fas fa-user"></i>
        <p>
         Directivos
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('/admin/directiva')}}" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Ver Todos</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/admin/directivaCrear')}}" class="nav-link">
          <i class="fas fa-plus-circle"></i>
            <p>Agregar</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Cierre directiva -->



</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

{{--Cierre de la navegación--}}




