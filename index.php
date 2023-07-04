<?php 
include_once __DIR__ . "/functions.php";

if(!empty($_GET["pswLength"])){
        if($_GET["pswLength"] < 8){
            echo "la password deve essere minimo di 8 caratteri";
        }
        else{
            generatePassword($_GET["pswLength"]);
        }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="./index.php" method="get">
        <label for="">Lunghezza password</label>
        <input type="number" name="pswLength" id="pswLength">
        <input type="submit" value="invia">
    </form>

    <p><?php ?></p>
</body>
</html>