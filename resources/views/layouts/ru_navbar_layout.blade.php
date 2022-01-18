<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
<link href="/admin/dist/css/colorbox.css" rel="stylesheet">

       
    </head>
    <body class="antialiased">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
              <a href="{{ route('index') }}" class="navbar-brand">
                   <span class="brand-text font-weight-light">Сайт</span>
              </a>
        
              <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                   
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_1 as $cat_1)
                      <li><a href="{{ route('page.show', $cat_1['id']) }}" class="dropdown-item">{{$cat_1['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_2 as $cat_2)
                      <li><a href="{{ route('page.show', $cat_2['id']) }}" class="dropdown-item">{{$cat_2['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_3 as $cat_3)
                      <li><a href="{{ route('page.show', $cat_3['id']) }}" class="dropdown-item">{{$cat_3['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_4 as $cat_4)
                      <li><a href="{{ route('page.show', $cat_4['id']) }}" class="dropdown-item">{{$cat_4['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_5 as $cat_5)
                      <li><a href="{{ route('page.show', $cat_5['id']) }}" class="dropdown-item">{{$cat_5['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_6 as $cat_6)
                      <li><a href="{{ route('page.show', $cat_6['id']) }}" class="dropdown-item">{{$cat_6['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                      @foreach ($cat_id_7 as $cat_7)
                      <li><a href="{{ route('page.show', $cat_7['id']) }}" class="dropdown-item">{{$cat_7['title']}} </a></li>
                      @endforeach
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
        
                  <li class="nav-item">
                    @if (Route::has('login'))
              
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                            @endif
                        @endauth
                  
                    @endif
                  </li>
                </ul>
        
            
            </div>
          </nav>
        

        @yield('content')



       

 <!-- jQuery -->
 <script src="/admin/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)

 </script>
 <!-- Bootstrap 4 -->
 <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="/admin/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="/admin/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="/admin/plugins/moment/moment.min.js"></script>
 <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="/admin/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="/admin/dist/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="/admin/dist/js/pages/dashboard.js"></script>
 <script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
 <script src="https://cdn.tiny.cloud/1/jxsqeq85qzdwuqqqruya91jqsrhqtxykhxtks6sn0t1kn69g/tinymce/5/tinymce.min.js"
     referrerpolicy="origin"></script>
 <script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
 <script src="/admin/admin.js"></script>
    </body>
</html>

