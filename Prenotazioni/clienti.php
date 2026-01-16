<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clienti</h1>
    <div>
    <?php

    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }      
    // Query per ottenere i dati dei clienti con join tra le tabelle regioni, citta e clienti
    $sql = "SELECT clienti.nome, clienti.cognome, regioni.regione, regioni.area_geografica, citta.citta
            FROM regioni
            INNER JOIN citta ON regioni.id_regione = citta.regione
            INNER JOIN clienti ON citta.id_citta = clienti.citta";
    $result = $conn->query($sql);


    // Controllo se ci sono risultati e stampa del testo
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='prenotazioni'>";
            echo "<h2>Nome e Cognome: " . $row["nome"] . " ". $row["cognome"] . "</h2>";
            echo "<p>Regione: " . $row["regione"] . "</p>";
            echo "<p>Area Geografica: " . $row["area_geografica"] . "</p>";
            echo "<p>Città: " . $row["citta"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Nessun dato trovato.";
    }

    // Chiusura della connessione
    $conn->close();
    ?>
    </div>