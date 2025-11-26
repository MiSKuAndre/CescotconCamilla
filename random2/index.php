<html>
    <head>
        <link rel="stylesheet" href="style.css">

    <h1>Contenuti a caso!</h1>

    </head>
<body>

<?php
    // Numero casuale tra 10 e 30

    $numero = rand(5, 15);

    // Ciclo per creare i div da 1 a $numero

    for($i = 1; $i <= $numero; $i++) {
        echo "<div class='dispari'>Io sono dispari</div>";
        echo "<div class='pari'>Io sono pari</div>";
    }
    
?>
<div class="footer">fine pagina</div>
</body>
