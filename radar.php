<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar</title>
</head>
<style>
    .verde{
        color: green;
    }
    .amarelo{
        color: blue;
    }
    .vermelho{
        color: red;
    }
</style>

<body>
    <h1>Verificar</h1>
    <p>Digite a velocidade atual (em km/h):</p>
    <form method="post">
        <input type="number" name="vel">
        <input type="submit" value="Velocidade">
    </form>
    
<?php 
$vel = $_POST["vel"];
 if($vel <= 60){
     echo "<span class='verde'>de boa</span>";
 }else if($vel >= 61){
     echo "<span class='amarelo'>diminua a velocidade</span>";
 }else if ($vel > 63){
     echo "<span class='vermelho'>vc foi multado</span>";
 }
?>
</body>
</html>