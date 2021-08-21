<?php 
class Genres{
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllGenres() {
        $statement = $this->pdo->prepare('SELECT * FROM albumdb.genre;');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

}
?>