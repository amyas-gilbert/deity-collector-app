<?php

require 'db.php';
$db = connectToDb('deitybase');
$deities = getAllDeities($db);

$deitiesChecked = array_keys($_POST);
$deitiesToDelete = implode(", ", $deitiesChecked);

deleteDeities($db, $deitiesToDelete);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deitybase</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <main>
        <h3>Such power in the hands of a mere mortal!</p>;
            <a href='../index.php'>See who's left...</a>;
    </main>
</body>

</html>