<?php 
global $pdo;

require_once 'connect/connection.php';
require_once 'model/genresModel.php';
require_once 'model/artistModel.php';
require_once 'model/albumModel.php';
require_once 'model/songModel.php';
require_once 'model/userModel.php';

$loadFromGenres = new Genres($pdo);
$loadFromArtist = new Artist($pdo);
$loadFromAlbum = new Album($pdo);
$loadFromSong = new Song($pdo);
$loadFromUser = new User($pdo);

?>