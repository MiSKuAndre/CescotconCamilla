var clickMeButton = document.getElementById("Tuttirosso");
clickMeButton.addEventListener('click', function() {
    var cambioColore = document.getElementsByClassName("div");
    for (var i = 0; i < cambioColore.length; i++) {
        cambioColore[i].style.backgroundColor = "red";
    }
});