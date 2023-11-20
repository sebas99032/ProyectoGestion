<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
</head>

<body class="container mt-5">
	<h1>Registro de Usuario</h1>
	<form action="" method="POST" name="form_pers" id="form_pers" autocomplete="off">

		<h4>Datos personales</h4>

		<div class="form-group">
			<label for="username">Usuario</label>
			<input type="text" class="form-control" name="username" id="username">
		</div>

		<div class="form-group">
			<label for="fotografia">Fotografía</label>
			<input type="file" class="form-control-file" name="fotografia" id="fotografia">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="password">Contraseña</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			<div class="form-group col-md-6">
				<label for="password2">Repetir contraseña</label>
				<input type="password" class="form-control" name="password2" id="password2">
			</div>
		</div>

		<!-- Resto de tu formulario -->
		<!-- Resto del formulario -->

		<label for="correo">Correo</label>
		<input type="email" class="form-control" name="correo" id="correo">

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre">
			</div>
			<div class="form-group col-md-3">
				<label for="apellidoPaterno">Apellido paterno</label>
				<input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno">
			</div>
			<div class="form-group col-md-3">
				<label for="apellidoMaterno">Apellido materno</label>
				<input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="numero">Número</label>
				<input type="text" class="form-control" name="numero" id="numero">
			</div>
			<div class="form-group col-md-6">
				<label for="genero">Género</label>
				<select class="form-control" name="genero" id="genero">
					<option disabled selected>Masculino/Femenino</option>
					<option value="M">Masculino</option>
					<option value="F">Femenino</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="edad">Edad</label>
				<input type="number" class="form-control" name="edad" id="edad">
			</div>
			<div class="form-group col-md-6">
				<label for="nacionalidad">Nacionalidad</label>
				<select class="form-control" name="nacionalidad" id="nacionalidad">
					<option disabled selected>Elegir una opción</option>
					<option value="Mexicana">Mexicana</option>
					<option value="Extranjera">Extranjera</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="estado_civil">Estado civil</label>
				<select class="form-control" name="estado_civil" id="estado_civil">
					<option disabled selected>Elegir una opción</option>
					<option value="Soltero">Soltero</option>
					<option value="Divorciado">Divorciado</option>
					<option value="Casado">Casado</option>
					<option value="Viudo">Viudo</option>
				</select>
			</div>
		</div>

		<h4>Información importante</h4>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="disponibilidad1">Disponibilidad de horario</label>
				<input type="time" class="form-control" name="disponibilidad1" id="disponibilidad1">
			</div>
			<div class="form-group col-md-6">
				<label for="disponibilidad2">a</label>
				<input type="time" class="form-control" name="disponibilidad2" id="disponibilidad2">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="estudia" class="estudia">¿Estudias?</label>
				<select class="form-control estudia" name="estudia" id="estudia">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<!-- Resto del formulario -->
		<!-- Continuación del formulario -->

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nombre_escuela" class="escuela">Nombre</label>
				<input type="text" class="form-control escuela" name="nombre_escuela" id="nombre_escuela">
			</div>
			<div class="form-group col-md-6">
				<label for="direccion_escuela" class="escuela">Dirección</label>
				<input type="text" class="form-control escuela" name="direccion_escuela" id="direccion_escuela">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="horario1" class="escuela">Horario</label>
				<input type="time" class="form-control escuela" name="horario1" id="horario1">
			</div>
			<div class="form-group col-md-6">
				<label for="horario2" class="escuela">a</label>
				<input type="time" class="form-control escuela" name="horario2" id="horario2">
			</div>
		</div>

		<h4>Referencias</h4>

		<table id="referencias" class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Número celular</th>
					<th>Parentesco</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="text" class="form-control" name="nombre_r[]" id="nombre_r">
					</td>
					<td>
						<input type="text" class="form-control" name="direccion_r[]" id="direccion_r">
					</td>
					<td>
						<input type="text" class="form-control" name="numero_r[]" id="numero_r">
					</td>
					<td>
						<input type="text" class="form-control" name="parentesco_r[]" id="parentesco_r">
					</td>
				</tr>
			</tbody>
		</table>

		<button class="btn btn-primary" id="nueva_referencia">Nueva referencia</button>

		<!-- Continuación del formulario -->
		<h4>Estudios</h4>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="nivel_e">Nivel</label>
				<select class="form-control" name="nivel_e[]" id="nivel_e">
					<option disabled selected>Elija un nivel</option>
					<option value="Primaria">Primaria</option>
					<option value="Secundaria">Secundaria</option>
					<option value="Preparatoria">Preparatoria</option>
					<option value="Universidad">Universidad</option>
					<option value="Maestría">Maestría</option>
					<option value="Posgrado">Posgrado</option>
					<option value="Doctorado">Doctorado</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="nombre_e">Nombre instituto</label>
				<input type="text" class="form-control" name="nombre_e[]" id="nombre_e">
			</div>
			<div class="form-group col-md-4">
				<label for="titulo_e">Título recibido</label>
				<input type="text" class="form-control" name="titulo_e[]" id="titulo_e">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="anios_e">Años</label>
				<input type="number" class="form-control" name="anios_e[]" id="anios_e">
			</div>
		</div>

		<button class="btn btn-primary" id="nuevo_estudio">Nuevo estudio</button>

		<h4>Trabajos anteriores</h4>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="trabajo_anterior">¿Ha trabajado anteriormente?</label>
				<select class="form-control trabajo_anterior" name="trabajo_anterior" id="trabajo_anterior">
					<option value="" disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="nombre_t" class="trabajo">Nombre</label>
				<input type="text" class="form-control trabajo" name="nombre_t[]" id="nombre_t">
			</div>
			<div class="form-group col-md-4">
				<label for="anios_t" class="trabajo">Años</label>
				<input type="number" class="form-control trabajo" name="anios_t[]" id="anios_t">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="direccion_t" class="trabajo">Dirección</label>
				<input type="text" class="form-control trabajo" name="direccion_t[]" id="direccion_t">
			</div>
			<div class="form-group col-md-6">
				<label for="numero_t" class="trabajo">Número telefónico</label>
				<input type="text" class="form-control trabajo" name="numero_t[]" id="numero_t">
			</div>
		</div>

		<!-- Continuación del formulario -->
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="puesto_t" class="trabajo">Puesto ejercido</label>
				<input type="text" class="form-control trabajo" name="puesto_t[]" id="puesto_t">
			</div>
			<div class="form-group col-md-6">
				<label for="sueldo_t" class="trabajo">Sueldo</label>
				<input type="number" class="form-control trabajo" name="sueldo_t[]" id="sueldo_t">
			</div>
		</div>

		<div class="form-group">
			<label for="motivo_separacion_t" class="trabajo">Motivo de separación</label>
			<textarea class="form-control trabajo" name="motivo_separacion_t[]" id="motivo_separacion_t" cols="30" rows="2"></textarea>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="jefe_t" class="trabajo">Nombre del jefe</label>
				<input type="text" class="form-control trabajo" name="jefe_t[]" id="jefe_t">
			</div>
			<div class="form-group col-md-6">
				<label for="comentario_jefe_t" class="trabajo">Comentarios hacia el jefe</label>
				<textarea class="form-control trabajo" name="comentario_jefe_t[]" id="comentario_jefe_t" cols="30" rows="2"></textarea>
			</div>
		</div>

		<button class="btn btn-primary trabajo">Nuevo trabajo anterior</button>

		<h4>Datos generales</h4>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="afiliado">¿Está afiliado a algún sindicato?</label>
				<select class="form-control" name="afiliado" id="afiliado">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="afianzado">¿Está afianzado?</label>
				<select class="form-control" name="afianzado" id="afianzado">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="seguro_vida">¿Cuenta con seguro de vida?</label>
				<select class="form-control" name="seguro_vida" id="seguro_vida">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="viajar">¿Puede viajar?</label>
				<select class="form-control" name="viajar" id="viajar">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="cambiar_residencia">¿Cambiaría de residencia?</label>
				<select class="form-control" name="cambiar_residencia" id="cambiar_residencia">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="fecha_empezar">Fecha a la que puede empezar a trabajar</label>
				<input type="date" class="form-control" name="fecha_empezar" id="fecha_empezar">
			</div>
		</div>

		<!-- Continuación del formulario -->
		<!-- Continuación del formulario -->

		<h4>Domicilio</h4>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="cp">Código postal</label>
				<input type="search" class="form-control auto" name="cp" id="cp">
				<input type="button" class="btn btn-primary" value="Verificar" onclick="verificar_cp();" />
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="estado">Estado</label>
				<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" />
			</div>
			<div class="form-group col-md-4">
				<label for="ciudad">Ciudad</label>
				<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" />
			</div>
			<div class="form-group col-md-4">
				<label for="colonia">Colonias</label>
				<select class="form-control" name="colonia" id="colonias">
					<option value="" selected disabled>Colonias</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="direccion">Dirección</label>
			<input type="text" class="form-control" name="direccion" id="direccion">
		</div>

		<h4>Documentación</h4>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="curp">¿Tienes CURP?</label>
				<select class="form-control" name="curp" id="curp">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="seguro_social">¿Tienes seguro social?</label>
				<select class="form-control" name="seguro_social" id="seguro_social">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<!-- Continuación del formulario -->

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="afore">¿Tienes AFORE?</label>
				<select class="form-control" name="afore" id="afore">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="rfc">¿Tienes RFC?</label>
				<select class="form-control" name="rfc" id="rfc">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="cartilla_militar">¿Tienes cartilla militar?</label>
				<select class="form-control" name="cartilla_militar" id="cartilla_militar">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="es_extranjero">¿Eres extranjero?</label>
				<select class="form-control es_extranjero" name="es_extranjero" id="es_extranjero">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<div class="form-group extranjero_documento">
			<label for="extranjero_documento">Documento</label>
			<input type="text" class="form-control" name="extranjero_documento" id="extranjero_documento">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="pasaporte">¿Tienes pasaporte?</label>
				<select class="form-control" name="pasaporte" id="pasaporte">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="licencia">¿Tienes licencia de manejo?</label>
				<select class="form-control licencia" name="licencia" id="licencia">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<div class="form-group clase_numero_licencia">
			<label for="clase_numero_licencia">Clase y número de licencia</label>
			<input type="text" class="form-control" name="clase_numero_licencia" id="clase_numero_licencia">
		</div>

		<!-- Continuación del formulario -->

		<h4>Economía</h4>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="ingresos">¿Tiene otros ingresos?</label>
				<select class="form-control" name="ingresos" id="ingresos">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="conyuge_trabaja" class="conyuge_trabaja">¿Cónyuge trabaja?</label>
				<select class="form-control conyuge_trabaja" name="conyuge_trabaja" id="conyuge_trabaja">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>

			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="casa_propia">¿Tiene casa propia?</label>
				<select class="form-control" name="casa_propia" id="casa_propia">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="renta" class="renta">¿Paga renta?</label>
				<select class="form-control renta" name="renta" id="renta">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="vehiculo">¿Tiene vehículo propio?</label>
				<select class="form-control" name="vehiculo" id="vehiculo">
					<option disabled selected>Si/No</option>
					<option value="Automovil">Automóvil</option>
					<option value="Motocicleta">Motocicleta</option>
					<option value="0">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="deudas">¿Tiene deudas?</label>
				<select class="form-control" name="deudas" id="deudas">
					<option disabled selected>Si/No</option>
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>
		</div>

		<h4>Documentos extra</h4>

		<div class="form-group">
			<label for="curriculum">Curriculum</label>
			<input type="file" class="form-control" name="curriculum" id="curriculum">
		</div>

		<div class="form-group">
			<label for="carta_recomendacion">Carta de recomendación</label>
			<input type="file" class="form-control" name="carta_recomendacion" id="carta_recomendacion">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<button id="boton_ingreso_persona" type="submit" class="btn btn-primary">Dar de alta</button>
			</div>
			<div class="form-group col-md-6">
				<button type="reset" class="btn btn-secondary">Restablecer todo</button>
			</div>
		</div>
	</form>
</body>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>

</html>