<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/custom-boostrap.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Proyecto</title>
</head>
<body>
    
    <!--navbar basica-->
    <!--
    <nav class="navbar navbar-expand" style="background-color:#66c0f4;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{asset('images/usm-navlogo.png')}}" alt="USM" width="220" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav navbar-center">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tipo de Sesion 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('estudiantes.index')}}">Alumno</a></li>
                  <li><a class="dropdown-item" href="{{route('profesores.index')}}">Profesor</a></li>
                  <li><a class="dropdown-item" href="{{route('administradores.index')}}">Administrador</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>-->

  <nav class="navbar default" style="background-color:#66c0f4;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       <img src="{{asset('images/usm-navlogo.png')}}" alt="USM" width="280" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <img src="{{asset('images/isotipo-usm.jpg')}}" alt="USM" width="100" height="80">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li>
              <hr class="nav-divider">
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('estudiantes.index')}}">Estudiantes</a>
            </li>
            <li>
              <hr class="nav-divider">
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('profesores.index')}}">Profesores</a>
            </li>
            <li>
              <hr class="nav-divider">
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('administradores.index')}}">Administradores</a>
            </li>
          </ul>
        
        </div>
      </div>
    </div>
  </nav>

    @yield('contenido-principal')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>