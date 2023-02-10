<?php

// require 'receiveForm.php';

function connectToDb(string $dbName): PDO {
    $db = new PDO('mysql:host=db;dbname=' . $dbName , 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllDeities(PDO $db): array {
    $query = $db->prepare('SELECT * FROM deities');
    $query->execute();
    return $query->fetchAll();
}

function addNewDeity(PDO $db, array $newDeity) {
    $query = $db->prepare('INSERT INTO deities (name, mythology, association, objects) VALUES (:name, :mythology, :association, :objects)');
    $query->execute(['name' => $newDeity['name'], 'mythology' => $newDeity['mythology'], 'association' => $newDeity['association'], 'objects' => $newDeity['objects']]);
}

function deleteDeities(PDO $db, string $deitiesToDelete) {
    $query = $db->prepare("DELETE FROM deities WHERE id IN ($deitiesToDelete)");
    $query->execute();
}