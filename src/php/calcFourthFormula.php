
<?php

/* 
 * Here we instance all the variables that are necessary for the ressult.
 * First we get all the values of all inputs of the index.php file
 * Then, we store them in variables to manipulate
 * Check if we are using the international or imperial/US system
 * Depending of the current system we make a decision, this will be important to show the units
 * 
 * We check which of the inputs is empty, then, we calculate the empty input with the formula F = ma
 * The result will be store in $ress that will show later in the html with it's corresponding unit
 * $empty is to check what are we showing to the user.
*/

$system = $_GET['system'];
$isInternationalSystem = ($system == 'isSystem') ? true : false;
$acceleration = $_GET['acceleration'];
$final_velocity = $_GET['vf'];
$time = $_GET['t'];
$distance = (($final_velocity * $time) - (1/2 * $acceleration * pow($time, 2)));

if ($isInternationalSystem) {
    $result = "La distancia es: $distance m";
}

if (!$isInternationalSystem) {
    $result = "La distancia es $distance ft";
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
        <p class="text"><?php echo $result ?></p>
        <a href="/index.php"><button>Regresar</button></a>
    </div>
    <script src="/src/js/main.js"></script>
</body>

</html>
