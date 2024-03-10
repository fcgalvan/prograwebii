<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = array(
        "Nombre" => $_POST["nombre"],
        "Apellido Paterno" => $_POST["apellido_paterno"],
        "Apellido Materno" => $_POST["apellido_materno"],
        "Nombre de Usuario" => $_POST["usuario"],
        "Contraseña" => $_POST["password"],
        "Fecha de Nacimiento" => $_POST["fecha_nacimiento"],
        "Calle" => $_POST["calle"],
        "Colonia" => $_POST["colonia"],
        "Número de Casa" => $_POST["numero_casa"],
        "Código Postal" => $_POST["cp"],
        "RFC" => $_POST["rfc"],
        "E-mail" => $_POST["email"]
    );

    echo "<h2>Datos del Formulario:</h2>";
    echo "<ul>";
    foreach ($datos as $campo => $valor) {
        echo "<li><strong>$campo:</strong> $valor</li>";
    }
    echo "</ul>";
} else {
    echo "Acceso denegado.";
}

?>
