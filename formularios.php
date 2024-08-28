
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

    session_start();
    $_SESSION["user"] = $usuarioConectado;

    }
?>