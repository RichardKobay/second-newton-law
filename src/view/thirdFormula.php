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
            <form action="/src/php/calcthirdFormula.php" method="get" id="form" class="form">
                <h1 class="title">Formulas de aceleración</h1>
                <div class="radio-container">
                    <input class="radio" type="radio" value="isSystem" name="system" id="is" checked>
                    <label for="is">SI</label>
                    <input class="radio" type="radio" value="usSystem" name="system" id="us">
                    <label for="us">US</label>
                </div>
                <div class="inputs-container">
                    <label for="force">Aceleración</label>
                    <input type="number" name="acceleration" id="initial_velocity_input" placeholder="m/s²">
                    <label for="mass">Velocidad inicial</label>
                    <input type="number" name="vi" id="final_velocity_input" placeholder="m/s²">
                    <label for="aceleration">Tiempo</label>
                    <input type="number" name="t" id="time_input" placeholder="s">
                    <input type="submit" value="Calcular">
                </div>
                <a href="/index.php"><button>Regresar</button></a>
            </form>
        </div>
    </div>
    <script src="/src/js/changingPlaceHoldersThirdFormula.js"></script>
</body>

</html>