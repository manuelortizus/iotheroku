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

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['user'];

        echo "Datos recibidos: Usuario = $user";
    }
    else{
        http_response_code(405); // Método no permitido
        echo "Method not allowed"
    }

    
}
catch (Exception $e) {
    http_response_code(500);
    echo "Server error: " . $e->getMessage();
}

/*
$user = $_POST['user'];
$password = $_POST['pass'];

echo "Hola".$user;
echo "Hola $user";
echo "Hola" + $user;
echo "Mi nombres es";
echo $user;


?>
*/
?>