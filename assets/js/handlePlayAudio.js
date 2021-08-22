function playAudio(songID) {
    var x = document.getElementById(`myAudio${songID}`);
    x.play();
    document.getElementById(`btPlayAudio${songID}`).innerHTML =`<button class="btn btn-outline-dark" onclick="pauseAudio(${songID})"><i class="fa fa-pause"></i></button>`
}