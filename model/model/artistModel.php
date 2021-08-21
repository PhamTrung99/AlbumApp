<?php 
class Artist{
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getTop20Artist() {
        $statement = $this->pdo->prepare('
        SELECT artist.Name, count(song.songID) AS songCount
        FROM albumdb.artist, albumdb.song
        WHERE artist.ArtistID = song.ArtistID
        GROUP BY artist.Name 
        ORDER BY songCount DESC
        LIMIT 20
        ');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getArtistByName($searchText) {
        $text = "%$searchText%";
        $statement = $this->pdo->prepare(
            'SELECT artist.Name, artist.ImagePath
            FROM albumdb.artist
            WHERE artist.Name LIKE :searchText');
        $statement->bindParam(':searchText',$text, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
?>