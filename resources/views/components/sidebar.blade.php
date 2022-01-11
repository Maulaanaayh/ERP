<div class="main-sidebar">
<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="index.html">Sales Management</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">ERP</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item">
      <a href="{{ url('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>

    @if(auth()->user()->is_admin == true)
    <li class="menu-header">Master Data</li>
    <li class="nav-item">
      <a href="{{ url('/home/city') }}" class="nav-link"><i class="fas fa-map-marked-alt"></i> <span>Master Kota</span></a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/home/marketing') }}" class="nav-link"><i class="fas fa-users"></i> <span>Master Marketing</span></a>
    </li>
    @endif

    @if(auth()->user()->role == 'pic')
    <li class="menu-header">Master Data</li>
    <li class="nav-item">
      <a href="{{ url('/home/city') }}" class="nav-link"><i class="fas fa-map-marked-alt"></i> <span>Master Kota</span></a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/home/marketing') }}" class="nav-link"><i class="fas fa-users"></i> <span>Master Marketing</span></a>
    </li>
    @endif

    <li class="menu-header">Marketing</li>
    <li class="nav-item">
      <a href="{{ url('/home/merchant') }}" class="nav-link"><i class="fas fa-users"></i> <span>Merchant Terdaftar</span></a>
    </li>
  </ul>
</aside>
</div>