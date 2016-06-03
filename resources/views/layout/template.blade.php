<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo', 'PMA')</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/css/custom.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <style>
     /*  html, body, .container, .main_container, .left_col, .right_col{
       height:100% !important;
       overflow:auto;
     } */
     .left_col{
        background: #2A3F54;
        height: 100%;
     }
     body{
      background: #F7F7F7;
     }
      .icon i{
        color:#2A3F54;
      }
      .block-center{
        float:none;
        margin:auto;
      }
    </style>
    @yield('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-book"></i> <span>PMA</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="/img/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Auth::User()->nombre}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Usuarios</h3>
                <ul class="nav side-menu">
                  <li class="active"><a><i class="fa fa-home"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                        <li>
                            <a href="{{route('usuarios.index')}}">Usuarios</a>
                        </li>
                        <li>
                            <a href="{{route('actas.index')}}">Actas</a>
                        </li>
                        <li>
                            <a href="{{route('acuerdos.index')}}">Acuerdos</a>
                        </li>
                        <li>
                            <a href="{{route('seguimientos.index')}}">Seguimientos</a>
                        </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/img/img.jpg" alt="">{{Auth::User()->nombre}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('usuarios.edit', Auth::user()->id)}}">Perfil</a>
                    </li>
                    <li><a href="{{route('login.salir')}}"><i class="fa fa-sign-out pull-right"></i>Salir</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
            @yield('contenido')
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/laravel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="/js/actas.js"></script>
    @yield('js')
  </body>
</html>