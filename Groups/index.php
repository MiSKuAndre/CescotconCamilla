<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    require_once("../libreria/libreria.php");
    
?>

    <button id="Primorosso">Primo rosso</button>
    <button id="Secondorosso">Secondo rosso</button>
    <button id="Tuttirosso">Tutti rosso</button>
    <button id="Primoblu">Primo blu</button>
    <button id="Secondoblu">Secondo blu</button>
    <button id="Tuttiblu">Tutti blu</button>



<h2 class="first">Primo gruppo</h2>

<?php
    // Genera un numero di div casuale tra 5 e 10 di dimensione 150x150 px
    RandomDivDa5a10();

?>

<h2 class="second">Secondo gruppo</h2>

<?php
    // Genera un numero di div casuale tra 5 e 10 di dimensione 100x100 px
    RandomDivDa10a15();

?>



<script src="gruppi.js"></script>

</body>