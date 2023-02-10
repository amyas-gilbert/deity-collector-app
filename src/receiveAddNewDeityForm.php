<?php

require 'db.php';
$db = connectToDb('deitybase');

$addNewDeityFormSubmitted = (isset($_POST['name']) && $_POST['name'] !== "" 
    && isset($_POST['mythology']) && $_POST['mythology'] !== "" 
    && isset($_POST['association']) && $_POST['association'] !== "");

if($addNewDeityFormSubmitted) {
    $newDeity = [
        'name' => $_POST['name'],
        'mythology' => $_POST['mythology'],
        'association' => $_POST['association'],
        'objects' => $_POST['objects']
    ];
    addNewDeity($db, $newDeity);
    echo '<h3>Hurray! You added ' . $newDeity['name'] . ' to the list of deities.</h3>';
    echo "<a href='../index.php'>Go back to the list</a>";
} else {
    echo '<p>Need some divine info...</p>';
    echo "<a href='../index.php'>Go back to the list</a>";
}