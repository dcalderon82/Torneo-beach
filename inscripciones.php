<?php
// Obtener la información enviada por el formulario
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];

// Depuración: mostrar los valores de las variables
echo "Nombre: $nombre<br>";
echo "DNI: $dni<br>";

// Escribir la información en un archivo de texto
$file = fopen('inscripciones.txt', 'a');
fwrite($file, "Nombre: $nombre - DNI: $dni\n");
fclose($file);

// Redireccionar de vuelta a la página del formulario
header('../pruebasvisualcode/pagina web/formulario.html');

$file = fopen('ruta/al/archivo.txt', 'a');
fwrite($file, "Nombre: $nombre - DNI: $dni\n");
fclose($file);
exit();
?>
