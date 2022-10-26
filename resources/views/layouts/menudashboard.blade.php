<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">

        </li>
        <li class="nav-item">
          <a href="{{ URL::to('user/wishlist') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Wishlist</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
          Transaksi
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
          <a href="{{ URL::to('user/transaksi') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Transaksi</p>
          </a>
        </li>
      
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
          Laporan
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Penjualan</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
    <a class="nav-link fas fa-sign-out-alt" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </li>
  </ul>
</nav>
