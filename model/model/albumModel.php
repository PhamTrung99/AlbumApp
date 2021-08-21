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

}
?>