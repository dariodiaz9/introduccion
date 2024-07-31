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
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid"
];
echo "<table border='1'>
<tr>
<th>Clave</th>
<th>Valor</th>
</tr>";
?>
    <tr><td >Nombre</td><td> <?php echo $persona["nombre"] ?></td></tr>
    <tr><td >Edad</td><td><?php echo $persona["edad"] ?></td></tr>
    <tr><td >Ciudad</td><td><?php echo $persona["ciudad"] ?></td></tr>
</table>
</body>
</html>
