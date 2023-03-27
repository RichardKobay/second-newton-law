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
        <div id="formContainer" class="form-container">
            <form action="/src/php/CalcVectores.php" method="get" id="form" class="form">
                <h1 class="title">Vectores</h1>
                <label for="force">Numero de vectores</label>
                <input type="number" name="nVectores" id="nVectores">
                <input type="submit" value="CrearVectores" id="btnCrearVectores">
            </form>
            <a href="/index.php"><button>Regresar</button></a>
        </div>
    </div>
    <script src="/src/js/vectorFunctionality.js"></script>
</body>

</html>
