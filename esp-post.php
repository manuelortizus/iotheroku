<?php
/*
// Verifica si la solicitud es de tipo POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos de los parametros 'user' y 'pass' del cuerpo del POST

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Envía la respuesta al cliente (ESP32)
    echo "Hola $user tu clave es $pass";
    echo "Hola";
    echo $user;
}
else {
    // Si no es un POST, devolver error 405 (Método no permitido)
    header('HTTP/1.1 405 Method Not Allowed');
    echo "Metodo no permitido";
}

*/


$user = $_POST['user'];
$password = $_POST['pass'];

echo "Hola ".$user." tu clave es ".$password;


?>