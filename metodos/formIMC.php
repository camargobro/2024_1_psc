<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
    <style>
        input[type=text]{
            width: 40px;
        }
    </style>    
</head>
<body>
    <form action="imc.php" method="post">
        <h2>Cálculo do IMC<hr></h2>
        Peso <input type="text" name= "peso" required><br><br>
        Altura <input type="text" name= "altura" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

