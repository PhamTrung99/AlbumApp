<?php 
class Song{
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSongByContent($searchText) {
        $text = "%$searchText%";
        $statement = $this->pdo->prepare(
            'SELECT title.Title, artist.Name, genre.GenreName
            FROM albumdb.song, albumdb.title, albumdb.artist, albumdb.genre 
            WHERE song.TitleID = title.TitleID 
            AND song.ArtistID = artist.ArtistID 
            AND title.GenreID = genre.GenreID
            AND title.Title LIKE :searchText');
        $statement->bindParam(':searchText',$text, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

}
?>