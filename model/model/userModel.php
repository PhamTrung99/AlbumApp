<?php 
class User{
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function login($userName, $passWord) {
        $userN = "$userName";
        $pass = "$passWord";
        $statement = $this->pdo->prepare(
         'SELECT *
            FROM albumdb.user
            WHERE user.UserName = :userName AND user.PassWord = :pass');
        $statement->bindParam(':userName',$userN, PDO::PARAM_STR);
        $statement->bindParam(':pass',$pass, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);;
    }

}
?>