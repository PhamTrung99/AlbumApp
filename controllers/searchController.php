<?php 
require_once '../model/load.php';

if(isset($_GET['searchText'])){
    $searchText = $_GET['searchText'];

   if($_GET['isSongSearch'] == 'true'){
      // echo "<script type='text/javascript'>window.alert('$searchText');</script>";
        $songlsResult = $loadFromSong->getSongByContent($searchText);
   } 

   if($_GET['isArtistSearch'] == 'true'){
        $artistlsResult = $loadFromArtist->getArtistByName($searchText);
   }

   if($_GET['isAlbumSearch'] == 'true'){
        $albumlsResult = $loadFromAlbum->getAlbumNameByContent($searchText);
    }
}

?>