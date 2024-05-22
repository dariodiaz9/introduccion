<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $agenda = [];
    $agenda[]= 'Regar las plantas a las 8hs' . '<br>';
    $agenda[]= 'Dentista a las 12hs'  . '<br>';
    var_dump($agenda);
    $imprevisto= 1;
    $nuevaCita = 'Dentista a las 16hs' . '<br>';
    $agenda[$imprevisto] = $nuevaCita;
    var_dump($agenda);
    unset($agenda[1]);
    //$agenda[1] = ""; 
    ?>
    <ul>
    <?php
    $nuevaCita = 'Hacer la Actividad Agenda de Programación Web a las 18hs';
    $agenda[1] = $nuevaCita;
        echo "---Agenda---";
        foreach($agenda as $citas){
            echo "<li style>$citas</li>";
        }?>
        </ul>
</body>
</html>
