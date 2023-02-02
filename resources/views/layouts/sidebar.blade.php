<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard.index')}}">APP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('dashboard.index')}}">APP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ active('dashboard*') }}"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>  
      
      <li class="menu-header">Master</li>

           <li class="{{ request()->is('outlet*') ? 'active' : ''}}">
             <a href="{{ route('outlet.index')}}" class="text-black">
                <i class="fas fa-graduation-cap"></i>
                     <span>Outlet</span>
                </li>
             </a>
           <li class="{{ request()->is('member*') ? 'active' : ''}}">
             <a href="{{ route('member.index')}}" class="text-black">
                <i class="fas fa-graduation-cap"></i>
                     <span>Member</span>
                </li>
             </a>
           {{-- <li class="{{ request()->is('paket*') ? 'active' : ''}}">
             <a href="{{ route('paket.index')}}" class="text-black">
                <i class="fas fa-graduation-cap"></i>
                     <span>Paket</span>
                </li>
             </a> --}}

      <li class="menu-header">Transaksi</li>

      {{-- <li class="{{ request()->is('outlet*') ? 'active' : ''}}">
             <a href="{{ route('outlet.index')}}" class="text-black">
                <i class="fas fa-graduation-cap"></i>
                     <span>Transaksi</span>
                </li>
             </a>

     <li class="{{ request()->is('outlet*') ? 'active' : ''}}">
             <a href="{{ route('outlet.index')}}" class="text-black">
                <i class="fas fa-graduation-cap"></i>
                     <span>Detail Transaksi</span>
                </li>
             </a> --}}

      <li class="menu-header">User</li>
      <li class="{{ active('user*') }}"><a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-user"></i><span>User</span></a></li>           
    </ul>
  </aside>
</div>
