<html>

<body>

<h2>Média de três números</h2>

<form method="post">

Número 1: <input type="number" name="num1"><br><br>

Número 2: <input type="number" name="num2"><br><br>

Número 3: <input type="number" name="num3"><br><br>

<input type="submit" value="media">

</form>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //metodo para usar os numeros digitados pelo usuario   

$num1 = $_POST['num1'];

$num2 = $_POST['num2'];

$num3 = $_POST['num3'];


$media = ($num1 + $num2 + $num3) / 3; //media de 3 numeros

echo "A média de $num1, $num2, e $num3 é: " . $media; //printa o resultado da media

}

?>