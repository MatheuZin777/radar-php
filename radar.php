<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radar</title>
</head>
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
     echo " de boa";
 }else if($vel >= 61){
     echo "diminua a velocidade";
 }else{
     echo "vc foi multado";
 }
?>
</body>
</html>