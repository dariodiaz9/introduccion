<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$persona = [
    "nombre" => "Gonzalo",
    "apellido" => "Perez",
    "edad" => 30,
    "ciudad" => "Montevideo",
    "sexo" => "Masculino"
];
echo "Su nombre es ". $persona["nombre"]." ".$persona["apellido"]." con ".$persona["edad"]. " años, vive en ".$persona["ciudad"]. " y es de sexo ".$persona["sexo"]. ".<br>";
$persona["nombre"]="Gonsalo";
$persona["edad"]= 31;
$persona["ciudad"]="Solymar";
$persona["auto"]=true;
echo "Su nombre es ". $persona["nombre"]." ".$persona["apellido"]." con ".$persona["edad"]. " años, vive en ".$persona["ciudad"]. " y es de sexo ".$persona["sexo"].", tiene ".$persona["auto"]." auto/s".".<br>";
$persona["vacaciones"]=true;
echo "Su nombre es ". $persona["nombre"]." ".$persona["apellido"]." con ".$persona["edad"]. " años, vive en ".$persona["ciudad"]. " y es de sexo ".$persona["sexo"].", tiene ".$persona["auto"]." auto/s, se va de vacaciones ".$persona["vacaciones"]." vez/veces".".<br>";
?>
</body>
</html>
