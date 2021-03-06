<?php 
    use App\Groups;
    $groups = Groups::get();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Admin LTE Links -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/morris.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap3-wysihtml5.min.css')}}">
  <!-- Google Font Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lizard</b>Squad</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- Username Menu -->
          <li>
            <a href="{{ url('/logout') }}">
              <i class="glyphicon glyphicon-log-out"></i><span> Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

          <li class="treeview">
            <a>
              <i class="glyphicon glyphicon-menu-hamburger"></i><span>Groups</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/groups') }}"><strong>Show all Groups</strong></a></li>
              @foreach($groups as $group)
              <li><a href="{{ url('/groups/view/'. $group->id) }}">{{ $group->name }}</a></li>
              @endforeach
            </ul>
          </li>

          <li>
            <a href="{{ url('/students') }}">
              <i class="glyphicon glyphicon-user"></i><span>Students</span>
            </a>
          </li>

          <li class="treeview">
            <a>
              <i class="glyphicon glyphicon-star"></i><span>Favorites</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li>

          <li>
            <a href="{{ url('/csv') }}">
              <i class="glyphicon glyphicon-menu-hamburger"></i><span>CSV</span>
            </a>
          </li>
      </ul>
    </section>
  </aside>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <div class="container-fluid"> 

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  @yield('content')
</div>
 

<!-- End Content Wrapper -->
</div>
<!-- Main Footer -->
<footer class="main-footer">
  <div class="pull-right hidden-xs"></div>
    <!-- Default to the left -->
  <strong>Copyright &copy; 2017-2018 <a href="https://trello.com/b/NNOgrrR4/lizard-squad">Lizard Squad</a>.</strong>
</footer>

<!-- jQuery 3 -->
<script src="{{ URL::asset('css/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('css/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('css/adminlte.min.js')}}"></script>

</body>
</html>