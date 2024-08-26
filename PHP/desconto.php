<html>

<body>

<h2>Desconto de um produto</h2>

<form method="post">

Preço do produto: <input type="number" name="num1"><br><br>

 Desconto: <input type="number" name="num2"><br><br>

<input type="submit" value="valor">

</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //metodo para usar os numeros digitados pelo usuario  

    $valor = $_POST['num1'];

    $desconto = $_POST['num2'];
    
    $total = $valor - ($valor  * $desconto / 100);

    echo "o valor do produto com o desconto aplicado será de R$: $total <br>"; 
    echo " Valor original: R$ $valor <br>"; 
    echo "Desconto: R$ $desconto <br>"; 
    echo "Valor com desconto: R$ $total <br>";
}
?>




</body>

</html>