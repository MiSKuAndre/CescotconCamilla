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

    <form action="clienti.php" id="form" method="GET">

<label for="regione">Filtra per Regione:</label>
    <select name="regione" id="regione">
            <option value="">Seleziona Regione</option>
            <option value="Lombardia">Lombardia</option>
            <option value="Lazio">Lazio</option>
            <option value="Campania">Campania</option>
            <option value="Sicilia">Sicilia</option>
            <option value="Veneto">Veneto</option>
            <option value="Toscana">Toscana</option>
            <option value="Emilia-Romagna">Emilia-Romagna</option>
            <option value="Puglia">Puglia</option>
            <option value="Calabria">Calabria</option>
            <option value="Sardegna">Sardegna</option>
            <option value="Friuli-Venezia Giulia">Friuli-Venezia Giulia</option>
            <option value="Liguria">Liguria</option>   
            <option value="Marche">Marche</option>
            <option value="Abruzzo">Abruzzo</option>
            <option value="Umbria">Umbria</option>
            <option value="Basilicata">Basilicata</option>  
            <option value="Trentino-Alto Adige">Trentino-Alto Adige</option>
            <option value="Valle d'Aosta">Valle d'Aosta</option>
            <option value="Molise">Molise</option>
            <option value="Piemonte">Piemonte</option>
        </select>
    <button type="submit">Cerca</button>
    <?php 
    // inserire due bottoni "avanti" e "indietro" per navigare tra le pagine dei risultati, mostrando 50 record per pagina
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $limit = 50;
    $offset = ($page - 1) * $limit;
    ?>
    <button type="submit" name="page" value="<?php echo max(1, $page - 1); ?>">Indietro</button>
    <button type="submit" name="page" value="<?php echo $page + 1; ?>">Avanti</button>
    </form>

    <?php

    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }      
    // Query per ottenere i dati dei clienti con join tra le tabelle regioni, citta e clienti in base ai bottoni avanti e indietro
    $sql = "SELECT clienti.nome, clienti.cognome, regioni.regione, regioni.area_geografica, citta.citta
        FROM regioni
        INNER JOIN citta ON regioni.id_regione = citta.regione
        INNER JOIN clienti ON citta.id_citta = clienti.citta";

    if (!empty($_GET['regione'])) {
        $regione = $conn->real_escape_string($_GET['regione']);
        $sql = $sql . " WHERE regioni.regione = '$regione'";
    }

    $sql .= " LIMIT $limit OFFSET $offset";

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