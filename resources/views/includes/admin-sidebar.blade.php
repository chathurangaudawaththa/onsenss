<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home.html" class="brand-link">
          <img src="{{ asset('images/logo.png') }}" alt="Onsenss Technology">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Nethshan Narasingha</a>
          </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
              Dashboard
              <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/add-cat" class="nav-link ">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Category</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="add-sub" class="nav-link ">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Sub Category</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="recylebin.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Recycle Bin</p>
              </a>
              </li>
            </ul>
            </li>
            <li class="nav-item has-treeview  menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon  fa fa-cogs" aria-hidden="true"></i>
              <p>
              Category
              <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/add-component" class="nav-link active">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Electronic Components</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="circuit.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Printed Circuit Boards</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="sensors.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Sensors</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="cctv.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>CCTV Camera</p>
              </a>
              </li>


            </ul>
            </li>
          </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>

        </aside>
