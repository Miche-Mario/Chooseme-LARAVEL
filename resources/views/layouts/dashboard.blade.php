
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> {{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="La plateforme de réseautage qui vous aide à atteindre tous vos objectifs professionnels">
  <meta name="keywords" content="choose, chooseme, reseautage, objectifs professionnels, reseau chooseme, chouzeme, application mobile, recrutement, emplois">
  <link rel="shortcut icon" type="image/png" href="{{ asset('/')}}/chooseme_icon.png">
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="public/css/flashy.css"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" >
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('backend/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="img/Logo.png" style="height:30px; width:30px" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ChooseMe</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-user" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
            </li>
        </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Recherche...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tableau de bord</span></a></li>
        <li><a href="{{ route('prospects.index') }}"><i class="fa fa-users"></i> <span>Prospects</span></a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="{{ url('envoi-de-mail') }}"><i class="fa fa-envelope"></i> <span>Envoyer un mail</span></a></li>
        <li><a href="{{ url('/') }}"><i class="fa fa-backward"></i> <span>Retour sur le site</span></a></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                <span>Se déconnecter</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      @yield('content_header')

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

      <script src="//code.jquery.com/jquery.js"></script>
      @include('flashy::message')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    {{-- <div class="pull-right hidden-xs">
      Réalisée par <strong><a href="#" title="Entreprise informatique">FADLAB</a></strong>
    </div> --}}
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('dashboard') }}">Chooseme</a>.</strong> Tous droits réservés!
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="https://code.jquery.com/jquery.js"></script>

<!-- jQuery 3 -->
<script src=" {{ asset('backend/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" {{ asset('backend/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('backend/')}}/dist/js/adminlte.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mydata').DataTable();
    } );
</script>
</body>
</html>
