<header>
    <nav class="navbar navbar-expand-lg" style = "background-color:#33AE47">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="PanelAdministrador.php">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="PanelAdministrador.php" style = "color:#FFF" id = "item">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Informacion.php" style = "color:#FFF" id = "item">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="GestionUsuarios.php" style = "color:#FFF" id = "item">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="GestionZoologicos.php" style = "color:#FFF" id = "item">Zoológicos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                            Especies
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="GestionEspecies.php">Gestión de especies</a></li>
                            <li><a class="dropdown-item" href="AñadirEspecies.php">Agregar especies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                            Animales
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="GestionAnimales.php">Gestión de animales</a></li>
                            <li><a class="dropdown-item" href="GestionFamilias.php">Gestión de familias</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="float-sm-end" role="cerrarSesion" method="POST" action="../../config/CerrarSesion.php">
                    <button class="navbar-brand d-flex btn" type="submit" id = "boton" style = "background-color:#ECD172">
                        <img src="../../Imagenes/Iconos/cerrar-sesion.png" alt="Logo" width="35px" height="35px" class="d-inline-block align-text-top">
                        <div class="vr" style = "color:#FFF; margin-left: 1px;"></div>
                        <div class="vr" style = "color:#FFF; margin-right: 10px; "></div>
                        <h6 class="ultimo">Cerrar Sesión</h6> 
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>