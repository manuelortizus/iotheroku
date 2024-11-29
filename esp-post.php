<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Datos crudos recibidos: \n";
    print_r(file_get_contents("php://input")); // Muestra todo el contenido del cuerpo
    echo "\nVariables POST: \n";
    print_r($_POST); Muestra las variables procesadas
}
    else {
        http_response_code(405);
        echo "Método no permitido";
    }
    $user = $_POST['user'];
    $password = $_POST['pass'];

    echo 'hola $user tu clave es $password';
?>