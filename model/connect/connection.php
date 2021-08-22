<?php 
require_once 'dbConfigVar.php' ;

try {
    $pdo = new PDO($hostInfo, $userAdmin, $passAdmin);
}catch (PDOException $e){
    echo "Connection error !!!" . $e->getMessage();
}

?>