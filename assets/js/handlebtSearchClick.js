function handlebtSearchClick() {
    var cbSong = document.getElementById("cbsong");
    var cbArtist = document.getElementById("cbartist");
    var cbAlbum = document.getElementById("cbalbum");
    var searchText = document.getElementById("searchText");

    if ((cbSong.checked || cbArtist.checked || cbAlbum.checked) && searchText.value) {
        window.location.replace(
            `http://localhost/AlbumApp/views/index.php?searchText=${searchText.value}&isSongSearch=${cbSong.checked}&isArtistSearch=${cbArtist.checked}&isAlbumSearch=${cbAlbum.checked}`
        )
    } else {
        window.alert("Vui lòng điền đủ thông tin !!");
    }

}