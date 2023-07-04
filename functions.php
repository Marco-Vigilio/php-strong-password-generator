<?php
function generatePassword($length){
    $letter = [];
    for ($i=0; $i < $length; $i++) { 
        array_push($letter, chr(rand(33,122) //simboli
         //or rand(48, 57) //numeri
         //or rand(65, 90) //lettere maiuscole
         //or rand(97,122) // lettere minuscole
        ));
    }
    $password = implode("",$letter);
    return $password;
}
?>