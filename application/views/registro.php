<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro de Usuarios</title>
    <link rel="stylesheet" href="/clases/css/estilos.css">
     

</head>
<body>

 	<div class="registro">

	 <img class="logo" src="/clases/imagenes/logo_caracol.jpg" alt="logo caracol">
	 <h1>Registro</h1>

	 <form action="/clases/index.php/usuario/registrar_usuario" method="post" onsubmit =" return validaContrasena();">

		<label for="usuario">Usuario</label>
		<input type="text" id="usuario" name="usuario" required>

        <label for="correo">Correo Electronico</label>
		<input type="email" id="correo" name="correo" required>

        <label for="RUT">RUT</label>
		<input type="text" id="rut" name="rut" required>

        <label for="direccion">Direccion</label>
		<input type="text" id="direccion" name="direccion" required>

		<label for="pass">contraseña</label>
		<input type="password" id="contrasena" name="contrasena" required>

        <label for="pass2">Repite contraseña</label>
		<input type="password" id="contrasena2" name="contrasena2" required>

		<input class="boton" type="submit" name="submit" value="REGISTRAR"/>

		
	</from>


    </div>
   

</body>
<script src="/clases/js/script.js"></script>

</html>


