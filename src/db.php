<?php

function connectToDb () {
    $db = new PDO ('mysql:host=db;dbname=deitybase', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllDeities (PDO $db) {
    $query = $db->prepare('SELECT * FROM deities');
    $query->execute();
    return $query->fetchAll();
}