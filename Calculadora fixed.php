<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PhP</title>
</head>
<body>
    <h1>Calculadora - PhP</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="num1">Numero 1</label>
    <input type="text" name="num1" id="num1">
    <label for="num2">Numero 2</label>
    <input type="text" name="num2" id="num2">
    <button type="submit">Calcular</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST["num1"]) && !empty($_POST["num2"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num1 = (float)$num1;
            $num2 = (float)$num2;
            echo "<h3>Resultados</h3>";
            echo "Soma:".($num1 + $num2). "<br>";
            echo "Multiplicação: ".($num1 * $num2);
        
        }
    }
?>