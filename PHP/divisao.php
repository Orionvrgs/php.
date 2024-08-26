<html>

<body>

<h2>Divisão e verificação de resultado</h2>

<form method="post">

Número 1: <input type="number" name="num1"><br><br>

Número 2: <input type="number" name="num2"><br><br>

<input type="submit" value="div">

</form>
<?php
//Exercício 2: Divisão e Verificação de Resultado
//Crie um programa em PHP que receba dois números. O programa deve dividir o primeiro número pelo segundo e verificar se o resultado é maior que 10. Se for, exiba a mensagem "O resultado é maior que 10". 
//Caso contrário, exiba "O resultado não é maior que 10".


if ($_SERVER["REQUEST_METHOD"] == "POST") { //metodo para usar os numeros digitados pelo usuario  

    $num1 = $_POST['num1'];

    $num2 = $_POST['num2'];

    if  ($num2 == 0) {
        echo "Erro: Divisão por zero não é permitida.";
        } else {

    
    
    $div = $num1 / $num2; //divide o primeiro pelo segundo
    
    

    if($div>10){
        echo "O resultado da divisão de $num1 e $num2 é maior do que 10";
    }else if($div<10){
        echo "O resultado da divisão de $num1 e $num2 é menor que 10";

    }
    else
    { 
        echo "O resultado da divisão de $num1 e $num2 é igual a 10 "; 
    }
}
    
}
?>




</body>

</html>
