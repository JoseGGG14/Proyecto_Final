<?php require_once '../../Modelos/rol.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Empleados</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<header>
		<h1 id="hroles">Catalogo de Empleados</h1>
		<h2 id="hlistar">Lista de Empleados</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php">Ingresar nuevo empleado</a>
	</div>
	<br>

	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>NumEmpleado</th>
				<th>Nombre</th>
				<th>ApePaterno</th>
				<th>ApeMaterno</th>
				<th>Colonia</th>
				<th>Ciudad</th>
				<th>Dirección</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Sueldo</th>
				<th>HorarioIni</th>
				<th>HorarioFin</th>
				<th>Estatus</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
	<tbody>
		<?php foreach (Rol::listar() as $fila) { ?>
			<tr>
				<td id="id"><?= $fila[0] ?></td>
				<td id="Nombre"><?= $fila[1] ?></td>
				<td id="ApePaterno"><?= $fila[2] ?></td>
				<td id="ApeMaterno"><?= $fila[3] ?></td>
				<td id="Colonia"><?= $fila[4] ?></td>
				<td id="Ciudad"><?= $fila[5] ?></td>
				<td id="Dirección"><?= $fila[6] ?></td>
				<td id="Telefono"><?= $fila[7] ?></td>
				<td id="Email"><?= $fila[8] ?></td>
				<td id="Sueldo"><?= $fila[9] ?></td>
				<td id="HorarioIni"><?= $fila[10] ?></td>
				<td id="HorarioFin"><?= $fila[11] ?></td>
				<td id="Estatus"><?= $fila[12] ?></td>

				<div id="opciones" width="50" height="50">
					<td>
						<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					</td>
				</div>
				<td>
					<a id="aeliminar" href="../../Controladores/roles.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
	</table>
	<section class="container text-center" id="cont">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!--vue.resource-->
                    <!--Recorrer el arreglo de datos para poder ver los resultados-->
                    <hr/>
                    <!--axios-->
                    <h2>Personas Interesadas en Trabajar</h2>
                    <img v-for="persona in personasAxios" v-bind:src="persona.picture.thumbnail" :title="persona.name.first">
                    <hr/>
                </div>
            </div>
        </section>

        <script src="vue.js"></script>
        <script src="funciones.js"></script>

	<footer id="pie">
		Derechos reservados &copy; José Guadalupe Gómez Gómez 2021
	</footer>
</body>
</html>