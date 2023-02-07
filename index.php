<?php
require 'src/db.php';
require 'src/functions.php';

$db = connectToDb('deitybase');
$deities = getAllDeities($db);

?>

<!DOCTYPE html>

<html>
<head>
    <title>Deitybase</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <h1>BEHOLD!! Some deities and stuff:</h1>
    <div>
        <?php displayDeities($deities);?>
    </div>


</body>
</html>