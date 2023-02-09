<?php
require 'src/db.php';
require 'src/functions.php';

$db = connectToDb('deitybase');
$deities = getAllDeities($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deitybase</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <main>
        <h1>BEHOLD!! Some deities and stuff:</h1>
        <div class="displayDeities">
            <?php foreach ($deities as $deity) {
                echo displayDeity($deity); 
            } ?>
        </div>
        <div class="addNewDeityForm">
            <h3>Can't see your favourite deity? No problem! Add them with this form:</h3>
            <form method="post" action="src/receiveAddNewDeityForm.php">
                <label>Name:</label><input type="text" name="name">
                <label>Mythology:</label><input type="text" name="mythology">
                <label>Association:</label><input type="text" name="association">
                <label>Object:</label><input type="text" name="objects" placeholder="start with a/an/the">
                <input type="submit" value="Add deity">
            </form>
        </div>
        <div class="deleteDeity">
        <h3>Fallen out of favour with any of them?</h3>
        <p>No worries, go <a href="deleteDeity.php">here</a> to delete one or more from the list</p>
        </div>
    </main>
</body>
</html>