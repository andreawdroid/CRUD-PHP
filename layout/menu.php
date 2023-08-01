<!-- Eliminar cache -->
<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SENA Entrada</title>
        <link rel="preload" href="../css/normalize.css" as="style"> <!-- Acelerar Normalize -->
        <link rel="stylesheet" href="../css/normalize.css"> <!-- Cargar Normalize -->
        <link rel="preload" href="../css/styles.css" as="style"> <!-- Acelerar CSS -->
        <link href="../css/styles.css" rel="stylesheet"> <!-- Hoja de CSS -->
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    
    <body class="body-expanded">
     
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
    <!-- MENU -->
        <div id="sidemenu" class="menu-expanded">
            <!-- HEADER -->
            <div id="header">
                <div id="title"><span>SENA Entrada</span></div>
                <div id="menu-btn">
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                </div>
            </div>

            <!-- PROFILE -->
            <div id="profile">
                <a href="../pages/welcome.php">
                    <div id="photo"><img src="../img/logo-sena white.png" alt=""></div>
                </a>
            </div>

            <!-- ITEMS -->
            <div id="menu-items">

                <!-- Ingreso -->
                <div class="item">
                    <a href="../pages/enterusers.php">
                        <div class="icon"><img src="../img/iconos/log-in white.png" alt=""></div>
                        <div class="title"><span>Ingreso de usuarios</span></div>
                    </a>
                </div>

                <!-- Lista de usuarios -->
                <div class="item">
                    <a href="../pages/users.php">
                        <div class="icon"><img src="../img/iconos/user white.png" alt=""></div>
                        <div class="title"><span>Lista de usuarios</span></div>
                    </a>
                </div>

                <!-- Lista de dispositivos -->
                <div class="item">
                    <a href="../pages/dispositivos.php">
                        <div class="icon"><img src="../img/iconos/dispositivo white.png" alt=""></div>
                        <div class="title"><span>Lista de dispositivos</span></div>
                    </a>
                </div>

                <!-- Lista de vehiculos -->
                <div class="item">
                    <a href="../pages/vehicles.php">
                        <div class="icon"><img src="../img/iconos/trafico white.png" alt=""></div>
                        <div class="title"><span>Lista de vehiculos</span></div>
                    </a>
                </div>

                <!-- Multas / Sanciones -->
                <div class="item">
                    <a href="../pages/sanciones.php">
                        <div class="icon"><img src="../img/iconos/multa white.png" alt=""></div>
                        <div class="title"><span>Multas / Sanciones</span></div>
                    </a>
                </div>

                <!-- Acerca de -->
                <div class="item">
                    <a href="acercade.php">
                        <div class="icon"><img src="../img/iconos/acerca-de white.png" alt=""></div>
                        <div class="title"><span>Acerca de</span></div>
                    </a>
                </div>

                <!-- Menu inferior -->
                <div class="down">

                    <!-- Añadir administrador -->
                    <div class="item">
                        <a href="admin.html">
                            <div class="icon"><img src="../img/iconos/admin white.png" alt=""></div>
                            <div class="title"><span>Añadir administrador</span></div>
                        </a>
                    </div>

                    <!-- Salir -->
                    <div class="item">
                        <a href="../pages/index.php">
                            <div class="icon"><img src="../img/iconos/log-out white.png" alt=""></div>
                            <div class="title"><span>Salir</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Script para cambiar entre menu-expanded | menu-collapsed -->
        <script>
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e => {
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");

                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>