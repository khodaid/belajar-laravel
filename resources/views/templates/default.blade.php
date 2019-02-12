<!DOCTYPE html>
<html lang="en">
  @include('templates.partials.headscript')
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    @include('templates.partials.header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('templates.partials.sidebar')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

      @include('templates.partials.alert')

      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    @include('templates.partials.footerscript')
  </body>
</html>
