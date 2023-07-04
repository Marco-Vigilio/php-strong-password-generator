<?php 


if(!empty($_GET["pswLength"])){
        if($_GET["pswLength"] < 8){
            echo "la password deve essere minimo di 8 caratteri";
        }
        else{
            //echo $_GET["pswLength"];
            echo gettype($_GET["pswLength"]);
            echo gettype(2);
            generatePassword($_GET["pswLength"]);
        }
   
}

function generatePassword($length){
    $letter = [];
    for ($i=0; $i < $length; $i++) { 
        array_push($letter, chr(rand(33,122) //simboli
         //or rand(48, 57) //numeri
         //or rand(65, 90) //lettere maiuscole
         //or rand(97,122) // lettere minuscole
        ));
    }
    echo(implode("",$letter));
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