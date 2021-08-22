function pauseAudio(songID) {
    var x = document.getElementById(`myAudio${songID}`);
    x.pause();
    document.getElementById(`btPlayAudio${songID}`).innerHTML =`<button class="btn btn-outline-dark" onclick="playAudio(${songID})"><i class="fa fa-play"></i></button>`

}