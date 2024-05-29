<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        background-color: cyan;
    }
    </style>
</head>
<body>
    
    <h1> Conteo Micro relatos</h1>
    <?php
    echo '_______________________________ <br>';
    $microrelato = 'En la última carta, grabada con runas antiguas, yacía el secreto del tablero maldito. El jugador, con el pulso acelerado, enfrentó al maestro de las cartas. <br>
    Cada movimiento resonaba en la oscuridad creciente, y la partida se convertía en un baile mortal. <br> 
    Al final, con un susurro ancestral, el jugador descifró el enigma y selló su destino. <br>
    La mesa se desvaneció en humo negro, dejando solo una inscripción. <br> ';
    echo $microrelato;
    $palabras = explode (" ", $microrelato);
    $cant_palabras = count($palabras);
    $cant_caracteres = strlen($microrelato);
    //print_r($palabras);
    echo '_______________________________ <br>';
    if ($cant_palabras >= 100 && $cant_caracteres <= 700) {
        echo '<span style="color:red;">El micro relato supera el máximo de 100 palabras!</span>';
    } elseif ($cant_palabras >= 100 && $cant_caracteres >= 700) {
        echo '<span style="color:red;">El micro relato supera el máximo de 100 palabras y el máximo de 700 caracteres!</span>';
    } elseif ($cant_palabras <= 100 && $cant_caracteres >= 700) {
        echo '<span style="color:red;">El micro relato supera el máximo de 700 caracteres!</span>';
    } elseif ($cant_palabras <= 100 && $cant_caracteres <= 700) {
        echo '<span style="color:green;">El micro relato es aceptable</span> <br>';
    }
    echo 'Su cantidad del palabras es: ';
    echo ($cant_palabras);
    echo ' <br> Su cantidad de caracteres es: ';
    echo strlen($microrelato);
    ?>
</body>
</html>