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

    $colori = ["red", "green", "blue", "yellow"];

    function coloreCasuale($colori){
        return $colori[array_rand($colori)];
    }

    for (&i = 1; $i <= $numero; $i++){
        $testoColore = coloreCasuale($colori);

        switch ($testoColore){
            case "red":
                $bg = "red";
                break;
            case "green":
                $bg = "green";
            case "blue":
                $bg = "blue";
            case "yellow":
                $bg = "yellow";
        }
    }
?>

    <div class="footer">fine pagina</div>
    </body>
</html>