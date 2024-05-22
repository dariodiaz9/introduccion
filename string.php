<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$palabra = 'abcdef' . '<br>';
    //echo($palabra);
    //$palabra[2]= 'z';
    //echo($palabra);
    //$lista = "manzana,naranja,plátano,fresa";
    //$frutas = explode ("a", $lista);
    //print_r($frutas);
    $microrelato = 'En un pequeño pueblo rodeado de montañas, una bruma espesa y misteriosa se posaba todas las noches sobre las calles empedradas. Los lugareños susurraban historias sobre un antiguo pacto con seres del bosque, cuyas sombras se deslizaban entre los árboles al caer la noche. <br>
    Una joven intrépida llamada Elena desafió el tabú de adentrarse en el bosque al anochecer. Armada solo con su curiosidad, se aventuró entre los árboles en busca de respuestas. Pronto, se encontró rodeada por una neblina densa que ocultaba todo a su paso. <br>
    De repente, una figura etérea emergió de la bruma: un espíritu del bosque, con ojos centelleantes y un susurro que parecía danzar en el viento. Le reveló a Elena la antigua historia del pueblo, un relato de amor y traición que había dado origen al pacto con los seres de la naturaleza. <br>
    Al amanecer, Elena regresó al pueblo con una nueva comprensión del mundo que la rodeaba. A partir de entonces, la bruma nocturna ya no fue motivo de temor, sino un recordatorio de la magia que yacía en lo desconocido, esperando ser descubierta por aquellos lo suficientemente valientes para buscarla. <br>';
    echo $microrelato;
    $palabras = explode (" ", $microrelato);
    print_r($palabras);
    ?>
</body>
</html>