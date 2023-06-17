<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="views/assets/plugins/adminlte/dist/img/AdminLTELogo.png" alt="..." class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
<!-- links -->
<!-- /ArTeM01-045/PHP-collab/AlquilaArtemis/views/pages/productos/productos.php -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="...">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/salidas" class="nav-link <?php if ($rutas[3] == "salidas"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Alquiler (Salidas)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/entradas" class="nav-link <?php if ($rutas[3] == "entradas"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Devoluciones (Entradas)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/inventarios" class="nav-link <?php if ($rutas[3] == "inventarios"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inventarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/liquidaciones" class="nav-link <?php if ($rutas[3] == "liquidaciones"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Liquidaciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/productos" class="nav-link <?php if ($rutas[3] == "productos"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/PHP-collab/AlquilaArtemis/empleados" class="nav-link <?php if ($rutas[3] == "empleados"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empleados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/PHP-collab/AlquilaArtemis/clientes" class="nav-link <?php if ($rutas[3] == "clientes"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/PHP-collab/AlquilaArtemis/obras" class="nav-link <?php if ($rutas[3] == "obras"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Obras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/PHP-collab/AlquilaArtemis/cotizaciones" class="nav-link <?php if ($rutas[3] == "cotizaciones"): ?> active <?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cotizaciones
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>