<html>

<body>

<h2>Média do Aluno</h2>

<form method="post">

Nota 1: <input type="number" name="num1"><br><br>

Nota 2: <input type="number" name="num2"><br><br>

Nota 3: <input type="number" name="num3"><br><br>

<input type="submit" value="media">

</form>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //metodo para usar os numeros digitados pelo usuario   

$nota1 = $_POST['num1'];

$nota2 = $_POST['num2'];

$nota3 = $_POST['num3'];


$media = ($nota1 + $nota2 + $nota3) / 3; //media das notas
$media=number_format($media,2);
echo "A média do aluno  é: $media <br>"; //mostra a media do aluno

    if($media>=7){
        echo "Aluno aprovado";
    }else{
        echo "Aluno reprovado";
    }

}

?>




