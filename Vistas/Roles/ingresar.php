<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Roles</title>
	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
</head>
<body>
	<header>
		<h1 id="hroles">Roles</h1>
		<h2 id="hlistar">Ingresar</h2>
	</header>

	<form action="../../Controladores/roles.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="apePaterno" placeholder="ApePaterno" required autofocus />
		<input name="apeMaterno" placeholder="ApeMaterno" required autofocus />
		<input name="colonia" placeholder="Colonia" required autofocus />
		<input name="ciudad" placeholder="Ciudad" required autofocus />
		<input name="dirección" placeholder="Dirección" required autofocus />
		<input name="telefono" placeholder="Telefono" required autofocus />
		<input name="email" placeholder="Email" required autofocus />
		<input name="sueldo" placeholder="Sueldo" required autofocus />
		<input name="horarioIni" placeholder="HorarioIni" required autofocus />
		<input name="horarioFin" placeholder="HorarioFin" required autofocus />
		<input name="estatus" placeholder="Estatus" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
	<footer id="pie">
		Derechos reservados &copy; José Guadalupe Gómez Gómez 2021
	</footer>
</body>
</html>