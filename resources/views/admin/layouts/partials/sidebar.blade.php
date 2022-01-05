<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/profil')}}" class="brand-link">
     
      <span class="brand-text font-weight-light">HAIMAULANA</span>
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Information
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/work')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Work</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/contact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/ability')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Ability
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/portfolio')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li> <li class="nav-item">
          <li class="nav-item">
            <a href="{{url('/labs')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Labs
              </p>
            </a>
          </li> <li class="nav-item">
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
