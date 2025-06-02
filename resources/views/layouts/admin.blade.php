<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIME</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!--iCheck-->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/squeare/all.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/sime.jpg')}}">
    <link rel="shortcut icon" href="{{asset('img/sime.jpg')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini" >
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{asset('/principal')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b style="color:#C7FF33">S</b><b style="color:#C7FF33">I</b><b style="color:#C7FF33">M</b><b style="color:#C7FF33">E</b></span> 
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b style="color:#C7FF33">S</b><b style="color:#C7FF33">I</b><b style="color:#C7FF33">M</b><b style="color:#C7FF33">E</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas"  style="color:#C7FF33" role="button">
            <span class="sr-only" >Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" >
            <ul class="nav navbar-nav" >
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="fa fa-user-md  fa-lg" style="  color:#C7FF33" ></small>
                  <strong><span class="hidden-xs"  style="color:#C7FF33">DR. {{ Auth::user()->name }}</span></strong>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      DR. {{ Auth::user()->name }}<br>

                      <img src="{{asset('img/doctor.png')}}" width="100px" alt="50px">
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer" >
                    
                    <div class="pull-right btn btn-defaul btn-flat" >
                        <a href="{{ route('logout') }} "
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <b style="color:#C70039">SALIR</b>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                      
                    </div><!--div class="pull-right btn btn-defaul btn-flat-->
                  </li><!--li class="user-footer"-->
                </ul><!--ul class="dropdown-menu"-->
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" >
            <li class="header"></li>
            
            <li class="treeview">
              <a href="">
                <i class="fa fa-user-md " style=" font-size:25px; color:#33DDFF"></i>
                <span> Agenda Médica</span>
                <i class="fa fa-angle-left pull-right " style="color:#33DDFF"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('/datos/generales/')}}"><i class="fa fa-user-plus fa-lg" style=" font-size:20px; color:#33D4FF"></i> Pacientes</a></li>
                <li><a href="#"><i class="fa fa-circle-o fa-lg" style=" color:#33D4FF"></i> Cuenta Pacientes</a></li>
                <li><a href="{{asset('/datos/medico/')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33D4FF"></i> Médicos</a></li>
                
                <li><a href="{{asset('/datos/agenda/')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33D4FF"></i> Agenda del Médico</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-stethoscope fa-2x" style=" color:#C70039"></i> <span> Signos Vitales</span>
                <i class="fa fa-angle-left pull-right" style=" color:#C70039"></i>
                <ul class="treeview-menu">
                <li><a href="{{asset('/expediente/formatos/svitales/nu')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C70039"></i> Nota de Urgencias</a></li>
                <li><a href="{{asset('/expediente/formatos/svitales/ni')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C70039"></i> Nota de Ingreso Especialista</a></li>
                <li><a href="{{asset('/expediente/formatos/svitales/hc')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C70039"></i> Historia Clínica</a></li>
                <li><a href="{{asset('/expediente/formatos/svitales/nev')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C70039"></i> Nota de Evolución</a></li>
                <li><a href="{{asset('/expediente/formatos/svitales/negs')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C70039"></i> Nota de Egreso</a></li>
                
              </ul>
              </a>
              
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-h-square fa-lg" style=" color:#33FF52"></i>
                <span> Expediente Médico</span>
                 <i class="fa fa-angle-left pull-right" style=" color:#33FF52"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('/expediente/formatos/nurgencias')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Nota de Urgencias</a></li>
                <li><a href="{{asset('/expediente/formatos/sic')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Solicitud de Interconsulta</a></li>
                <li><a href="{{asset('/expediente/formatos/nie')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Nota de Ingreso Especialista</a></li>
                <li><a href="{{asset('/expediente/formatos/hclinica')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Historia Clínica</a></li>
                <li><a href="{{asset('/expediente/formatos/ne')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Nota de Evolución</a></li>
                <li><a href="{{asset('/expediente/formatos/neg')}}"><i class="fa fa-circle-o fa-lg" style=" color:#33FF52"></i> Nota de Egreso</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-plus-square fa-lg" style=" color:#FF5733"></i>
                <span> Auxiliares de Díagnostico</span>
                 <i class="fa fa-angle-left pull-right" style=" color:#FF5733"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('/expediente/formatos/rx/create')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF5733"></i> Rayos X</a></li>
                <li><a href="{{asset('/expediente/formatos/lab/create')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF5733"></i> Laboratorio</a></li>
                 <li><a href="#"><i class="fa fa-circle-o fa-lg" style=" color:#FF5733"></i> Gabinete</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-medkit fa-lg" style=" color:#FF3342"></i>
                <span> Indicaciones Médicas</span>
                 <i class="fa fa-angle-left pull-right" style=" color:#FF3342"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('/expediente/formatos/im/imnu')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF3342"></i> Nota de Urgencias</a></li>
                <li><a href="{{asset('/expediente/formatos/im/imni')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF3342"></i> Nota de Ingreso Especialista</a></li>
                <li><a href="{{asset('/expediente/formatos/im/imnev')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF3342"></i> Nota de Evolución</a></li>
                <li><a href="{{asset('/expediente/formatos/im/imne')}}"><i class="fa fa-circle-o fa-lg" style=" color:#FF3342"></i> Nota de Egreso</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file fa-lg" style=" color:#C7FF33"></i> <span> Receta</span>
                <i class="fa fa-angle-left pull-right" style=" color:#C7FF33"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('/expediente/formatos/receta/create')}}"><i class="fa fa-circle-o fa-lg" style=" color:#C7FF33"></i> Receta</a></li>
                
              </ul>
            </li>

            
              <!--

             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Manual de Usuario</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca Del Software...</span>
                <small class="label pull-right bg-blue">fagCOM</small>
              </a>
            </li>
                  -->      
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">
                  <strong>
                    @yield('title')

                  </strong>

                  </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  	 <div class="row">
	                  	      <div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                             </div>
                   
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 <a >fagCOM</a>.</strong>
        All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
    <!--iCheck-->
    <script src="{{asset('js/iCheck.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    @include('sweet::alert')
  </div><!--div wraper-->
  </body>
</html>
