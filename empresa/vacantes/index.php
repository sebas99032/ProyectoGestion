<?php
// se inicia sesion
session_start();
// checa que la sesion tenga algo, tambien la contraseña
// solo pueden entrar los que son administrativos
if (isset($_SESSION['username']) && isset($_SESSION['acceso']) && isset($_SESSION['Id'])) {

    if ($_SESSION['acceso'] == 1) {

        include("../../php/conexion_login.php");

        $Id_empresa = $_SESSION['Id'];

        $query = "SELECT * FROM vacantes WHERE Id_empresa = '$Id_empresa'";
        $busqueda = $con->prepare($query);
        $busqueda->execute() or die("Error: Al buscar vacantes");
?>

        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">
        </head>

        <body>
            <div class="container mt-4">
                <h4 class="text-center">Empresa</h4>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Titulo</th>
                            <th>Puesto</th>
                            <th>De</th>
                            <th>a</th>
                            <th>Sueldo</th>
                            <th>Descripcion</th>
                            <th>Estatus</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($vacantes = $busqueda->fetch(PDO::FETCH_ASSOC)) {
                            extract($vacantes);
                            echo "<tr>";
                            echo    "<td>" . $titulo . "</td>";
                            echo    "<td>" . $puesto . "</td>";
                            echo    "<td>" . $horario1 . "</td>";
                            echo    "<td>" . $horario2 . "</td>";
                            echo    "<td>" . $sueldo . "</td>";
                            echo    "<td>" . $descripcion . "</td>";
                            if ($estatus == 1) {
                                echo "<td><button class='btn btn-danger' onclick='estatus(" . $Id_vacante . ", 0);'>Desactivar</button></td>";
                            } else {
                                echo "<td><button class='btn btn-success' onclick='estatus(" . $Id_vacante . ", 1);'>Activar</button></td>";
                            }
                            echo    "<td><button class='btn btn-primary' onclick='editar(" . $Id_vacante . ");'>Editar</button></td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
                <div id="editar_vacante" class="mt-4">
                    <!-- Your form content here -->
                </div>

                <a class="btn btn-primary" href="nueva_vacante.php">Nueva vacante</a>
                <a class="btn btn-secondary" href="../../php/logout.php">Cerrar sesion</a>
            </div>

            <!-- Bootstrap JavaScript and jQuery, and your existing JavaScript code -->
            <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <script>
                $(document).ready(function() {
                    $("div#editar_vacante").hide();
                })

                function editar(Id) {

                    var url = "../../php/editar_vacante.php";
                    $.post(
                        url, {
                            id: Id
                        }
                    )
                        .done(function(data) {
                            var json = eval(data);

                            $.each(json, function(i, valor) {
                                console.log(i + " -> " + valor.titulo + ", " + valor.puesto);
                                $("#id").val(valor.id);
                                $("#titulo").val(valor.titulo);
                                $("#puesto").val(valor.puesto);
                                $("#sueldo").val(valor.sueldo);
                                $("#horario1").val(valor.horario1);
                                $("#horario2").val(valor.horario2);
                                $("#descripcion").val(valor.descripcion);
                            })
                            $("div#editar_vacante").show();

                        })
                        .fail(function(data) {
                            alert("fail");
                        });
                }

                function estatus(Id, accion) {

                    var url = "../../php/estatus_vacante.php";
                    $.post(
                        url, {
                            id: Id,
                            accion: accion
                        }
                    )
                        .done(function(data) {
                            swal({
                                title: "Modificar estatus",
                                text: data,
                                type: "success",
                                confirmButtonText: "Ok!"
                            });
                        })
                        .fail(function(data) {
                            swal({
                                title: "Modificar estatus",
                                text: data,
                                type: "error",
                                confirmButtonText: "Ok!"
                            });
                        });
                    return false; // Evitar ejecutar el submit del formulario.
                }

                $(function() {
                    $("#modificar").click(function() {
                        var url = "../../php/modificar_vacante.php"; // El script a dónde se realizará la petición.
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: $("#modificar_vacante").serialize()
                        })
                            .done(function(data) {
                                swal({
                                    title: "Modificar vacante",
                                    text: data,
                                    type: "success",
                                    confirmButtonText: "Ok!"
                                });
                            })
                            .fail(function(data) {
                                swal({
                                    title: "Modificar vacante",
                                    text: data,
                                    type: "error",
                                    confirmButtonText: "Ok!"
                                });
                            });
                        return false; // Evitar ejecutar el submit del formulario.
                    });
                });
            </script>

        </body>

        </html>

<?php
    } else {
        // de caso contrario redireciona al login
        echo "<script>history.back();</script>";
    }
} else {
    // de caso contrario redireciona al login
    echo "<script>history.back();</script>";
}
?>
