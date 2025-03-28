<?php 

require_once 'data/config.php'; 

try {
    $connection = new PDO($dsn, $username, $password, $options);
    echo "DB Connected. ";
} catch (PDOException $error){
    throw new \PDOException($error->getMessage(), (int)$e->getCode());
}