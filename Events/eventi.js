

var clickMeButton = document.getElementById("Rosso");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "red";
    }
});

var clickMeButton = document.getElementById("Giallo");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "yellow";
    }
});

var clickMeButton = document.getElementById("Blu");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "blue";
    }
}); 




 /* Funzione per cambiare colore al click del bottone 
 
 function cambiaColore(buttonId, ClassName, color) {
    var clickMeButton = document.getElementById(buttonId);
    clickMeButton.addEventListener('click', function() {
        let elements = document.getElementsByClassName(ClassName);  
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.backgroundColor = color;
        }
    });
    }

cambiaColore("Rosso", "div", "red");
cambiaColore("Giallo", "div", "yellow");
cambiaColore("Blu", "div", "blue"); 
*/