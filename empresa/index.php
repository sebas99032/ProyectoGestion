<?php
// se inicia sesión
session_start();
// checa que la sesión tenga algo, también la contraseña
// solo pueden entrar los que son administrativos
if (isset($_SESSION['username']) && isset($_SESSION['acceso']) && isset($_SESSION['Id'])) {

    if ($_SESSION['acceso'] == 1) {
        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Título de tu página</title>

            <!-- Incluye el CSS de Bootstrap -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
        <body class="bg-light">

            <div class="container mt-5">
                <h4 class="text-center">Empresa</h4>

                <nav class="mt-3">
                    <a href="vacantes/index.php" class="btn btn-primary mr-2">Vacantes</a>
                    <a href="../php/logout.php" class="btn btn-danger">Cerrar sesión</a>
                </nav>
            </div>

        </body>
        </html>

        <?php
    } else {
        // de caso contrario redirige al login
        echo "<script>history.back();</script>";
    }

} else {
    // de caso contrario redirige al login
    echo "<script>history.back();</script>";
}
?>
