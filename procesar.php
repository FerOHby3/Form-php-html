<?php

echo"<h2> Informacion recabada </h2>";

$nombre= $_POST['nombre'];
echo"Hola, $nombre <br>";
$genero= $_POST['genero'];
echo"Eres $genero <br>";
$correo= $_POST['correo'];
echo"Tu correo es $correo <br>";
$direccion= $_POST['direccion'];
echo"Vives en $direccion <br>";
?>