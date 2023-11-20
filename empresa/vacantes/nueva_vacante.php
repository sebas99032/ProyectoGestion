<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nueva vacante</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">
</head>

<body class="bg-light">

    <div class="container mt-4">
        <h4 class="mb-4">Nueva vacante</h4>

        <form action="" method="POST" id="nueva_vacante" name="nueva_vacante" autocomplete="off">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>

            <div class="form-group">
                <label for="puesto">Puesto</label>
                <input type="text" class="form-control" name="puesto" id="puesto">
            </div>

            <div class="form-group">
                <label for="horario1">Horario</label>
                <div class="input-group">
                    <input type="time" class="form-control" name="horario1" id="horario1">
                    <div class="input-group-append">
                        <span class="input-group-text">a</span>
                    </div>
                    <input type="time" class="form-control" name="horario2" id="horario2">
                </div>
            </div>

            <div class="form-group">
                <label for="sueldo">Sueldo</label>
                <input type="number" class="form-control" name="sueldo" id="sueldo">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="ingreso_vacante">Dar de alta</button>
            <button type="reset" class="btn btn-secondary">Restablecer todo</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript and jQuery, and your existing JavaScript code -->
    <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
    <script type="text/javascript" src="../../js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
