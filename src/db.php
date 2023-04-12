<?php

function connectToDb(string $dbName): PDO {
    $db = new PDO('mysql:host=localhost:3306;dbname=' . $dbName , 'deitybase', '%Bjz048o7');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllDeities(PDO $db): array {
    $query = $db->prepare('SELECT * FROM deities');
    $query->execute();
    return $query->fetchAll();
}
