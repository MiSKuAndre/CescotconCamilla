<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Prenotazioni</h1>
    <div>
    <?php

    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }      
    // Inserisci testo letto dal campo "value" della tabella "content" del database "prenotazioni"     
    $sql = "SELECT value FROM content";
    $result = $conn->query($sql);

    // Controllo se ci sono risultati e stampa del testo
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>" . $row["value"] . "</p>";
        }
    } else {
        echo "Nessun dato trovato.";
    }

    // Chiusura della connessione
    $conn->close();
    ?>
    </div>
