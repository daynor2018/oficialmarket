<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tienda "KIOS"</title>

    <link rel="shortcut icon" href="{{asset('/admin/assets/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/font-awesome/css/font-awesome.min.css')}}">    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/style.css')}}">
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->
    
</head>

<body class="adminbody">

<div id="main">
  <!-- top bar navigation -->
  <div class="headerbar">
    <!-- LOGO -->
    <div class="headerbar-left">
    <a href="{{route('home')}}" class="logo"><img alt="Logo" src="{{asset('admin/assets/images/logo.png')}}" /> <span>KIOS</span></a>
    </div>
        <nav class="navbar-custom">
            <ul class="list-inline float-right mb-0">        
            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fa fa-fw fa-question-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                    <h5><small>Help and Support</small></h5>
                    </div>
                    <!-- item-->
                    <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                    <b>Do you want custom development to integrate this theme?</b>
                    <span>Contact Us</span>
                    </p>
                    </a>

                    <!-- item-->
                    <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                            <span>Try Pike Admin PRO</span>
                        </p>
                    </a>                               
                                <!-- All-->
                    <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                        <i class="fa fa-link"></i> Visit Pike Admin Websitexx
                    </a>
                </div>
            </li>
            
            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                </div>

                <!-- item-->
                <a href="#" class="dropdown-item notify-item">                                    
                    <p class="notify-details ml-0">
                        <b>Jokn Doe</b>
                        <span>New message received</span>
                        <small class="text-muted">2 minutes ago</small>
                    </p>
                </a>

                <!-- item-->
                <a href="#" class="dropdown-item notify-item">                                    
                    <p class="notify-details ml-0">
                        <b>Michael Jackson</b>
                        <span>New message received</span>
                        <small class="text-muted">15 minutes ago</small>
                    </p>
                </a>

                <!-- item-->
                <a href="#" class="dropdown-item notify-item">                                    
                    <p class="notify-details ml-0">
                        <b>Foxy Johnes</b>
                        <span>New message received</span>
                        <small class="text-muted">Yesterday, 13:30</small>
                    </p>
                </a>

                <!-- All-->
                <a href="#" class="dropdown-item notify-item notify-all">
                    View All
                </a>

            </div>
        </li>
                        
        <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                        </div>
        
                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>John Doe</b>
                                <span>User registration</span>
                                <small class="text-muted">3 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michael Cox</b>
                                <span>Task 2 completed</span>
                                <small class="text-muted">12 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michelle Dolores</b>
                                <span>New job completed</span>
                                <small class="text-muted">35 minutes ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All Allerts
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('admin/assets/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Hola, {{ ucfirst(Auth::user()->name) }}</small></h5>
                        </div>
                        <!-- item-->
                        <a href="pro-profile.html" class="dropdown-item notify-item">
                        <i class="fa fa-user"></i> <span>Perfil</span>
                        </a>
                        <!-- item-->
{{--  --}}
                        <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i><span>Cerrar sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
{{--  --}}
                    </div>
                </li>
            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                <button class="button-menu-mobile open-left">
                <i class="fa fa-fw fa-bars"></i>
                </button>
                </li>                        
            </ul>
        </nav>
    </div>
    <!-- End Navigation -->

    <!-- Left Sidebar -->
    <div class="left main-sidebar">
    <div class="sidebar-inner leftscroll">
        <div id="sidebar-menu">
        <ul>
            <li class="submenu">
            <a class="active" href="{{route('home')}}"><i class="fa fa-fw fa-bars"></i><span>Inicio</span> </a>
            </li>
            <li class="submenu">
            <a href="#"><i class="fa fa-fw fa-area-chart"></i><span>Estadisticas</span></a>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-fw fa-table"></i><span>Usuarios</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                <li><a href="{{route('showemployee')}}">Encargados de Almacén</a></li>
                <li><a href="{{route('showcashier')}}">Cajeros</a></li>
                <li><a href="{{route('showuser')}}">Clientes</a></li>
                </ul>
            </li>    
            <li class="submenu">
                <a href="#"><i class="fa fa-fw fa-tv"></i> <span>Ver</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('showproducts')}}">Productos</a></li>
                    <li><a href="ui-buttons.html">Promociones</a></li>
                    <li><a href="ui-buttons.html">Caducados</a></li>
                </ul>
            </li>

            <li class="submenu">
                <a href="#"><i class="fa fa-fw fa-file-text-o"></i><span>Registrar</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                <li><a href="#">Personal</a></li>
                <li><a href="#">Producto</a></li>
                <li><a href="#">Pedido</a></li>
                <li><a href="#">Llegada para almacen</a></li>
                <li><a href="#">Venta</a></li>
                </ul>
            </li>
          
            <li class="submenu">
            <a href="#"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="star-rating.html">Star Rating</a></li>
                <li><a href="range-sliders.html">Range Sliders</a></li>
                <li><a href="tree-view.html">Tree View</a></li>
                <li><a href="sweetalert.html">SweetAlert</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="gmaps.html">GMaps</a></li>
                <li><a href="counter-up.html">Counter-Up</a></li>
                            </ul>
                    </li>
            </ul>
            <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    </div>
  <!-- End Sidebar -->
     @yield('contentadmin')
    <!-- END content -->
    </div>
  <!-- END content-page -->
    <footer class="footer">
        <span class="text-right">Copyright <b>KIOS</b></span>
        <span class="float-right">Powered by <b>keydayp@gmail.com</b></span>
    </footer>
</div>
<!-- END main -->

<script type="text/javascript" src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/moment.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/js/detect.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>

<!-- App js -->
<script type="text/javascript" src="{{asset('admin/assets/js/pikeadmin.js')}}"></script>

<!-- BEGIN Java Script for this page -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <!-- Counter-Up-->
  <script type="text/javascript" src="{{asset('admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

  <script>
    $(document).ready(function() {
      // data-tables
      $('#example1').DataTable();
          
      // counter-up
      $('.counter').counterUp({
        delay: 10,
        time: 600
      });
    } );    
  </script>
  
  <script>
  var ctx1 = document.getElementById("lineChart").getContext('2d');
  var lineChart = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: 'Dataset 1',
          backgroundColor: '#3EB9DC',
          data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
        }, {
          label: 'Dataset 2',
          backgroundColor: '#EBEFF3',
          data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
        }]
        
    },
    options: {
            tooltips: {
              mode: 'index',
              intersect: false
            },
            responsive: true,
            scales: {
              xAxes: [{
                stacked: true,
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
  });


  var ctx2 = document.getElementById("pieChart").getContext('2d');
  var pieChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });


  var ctx3 = document.getElementById("doughnutChart").getContext('2d');
  var doughnutChart = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        datasets: [{
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          "Red",
          "Orange",
          "Yellow",
          "Green",
          "Blue"
        ]
      },
      options: {
        responsive: true
      }
   
  });
  </script>
<!-- END Java Script for this page -->

</body>
</html>