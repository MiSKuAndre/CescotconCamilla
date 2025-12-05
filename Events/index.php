<?php

function printDiv($text, $class) {
    echo "<div class='" . $class . "'>" . $text . "</div>";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link rel="stylesheet" href="style.css">    
    
</head>
<body>  
    <h1>Eventi JavaScript</h1>
    <button id="">Rosso</button>
    <button id="Giallo">Giallo</button>
    <button id="Blu">Blu</button>

    
<?php
    $numerodiv = 20;
    for ($i = 1; $i <= $numerodiv; $i++) {
        printDiv(" ". $i, "div");
    }

?>

<script src="eventi.js"></script>

</body>
</html>

