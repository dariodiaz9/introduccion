<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Verdulería Pepe</h1>
    <h2>Consumo Final</h2>
    <h3>A continuación se detallan los totales de sus compras.</h3>
    <div class="contenedor">
        <?php 
        $Banana = (int)($_GET['banana'] ?? 0);
        $Manzana = (int)($_GET['manzana'] ?? 0);
        $KGBanana = 100;
        $KGManzana = 80;

        $precioBanana = $Banana * $KGBanana;
        $precioManzana = $Manzana * $KGManzana;
        $Total = $precioBanana + $precioManzana;
        ?>
        <form action="" method="get">
            <input type="number" name ="banana" min="0">
            <input type="number" name="manzana" min="0">
            <input type="submit" value="Ingresar" name="Ingresar">
        </form>
        <p><?php echo "Precio de bananas kg: $$KGBanana"?></p>
        <p><?php echo "Precio de manzanas kg: $$KGManzana"?></p>
        <div class="class">
            <p><?php echo "Precio kg bananas: $[$precioBanana]"?></p>
            <p><?php echo "Precio kg manzanas: $[$precioManzana]"?></p>
            <p><?php echo "Total: $[$Total]"?></p>
        </div>
    </div>
</body>
</html>