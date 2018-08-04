<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Enviando - PHP </title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
		<div id="contenedor">
			<h1>PHP</h1>
			<div class="cajas">
				<h3>Recibiendo datos</h3>
			</div>
			<div class="cajas">
				<?php

				//Probando que los datos llegan por medio de Metodo Post

				//nombre/ clave / mail

				//ARMAR ARRAY POST
				/*
				echo $_POST['nombre'];
				echo $_POST['clave'];
				echo $_POST['email'];
				*/

				//validacion de formulario
				if ($_POST['nombre']!=""){$nombre=$_POST['nombre'];}
				if ($_POST['consulta']!=""){$consulta=$_POST['consulta'];}
				if ($_POST['email']!=""){$email=$_POST['email'];}
				if ($_POST['telefono']!=""){$telefono=$_POST['telefono'];}
				else{echo "Debe completar todos los campos";}

				//momento de registro
				//date(d-m-Y)

				//Armamos el envio por email
				//mail (destinatario,asunto,mensaje)

				$destinatario="fernandoarielbj57@gmail.com";
				$asunto="Nueva consulta desde el sitio";
				$mensaje="Nombre: ".$nombre."<br>"."Email: ".$email."<br>"."Telefono: ".$telefono."<br>"."Consulta: ".$consulta;
				echo $mensaje;

				mail($destinatario,$asunto,$mensaje);

				/*Envio de datos a MySQL*/

				/*Conexion - mysqli_connect(host, user, pass, db)*/
				$conexion=mysqli_connect("localhost","id6232979_ferdb","utn2018","id6232979_enviophpferdb") or die("Error de conexion");
				/*Consulta - mysqli_query(conexion, consulta)*/
				$consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES (0,'$nombre','$email','$telefono')");
				/*Cierre*/
				mysqli_free_result($consulta); //libera la memoria
				mysqli_close($conexion); //cierra conexion


				echo "Gracias por contactarte!"
				?>

				 








			</div>
		</div>
	</body>
</html>