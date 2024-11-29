<?php

// Verifica si la solicitud es de tipo POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos de los parametros 'user' y 'pass' del cuerpo del POST

    $user = isset($_POST['user']) ? $_POST['user'] : 'Desconocido';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'Desconocida';

    // Envía la respuesta al cliente (ESP32)
    echo "Hola $user tu clave es $pass";
}
else {
    echo "Metodo no permitido";
}

/*
$user = $_POST['user'];
$password = $_POST['pass'];

echo "Hola ".$user." tu clave es ".$password;
*/

?>