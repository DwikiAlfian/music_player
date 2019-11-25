var mus = document.getElementById("player");

function play() {
    mus.play();
}

function pause() {
    mus.pause();
}

function stop() {
    mus.load();
    mus.pause();
}