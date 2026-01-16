<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Regioni</h1>
    <div>
        <form method="GET">
    <input type="text" name="regione" placeholder="Inserisci regione">
    <button type="submit">Cerca</button>
    </form>

    <?php

    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }      

        $regione = "";
    if (isset($_GET['regione']) && !empty(trim($_GET['regione']))) {
        $regione = $conn->real_escape_string($_GET['regione']);
    }

    // Query per ottenere i dati delle prenotazioni con join tra le tabelle citta, clienti e prenotazioni   
    $sql = "SELECT regioni.regione, sum(prenotazioni.caparra) as caparra, count(*) as numero_prenotazioni, round(sum(prenotazioni.importo), 2) as importo, round(sum(prenotazioni.importo - prenotazioni.caparra), 2) as saldo
            FROM regioni
            INNER JOIN citta ON regioni.id_regione = citta.regione
            INNER JOIN clienti ON citta.id_citta = clienti.citta
            INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente
            ";
            if ($regione != "" or $regione != null) {
    $sql .= " WHERE regioni.regione LIKE '%$regione%'";
    }

    $sql .= " GROUP BY regioni.regione";

    $result = $conn->query($sql);

    // Controllo se ci sono risultati e stampa del testo
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='prenotazioni'>";
            echo "<h2>" . $row["regione"] . "</h2>";
            echo "<p>Numero prenotazioni: " . $row["numero_prenotazioni"] . "</p>";
            echo "<p>Importo totale: " . $row["importo"] . "</p>";
            echo "<p class='saldo'>Saldo: " . $row["saldo"] . "</p><br>";
            echo "</div>";
        }
    } else {
        echo "Nessun dato trovato.";
    }

?>




    </div>
