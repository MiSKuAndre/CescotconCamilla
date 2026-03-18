<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="inserimento-clienti.php">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="cognome" placeholder="cognome">

<label for="citta">Filtra per Città:</label>
    <select name="citta" id="citta">
    <!-- Opzioni per le città -->
    <option value="">Seleziona Città</option>
    <!-- Le opzioni per le città saranno generate dinamicamente dal database -->
    <?php
    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }   
    $sql = "SELECT citta.citta FROM citta"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["citta"] . "'>" . $row["citta"] . "</option>"; 
        }
    } else {
        echo "<option value=''>Nessuna città disponibile</option>";
    }
    $conn->close();
    ?>
        </select>
    <button type="reset">annulla</button>
    <button type="submit">salva</button>
    
    
    </form>
    <?php
    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "prenotazioni");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    
    if (isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['citta'])) {
        $nome = $conn->real_escape_string($_POST['nome']);
        $cognome = $conn->real_escape_string($_POST['cognome']);
        $citta = $conn->real_escape_string($_POST['citta']);

        //inserimento dei dati nel database
        $sql = "INSERT INTO clienti (nome, cognome, citta) VALUES ('$nome', '$cognome', '$citta')";
        if ($conn->query($sql) === TRUE) {
            echo "Nuovo cliente inserito con successo";
        } else {
            echo "Errore: " . $sql . "<br>" . $conn->error;
        }
    }
    // Chiusura della connessione
    $conn->close();
    ?>
</body>
</html>

