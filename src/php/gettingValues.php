<?php

$system = $_GET['system'];
$force = $_GET['force'];
$mass = $_GET['mass'];
$aceleration = $_GET['aceleration'];

$isInternationalSystem = ($system == 'isSystem') ? true : false;

if ($isInternationalSystem) {
    if (empty($force)) {
        $ressult = $mass * $aceleration;
        $units = 'N';
        $empty = "fuerza";
    }
    
    if (empty($mass)) {
        $ressult = $force / $aceleration;
        $units = 'Kg';
        $empty = "masa";
    }
    
    if (empty($aceleration)) {
        $ressult = $force / $mass;
        $units = 'm/s²';
        $empty = "aceleración";
    }
}

if (!$isInternationalSystem) {
    if (empty($force)) {
        $ressult = $mass * $aceleration;
        $units = 'lb';
        $empty = "fuerza";
    }
    
    if (empty($mass)) {
        $ressult = $force / $aceleration;
        $units = 'slugs';
        $empty = "masa";
    }
    
    if (empty($aceleration)) {
        $ressult = $force / $mass;
        $units = 'a?';
        $empty = "aceleración";
    }
}
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
        <p class="text">La <?php echo $empty ?> es: <?php echo $ressult ?></p>
        <a href="/src/index.php"><button>Regresar</button></a>
    </div>
    <script src="/src/js/main.js"></script>
</body>

</html>