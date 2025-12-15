var clickMeButton = document.getElementById("Tuttirosso");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "red";
    }
});

var clickMeButton = document.getElementById("Tuttiblu");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "blue";
    }
});

var clickMeButton = document.getElementById("Primoblu");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("primoblue");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "blue";
    }
});

var clickMeButton = document.getElementById("Primorosso");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("primored");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "red";
    }
});

var clickMeButton = document.getElementById("Secondoblu");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("secondoblue");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "blue";
    }
});

var clickMeButton = document.getElementById("Secondorosso");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("secondored");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "red";
    }
});