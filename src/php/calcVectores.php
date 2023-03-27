<?php

$listaMagnitudes = array();
$listaDirecciones = array();
$valoresX = array();
$valoresY = array();

$nVectores = $_GET['nVectores'];

function sumarValoresX ($valoresX, $nVectores) {
    $sumaX = 0;

    for ($i=0; $i < $nVectores; $i++) { 
        $sumaX = $sumaX + $valoresX[$i];
    }
    
    return $sumaX;
}

function sumarValoresY ($valoresY, $nVectores) {
    $sumaY = 0;
    
    for ($i=0; $i < $nVectores; $i++) { 
        $sumaY = $sumaY + $valoresY[$i];
    }

    return $sumaY;
}

function fuerzaFinal ($sumaX, $sumaY) {
    return sqrt(pow($sumaX, 2) + pow($sumaY, 2));
}

function anguloFinal ($sumaX, $sumaY) {
    if ($sumaX > 0 && $sumaY > 0) return abs(rad2deg(atan($sumaY / $sumaX)));
    
    if ($sumaX < 0 && $sumaY > 0) return 180 - abs(rad2deg(atan($sumaY / $sumaX)));
    
    if ($sumaX < 0 && $sumaY < 0) return 180 + abs(rad2deg(atan($sumaY / $sumaX)));
    
    if ($sumaX > 0 && $sumaY < 0) return 360 - abs(rad2deg(atan($sumaY / $sumaX)));

    return 0;
}

for ($i=0; $i < $nVectores; $i++) { 
    $magnitud = (int)$_GET["magnitud_$i"];
    $direccion = (int)$_GET["direccion_$i"];
    
    $valoresX[$i] = ($magnitud * cos(deg2rad($direccion)));
    $valoresY[$i] = ($magnitud * sin(deg2rad($direccion)));
    
    if ($direccion == 180) $valoresY[$i] = 0;
    if ($direccion == 360) $valoresY[$i] = 0;
    if ($direccion == 0) $valoresY[$i] = 0;
}

$sumaX =sumarValoresX($valoresX, $nVectores);
$sumaY =sumarValoresY($valoresY, $nVectores);

$fuerzaFinal = fuerzaFinal($sumaX, $sumaY);
$anguloFinal = anguloFinal($sumaX, $sumaY);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Fuerza</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="/src/css/main.css">
    <link rel="stylesheet" href="/src/css/normalize.css">
</head>

<body>
    <div id="app" class="app">
        <h1 class="title">Resultado</h1>
        <p class="text">La fuerza resultante es de: <?php echo $fuerzaFinal ?>
        con un ángulo de <?php echo $anguloFinal ?></p>
        <a href="/index.php"><button>Regresar</button></a>
    </div>
    <script src="/src/js/main.js"></script>
</body>

</html>
