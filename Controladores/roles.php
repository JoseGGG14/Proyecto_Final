<?php require_once '../Modelos/rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

 if ($accion !='')
 {
 	/*Se crea el objeto de la clase rol*/
 	$rol = new Rol();

 	switch ($accion)
 	{
 		case 'Ingresar':
 		   $rol->nombre = $_POST['nombre'];
 		   $rol->apePaterno = $_POST['apePaterno'];
 		   $rol->apeMaterno = $_POST['apeMaterno'];
 		   $rol->colonia = $_POST['colonia'];
       $rol->ciudad = $_POST['ciudad'];
       $rol->dirección = $_POST['dirección'];
       $rol->telefono = $_POST['telefono'];
       $rol->email = $_POST['email'];
       $rol->sueldo = $_POST['sueldo'];
       $rol->horarioIni = $_POST['horarioIni'];
       $rol->horarioFin = $_POST['horarioFin'];
       $rol->estatus = $_POST['estatus'];
 		   //$rol->edad = $_POST['edad'];
 		   $rol->ingresar();
 		   break;
 		case 'Editar':
 		   $rol->id= base64_decode($_POST['id']);
 		   $rol->nombre= $_POST['nombre'];
           $rol->apePaterno= $_POST['apePaterno'];
           $rol->apeMaterno= $_POST['apeMaterno'];
           $rol->colonia= $_POST['colonia'];
           $rol->ciudad= $_POST['ciudad'];
           $rol->dirección = $_POST['dirección'];
           $rol->telefono = $_POST['telefono'];
           $rol->email = $_POST['email'];
           $rol->sueldo = $_POST['sueldo'];
           $rol->horarioIni = $_POST['horarioIni'];
           $rol->horarioFin = $_POST['horarioFin'];
           $rol->estatus = $_POST['estatus'];
           //$rol->edad = $_POST['edad'];
           $rol->editar();
           break;
        case 'elim':
           $rol->id = base64_decode($_GET['id']);
           $rol->eliminar();
           break;
 	}
 }
 header('Location: ../Vistas/Roles');