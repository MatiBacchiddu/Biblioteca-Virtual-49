<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.14.0/css/all.css')}}" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('css/sweet.css')}}">
  <link rel="stylesheet" href="{{asset('css/matiestilos.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
{{--Cierre header--}}

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

      <nav class="main-header navbar navbar-expand navbar-white navbar-mati">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link rayitas" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('/inicio')}}" class="btn cerrar">Cerrar Sesión</a>
          </li>
        </ul>
      </nav>


 <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>
