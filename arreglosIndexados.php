<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colores = ['Rojo', 'Morado', 'Celeste', 'Verde', 'Anaranjado', 'Rosado'];
    ?>
    <ul>
        <?php
        foreach ($colores as $color) {
            echo "<li>$color</li>";
            // echo <"li style='color:red'>$color</li>";
        }
        ?>
        </ul>

    <ul>
        <?php
        foreach ($colores as $color):?>
            <li style="color:red"><?php echo $color;?></li>
            <?php endforeach;?>
</body>
</html>