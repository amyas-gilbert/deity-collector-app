<?php

function connectToDb (string $dbName): PDO {
    $db = new PDO ('mysql:host=db;dbname=' . $dbName , 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllDeities (PDO $db): array {
    $query = $db->prepare('SELECT * FROM deities');
    $query->execute();
    return $query->fetchAll();
}