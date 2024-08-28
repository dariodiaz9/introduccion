<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $fnac = $_POST['fnac'];
        $edad = $_POST["edad"];
    $usuarioConectado = [
        "nombre" => $nombre,
        "correo" => $email,
        "fnac" => $fnac,
        "edad" => $edad
    ];
    if(empty($nombre) || empty($email) || empty($fnac) || empty($edad))
        echo "Campos vacios, llenelos <br>";
    session_start();
    $_SESSION["user"] = $usuarioConectado;
    }
    print_r($usuarioConectado);
?>