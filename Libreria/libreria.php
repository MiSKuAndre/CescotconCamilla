<?php

// Stampa un div con del testo e una classe CSS specificata
function printDiv($text, $class) {
    // $text: contenuto del div
    // $class: nome della classe CSS da assegnare al div
    echo "<div class='" . $class . "'>" . $text . "</div>";
};

 // Genera un numero casuale di div (tra 5 e 30) e li stampa
function RandomDivDa5a30() {
    // numero: numero di div da creare (casuale)
    $numero = rand(5, 30);
    // Ciclo per stampare i div uno per uno
    for($i = 1; $i <= $numero; $i++) {
        // Stampa un div con classe 'first' e testo fisso
        echo "<div class='first'>div casuali</div>";
    }
};

 // Genera div in coppie (dispari/pari) per un numero casuale di iterazioni
function RandomDivDa10a30() {
    // numero: numero di coppie da creare (rand tra 5 e 15)
    $numero = rand(5, 15);
    // Per ogni iterazione stampiamo prima il div 'dispari' poi il div 'pari'
    for($i = 1; $i <= $numero; $i++) {
        // div per indicare la posizione "dispari"
        echo "<div class='dispari'>Io sono dispari</div>";
        // div per indicare la posizione "pari"
        echo "<div class='pari'>Io sono pari</div>";
    }
};

 // Genera un numero casuale di div (tra 5 e 10) e li stampa
function RandomDivDa5a10() {
    $numero = rand(5, 10);
    for($i = 1; $i <= $numero; $i++) {
        echo "<div class='div primored primoblue primoyellow gruppouno'></div>";
    }
};

 // Genera un numero casuale di div (tra 10 e 15) e li stampa
function RandomDivDa10a15() {
    $numero = rand(10, 15);
    for($i = 1; $i <= $numero; $i++) {
        echo "<div class='div secondored secondoblue secondoyellow gruppodue'></div>";
    }
};

function RandomDivDa5a20() {
    $numero = rand(5, 20);
    for($i = 1; $i <= $numero; $i++) {
        echo "<div class='div terzored terzoblue terzoyellow gruppotre'></div>";
    }
};

function DivGeneratorClienti() {
    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "cescot");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    //Inserisci un div per ogni cliente presente nella tabella "clienti" contenente h2 id cliente e p nome e cognome
    $sql = "SELECT id, nome, cognome FROM clienti";
    $result = $conn->query($sql);

    // Controllo se ci sono risultati e stampa del testo
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["id"] . "</h2>";
            echo "<p>" . $row["nome"] . " " . $row["cognome"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Nessun cliente trovato.";
    }

    // Chiusura della connessione
    $conn->close();
}
    




?>