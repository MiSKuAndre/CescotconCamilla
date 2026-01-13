<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    // Query per ottenere i dati delle prenotazioni con join tra le tabelle citta, clienti e prenotazioni   
    $sql = "SELECT prenotazioni.arrivo, clienti.nome, clienti.cognome, prenotazioni.importo, prenotazioni.caparra, prenotazioni.importo - prenotazioni.caparra AS saldo
            FROM citta
            INNER JOIN clienti ON citta.id_citta = clienti.citta
            INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente";
    $result = $conn->query($sql);

    // Controllo se ci sono risultati e stampa del testo
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["arrivo"] . "</h2>";
            echo "<p>Nome: " . $row["nome"] . "</p>";
            echo "<p>Cognome: " . $row["cognome"] . "</p>";
            echo "<p>Importo: " . $row["importo"] . "</p>";
            echo "<p>Caparra: " . $row["caparra"] . "</p>";
            echo "<p>Saldo: " . $row["saldo"] . "</p><br>";
        }
    } else {
        echo "Nessun dato trovato.";
    }

    // Chiusura della connessione
    $conn->close();
    ?>
    </div>
