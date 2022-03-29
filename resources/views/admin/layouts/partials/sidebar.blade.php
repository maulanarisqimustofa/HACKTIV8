<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/profil')}}" class="brand-link">
     
      <span class="brand-text font-weight-light">YOURLOGO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
         data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('/profil')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/kategori')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/produk')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Produk
              </p>
            </a>
          </li> <li class="nav-item">
          <li class="nav-item">
            <a href="{{url('/order')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Report
              </p>
            </a>
          </li> <li class="nav-item">
          <li class="nav-item">
             <a onclick="event.preventDefault();    
             document.getElementById('logout').submit()" 
             class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i><p>
            Log Out</p>
            <form action="{{ url('/logout') }}" method="POST" 
            id="logout" class="display: none;">
            @csrf
            </form>
          </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
