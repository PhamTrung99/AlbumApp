<?php require '../controllers/searchController.php'?>

<div class="row" style="font-weight: bolder;font-size: larger;">TÌM KIẾM</div>
<div class="row">
    <div class="col-md-2">
        Từ khoá
    </div>
    <div class="col-md-4">
        <input type="input" id="searchText" />
    </div>
    <div class="col-md-1">
        <button onclick="handlebtSearchClick()" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
    </div>
    <div class="col-md-5"></div>
</div>
<div class="row">
    <input type="checkbox" id="cbartist" name="cbartist" style="margin-left: 100px;">
    <label for="cbartist">Ca sĩ</label><br>
    <input type="checkbox" id="cbalbum" name="cbalbum" style="margin-left: 10px;">
    <label for="cbalbum">Album</label><br>
    <input type="checkbox" id="cbsong" name="cbsong" style="margin-left: 10px;">
    <label for="cbsong">Bài hát</label><br><br>
</div>
<hr class="solid">
<div class="row" style="font-weight: bolder;font-size: larger;">Kết quả</div>
<?php if($songlsResult) {?>
<div class="row" style="padding: 15px 0px 5px 25px;font-weight: bolder;">>> BÀI HÁT</div>
<div class="row">
    <ul class="list-group" style="width: 664px;">
        <?php forEach ($songlsResult as $song) { ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-9"><?php echo($song->Title)?> - <?php echo($song->Name)?></div>
                <div class="col-md-1" id="btPlayAudio">
                    <button class="btn btn-outline-dark" onclick="playAudio()"><i class="fa fa-play"></i></button>
                </div>
                <audio id="myAudio">
                    <source src="../assets/audio/Dom dom_jack.mp3" type="audio/mpeg">
                </audio>
                <div class="col-md-2" style="text-align: end;color: red"><?php echo($song->GenreName) ?></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>

<?php if($albumlsResult) {?>
<div class="row" style="padding: 15px 0px 5px 25px; font-weight: bolder;">>>ALBUM </div>
<div class="row">
    <ul class="list-group" style="width: 664px;">
        <?php forEach ($albumlsResult as $album) { ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-8"><?php echo($album->Title)?> - (<?php echo($album->songCount)?> bài)</div>
                <div class="col-md-2"><small
                        style="color: red; padding-top:10px"><?php echo($album->ReleaseDate)?></small></div>
                <div class="col-md-2" style="padding-left: 39px;"><img src='../assets/image/thebeatlesAlbum.jpeg'
                        height="70px" width="70px"></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>

<?php if($artistlsResult) {?>
<div class="row" style="padding: 15px 0px 5px 25px; font-weight: bolder;">>> CA SĨ/ NHÓM NHẠC </div>
<div class="row">
    <ul class="list-group" style="width: 664px;">
        <?php forEach ($artistlsResult as $artist) { ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-10"><?php echo($artist->Name)?></div>
                <div class="col-md-2" style="padding-left: 39px;"><img src='../assets/image/adele.jpeg' height="70px"
                        width="70px"></div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>


<script>
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
</script>
<script>
var x = document.getElementById("myAudio");

function playAudio() {
    x.play();
    document.getElementById("btPlayAudio").innerHTML ='<button class="btn btn-outline-dark" onclick="pauseAudio()"><i class="fa fa-pause"></i></button>'

}

function pauseAudio() {
    x.pause();
    document.getElementById("btPlayAudio").innerHTML ='<button class="btn btn-outline-dark" onclick="playAudio()"><i class="fa fa-play"></i></button>'

}
</script>