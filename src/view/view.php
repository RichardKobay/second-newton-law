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
            <form action="/src/php/gettingValues.php" method="get" id="form" class="form">
                <h1 class="title">Segunda ley de Newton</h1>
                <div class="radio-container">
                    <input class="radio" type="radio" value="isSystem" name="system" id="is" checked>
                    <label for="is">SI</label>
                    <input class="radio" type="radio" value="usSystem" name="system" id="us">
                    <label for="us">US</label>
                </div>
                <div class="inputs-container">
                    <label for="force">Fuerza</label>
                    <input type="number" name="force" id="weight_input" placeholder="N">
                    <label for="mass">Masa</label>
                    <input type="number" name="mass" id="mass_input" placeholder="Kg">
                    <label for="aceleration">Aceleración</label>
                    <input type="number" name="aceleration" id="aceleration_input" placeholder="m/s²">
                    <input type="submit" value="Calcular">
                </div>
            </form>
        </div>
    </div>
    <script src="/src/js/main.js"></script>
</body>

</html>