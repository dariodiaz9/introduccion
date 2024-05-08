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
    $agenda[]=  "Dentista a las 12hs"  . "<br>";
    $agenda[]= "Regar las plantas a las 8hs" . "<br>";
    var_dump($agenda);
    $imprevisto= 0;
    $nuevaCita = "Dentista a las 16hs" . "<br>";
    $agenda[$imprevisto] = $nuevaCita;
    var_dump($agenda);
    ?>
    
</body>
</html>
