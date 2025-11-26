<html>
    <head>
        <link rel="stylesheet" href="style.css">

    <h1>Colori</h1>

    </head>
    <body>
<?php
    $numero = rand(5, 30);

    for($i = 1; $i <= $numero; $i++) {
        echo "<div class='first'>div casuali</div>";
    }
?>

    <div class="footer">fine pagina</div>
    </body>
</html>