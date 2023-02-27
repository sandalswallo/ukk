<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard.index')}}">PWD CITY</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('dashboard.index')}}">Ly</a>
    </div>
    <ul class="sidebar-menu">

      <li class="menu-header">Dashboard</li>
      <li class="{{ active('dashboard*') }}">
        <a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>

      <li class="menu-header">Master</li>
      <li class="{{ active('outlet*')}}">
        <a class="nav-link" href="/outlet"><i class="fas fa-store"></i><span>Outlet</span></a>
      </li>
      <li class="{{ active('paket*')}} dropdown">
        <a class="nav-link has-dropdown"><i class="fas fa-boxes"></i><span>Pilih</span></a>
        <ul class="dropdown-menu" style="display: block;">
          <li><a class="nav-link" href="/paket">Paket</a></li>
          <li><a class="nav-link" href="/cucian">Cucian</a></li>
          <li><a class="nav-link" href="/jenispaket">Jenis Paket</a></li>
          <li><a class="nav-link" href="/layanan">Layanan</a></li>
          <li><a class="nav-link" href="/berat">Berat</a></li>
        </ul>
      </li>
      <li class="{{ active('member*')}}">
        <a class="nav-link" href="/member"><i class="fas fa-users"></i><span>Member</span></a>
      </li>

      <li class="menu-header">Transaksi</li>
      <li class="{{ active('transaksi*')}}">
        <a class="nav-link" href="/transaksi"><i class="fas fa-calculator"></i><span>Transaksi</span></a>
      </li>

      <li class="menu-header">User</li>
      <li class="{{ active('user*') }}">
        <a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-user"></i><span>User</span></a>
      </li>                  
    </ul>
  </aside>
</div>