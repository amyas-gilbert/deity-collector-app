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
        <div>
            <?php foreach ($deities as $deity) {
               
                echo displayDeity($deity); 
               
            } ?>
        </div>
    </main>
</body>
</html>