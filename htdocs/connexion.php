<?php

$dns = "mysql:host=127.0.0.1;dbname=quizz";
$user = "root";
$password = "";


// se connecter à la BD :

try {
    $bdd = new PDO ($dns,$user,$password);
} catch (Exception $message) {
    echo "il y a un souci <br>" . "<pre>$message</pre>";
}

?>