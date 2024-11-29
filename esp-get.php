<?php
if (isset($_GET['user']) && isset ($_GET['pass'])) {
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    echo "Hola " . $user . ", tu clave es: " . $pass;
}
else {
    echo "Parametros no encontrados.";
}


?>