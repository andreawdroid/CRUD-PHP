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

    <body>

        <div id="contenedor-login">

            <div class="header">
                <img src="../img/iconos/logo-login.jpeg">
            </div>

            <div class="login">

                <div class="form">
                    <img src="../img/logo-sena orange.png">
                    <form action="../pages/welcome.php">
                        <div>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                        </div>

                        <div>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>

                        <div class="check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>

                    </form>
                </div>

            </div>

            <p>Entrada SENA 2022 - V1.0</p>

        </div>

    </body>

    </html>