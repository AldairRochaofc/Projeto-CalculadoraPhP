<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples em PHP</title>
</head>
<body>
    <h2>Calculadora Simples em PHP</h2>
    <form method="POST" action="<?php echo $_SERVER ['PHP_SELF'];?>" >
        <label for="num1">Numero 1</label>
        <input type="text" name="num1" id="num1">

        <label for="num2">Numero 2</label>
        <input type="text" name="num2" id="num2">

        <input type="submit" value="Enviar">
    </form>
<?php 
 // Verifica se o formulário foi submetido( se apertou o botao enviar)
 //Portanto, a linha de código completa significa: "Se o campo 'num1' e o campo 'num2' no formulário enviado via método POST não estiverem vazios, execute o código dentro deste bloco if."

 if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST["num1"]) && !empty($_POST["num2"])){

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    // converter para float por que se ira usar numeros ira usar 1,20 virgula ou quebra
        $num1 = (float)$num1;
        $num2 = (float)$num2;
        echo "<h3>Resultados</h3>";
        echo "Soma: ".($num1 + $num2). "<br>";
        echo "Subtração:".($num1 - $num2)."<br>";
       

    }
 }

?>






