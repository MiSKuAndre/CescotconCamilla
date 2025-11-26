<html>
    <head>
        <link href="style.css">

    <h1>Contenuti a caso!</h1>

    </head>


<?php
    // Numero casuale tra 10 e 30

    $numero = rand(5, 15);

    // Ciclo per creare i div da 1 a $numero

    for($i = 1; $i <= $numero; $i++){
        echo "<div>Io sono dispari</div>";
        echo "<div>Io sono pari</div>";
    }
    
?>

