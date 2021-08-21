<?php 
require_once '../model/load.php';

$genresList = $loadFromGenres->getAllGenres();
$artistList = $loadFromArtist->getTop20Artist();
$albumList = $loadFromAlbum->getTop20Album();


?>