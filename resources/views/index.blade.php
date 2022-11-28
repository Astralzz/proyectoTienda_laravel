<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>HHH</title>
</head>

<body>
    {{-- Encabezado --}}
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Dan Gracia el puto</h5>
            <span class="text-muted">Trabajo: Modelo vista controlador MVC</span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" id="narvarlPrincipal">
            {{-- Boton principal --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- Link del inicio --}}
            <a class="nav-link text-white" href="/">inicio</a>

            {{-- Link de la tabla --}}
            <li class="nav-item dropdown">
                <a class="nav-item dropdown text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="text-decoration: none">
                    productos
                </a>
                <ul class="dropdown-menu">
                    {{-- Tabla de productos --}}
                    <li><a class="dropdown-item" href="/productos">Tabla</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    {{-- Crear un nuevo producto --}}
                    <li><a class="dropdown-item" href="/productos/crear">Nuevo producto</a></li>
                </ul>
            </li>

            {{-- Titulo --}}
            <h2 class="h2 text-white">Tabla de artículos usando MVC</h2>

        </div>
    </nav>

    <!-- Contenido externo -->
    <div class="d-flex flex-column bd-highlight mb-3">
        @yield('tablaID')
        @yield('inicioID')
        @yield('crearID')
    </div>

</body>

</html>
