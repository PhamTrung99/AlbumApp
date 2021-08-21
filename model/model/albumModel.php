<?php 
class Album{
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getTop20Album() {
        $statement = $this->pdo->prepare('
        SELECT album.Title, album.ReleaseDate
        FROM albumdb.album
        ORDER BY album.ReleaseDate DESC
        LIMIT 20
        ');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAlbumNameByContent($searchText) {
        $text = "%$searchText%";
        $statement = $this->pdo->prepare(
        'SELECT album.Title,DATE(album.ReleaseDate) AS ReleaseDate, count(album_details.SongID) AS songCount
        FROM albumdb.album
        LEFT JOIN albumdb.album_details ON album_details.AlbumID = album.AlbumID 
        WHERE album.Title LIKE :searchText
        GROUP BY album.Title,album.ReleaseDate');
        $statement->bindParam(':searchText',$text, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

}
?>