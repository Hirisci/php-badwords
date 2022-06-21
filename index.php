<?php
$text = "Descrizione:<br> Creare una variabile con un paragrafo di testo a vostra scelta. <br>
Stampare a schermo il paragrafo e la sua lunghezza.<br>
Una parola da censurare viene passata dall'utente tramite parametro GET.<br>
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.<br>";

$censored_word = $_GET["censored"];

$text_censurato = str_replace($censored_word, "***", $text);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="box">
        <h3>Testo</h3>
        <div>Numero caratteri <span><?= strlen($text) ?></span></div>
        <p>
            <?= $text ?>
        </p>
    </div>
    <div class="box">
        <h3>Testo cesurato </h3>
        <div>Numero caratteri <span><?= strlen($text_censurato) ?></span></div>
        <p>
            <?= $text_censurato ?>
        </p>
    </div>
</body>

</html>