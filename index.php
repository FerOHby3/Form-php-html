<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<style>
        form {
            border: 2px solid #ccc;
            padding: 20px; 
            max-width: 400px; 
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
	<h1>Formulario</h1>
	<form action="procesar.php" method="post">
		<p> Nombre: <input type="text" name="nombre"> </p>
		<p> Correo: <input type="text" name="correo"> </p>
		<p> Direccion: <input type="text" name="direccion"> </p>
		<p> Genero: <select name="genero" multiple>
				<option value="Hombre">Hombre</option>
				<option value="Mujer">Mujer</option>
				<option value="N/A">N/A</option>
			</select> 
		</p>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>