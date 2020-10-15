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


    <!-- Categoria biblioteca -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <i class=" fas fa-book"></i>
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
    </li>
    <!--cierre de Historias-->


  <!-- Admins -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <i class="fas fa-user"></i>
        <p>
         Administradores
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="lista-admin.php" class="nav-link">
          <i class="fas fa-list"></i>
            <p>Ver Todos</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="crear-admin.php" class="nav-link">
          <i class="fas fa-plus-circle"></i>
            <p>Agregar</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Cierre admins -->


</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

{{--Cierre de la navegación--}}
