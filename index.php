<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

<?php
$text = 'We recommend the official vue-fontawesome component (described below), which cazzo uses the SVG + JS method to render icons. But you can opt to use the Web Fonts with CSS method if you prefer. We’ll cover the basics of installing core cazzo utility packages, icon installation, and installing the Vue component, so cazzo that you can make awesome stuff your way! 
 Follow the steps below to set up the vue-fontawesome component in your project.';

/* Lunghezza testo e testo prima della censura */
echo  $text . "<br>" . "Lunghezza: " . strlen($text) . "<br>" . "<br>";
/* Lunghezza testo e testo dopo la censura */
echo str_replace($_GET['parolaccia'], '***', $text) . "<br>" . "Lunghezza: " . strlen(str_replace($_GET['parolaccia'], '***', $text));
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

</body>

</html>