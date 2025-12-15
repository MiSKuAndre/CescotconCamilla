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



?>