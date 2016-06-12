 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Usuario</title>

     {!! MaterializeCSS::include_full() !!}
     <link href="{{ asset('fontAwesome/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ asset('styles/main.css') }}" rel="stylesheet" type="text/css">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 </head>
 <body>

  <!-- Nav superior -->
  <div class="navbar-fixed">
    <nav class="red darken-3 superior ">
      <a href="{{ route('inicio') }}" class="brand-logo"><img src='{{asset('images/tecateText.png')}}' height="45px" class ="center"/ style="margin-left:-7px; margin-top:7px"></a>

      <ul class="left">
         <li></li>
     </ul>
     <!-- Oculta en s -->

     <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>"><i class="material-icons" style="height:64px;">refresh</i></a></li>
      @if (Auth::guest())
      <li><a href="{{ route('login') }}"> Entrar <i class="material-icons right">play_arrow</i></a></li>
      @else
      <ul id="dropdownSesion" class="dropdown-content">
         <li><a class="black-text" href="#!"><i class="fa fa-fw fa-user"></i> Perfil</a></li>
         <li class="divider"></li>
         <li><a class="black-text" href="{{ route('logout') }}"><i class="fa fa-sign-out left" aria-hidden="true"></i> Salir</a></li>
     </ul>
     <li><a class="dropdown-button" href="#!" data-activates="dropdownSesion"><i class="material-icons" style="height:64px;">more_vert</i></a></li>
     @endif

 </ul>
 <!-- Oculta en m y mayores-->
 <ul id="slide-out" class="side-nav">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
</div>

<!-- Fin Nav superior -->

<!-- Nav pequeña lateral -->
<ul id="slide-out2" class="side-nav fixed z-depth-0">
  <li ><a href="{{ route('inicio') }}"><img src='{{asset('images/tecate.png')}}' width="45px" class ="center"/ style="margin-left:-7px; margin-top:7px"></a></li>
  <li><a href="#" data-activates="slide-out3" class="button-collapse show-on-large hide-on-med-and-down"><i class="fa fa-bars fa-2x"></a></i>
  </li>
  <li> <i class="fa fa-search fa-2x"></i></li>
</ul>

<!-- Fin  Nav pequeña lateral -->

<!-- Nav desplegable lateral -->
<ul id="slide-out3" class="side-nav">
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <a class="collapsible-header black-text" href="{{ route('inicio') }}" ><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
  </li>
  <li>
      <div class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i>Usuarios<i class="right fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="collapsible-body">
        <a class="collapsibe-header black-text" href="{{ route('user.index') }}"><i class="fa fa-eye" aria-hidden="true"></i>Ver todos</a>
        <a class="collapsibe-header black-text" href="{{ route('user.create') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Agregar</a>
    </div>
</li>
<li>
  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
</li>
<li>
  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
</li>
</ul>
</ul>

<!-- Fin Nav desplegable lateral -->
<!-- Titulo y miga de pan -->

<div class="col s12 no-padding">
  <div class="section white z-depth-0 titulo">
    <div class="row no-padding no-margin">
      <div class="col m6">
        <span class="titulo">@yield('titulo')</span>
    </div>
    <div class="col m6" style="padding:5px 2rem 0 0;">
        <span class="bread right">@yield('miga')</span>
    </div>
</div>
</div>
</div>

<!-- Fin Titulo y miga de pan -->
<!-- Contenido -->
<div class="contenido">
  <div class="row">
    <div class="col m10 offset-m1">

      @if (Session::has('flash_notification.message'))
      <script >
        Materialize.toast('{{ Session::get('flash_notification.message') }}', 10000);
    </script>
    @endif

    @yield('content')
</div>
</div>
</div>
<!-- Fin Contenido -->

<script type="text/javascript">

  $('.button-collapse').sideNav({
      edge: 'left', // Choose the horizontal origin
  }
  );

  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });
});


</script>


</body>
</html>