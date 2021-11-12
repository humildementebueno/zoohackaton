<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>San Juan</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

       
        <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet"></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>



    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            Centro San Juan
                            <!-- <img src="{{asset('images/logo.png')}}" alt="" height="24"> -->
                        </span>
                        <i>
                            CSJ
                            <!-- <img src="{{asset('images/logo-sm.png')}}" alt="" height="22"> -->
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                     

                       
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ url('/logout') }}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                            <H3 style="color:white">Centro de Educacion Especial San Juan de Dios</H3>
                                <!-- <a class="btn btn-header waves-effect waves-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create New
                                </a> -->
                                
                          
                            </div>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="mdi mdi-home"></i> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-box"></i> <span> Usuarios <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                <li><a href="/modulos/users/create"><i class="fa fa-circle-o"></i> Nuevo Usuario</a></li>
                                <li><a href="/modulos/users"><i class="fa fa-circle-o"></i> Listado</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Estudiantes <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="/modulos/estudiantes">Registros</a></li>
                                    <li><a href="/modulos/cencalificacion">Calificaciones</a></li>
                                    <li><a href="/modulos/esasistencia">Asistencias</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-black-mesa"></i> <span> Profesores <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="/modulos/profesores">Registros</a></li>
                                    <li><a href="/modulos/datocurso">Cursos</a></li>
                                    <!-- <li><a href="#">Lista Estudiantes</a></li>
                                    <li><a href="#">Registro de Notas</a></li>
                                    <li><a href="#">Registro de Asistencia</a></li> -->
                                </ul>
                            </li>

                          
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table-settings"></i><span> Cursos <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="/modulos/cursos">Registros</a></li>
                                    <li><a href="/modulos/asignacion">Asignacion</a></li>
                                    <li><a href="/modulos/asignatura">Asignatura</a></li>
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                            <li class="menu-title">Extras</li>
                            
                            <!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-finance"></i><span> Reportes <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">1</a></li>
                                </ul>
                            </li> -->
                           
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-page-layout-sidebar-left"></i><span> Ayuda <span class="badge badge-warning float-right">NEW</span> </span></a>
                               
                            </li>

                          
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                                    </ol>
            
                                    
                                </div>
                            </div>
                        </div> -->
                        <!-- end row -->

                       
                            <!-- end row -->
                            
                            
                            <!-- end row -->
                            
                           
                            <!-- end row -->
                          
                            @yield('contenido')
                              
		                          <!--Contenido-->
                              <!-- <h3>Contenido</h3> -->
		                          <!--Fin Contenido-->
		                    
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
                
                         
        
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <footer class="footer">
                Copyright © 2021 <span class="d-none d-sm-inline-block">- By <i class="mdi mdi-heart text-danger"></i> Univ. </span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            

        <!-- jQuery  -->
        <!-- <script src="{{asset('js/jquery.min.js')}}"></script> -->
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/metisMenu.min.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/waves.min.js')}}"></script>

        <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Peity JS -->
        <script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>

        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('js/app.js')}}"></script>
       
        <!-- <script>
  document.write(
    '<script src="http://' +
      (location.host || '${1:localhost}').split(':')[0] +
      ':${2:35729}/livereload.js?snipver=1"></' +
      'script>'
  );
</script> -->

    </body>

</html>