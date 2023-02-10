<?php

require 'src/db.php';

$db = connectToDB('deitybase');
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
        <form method="post" action="src/receiveDeleteDeityForm.php">
            <?php foreach ($deities as $deity) {
                echo "<p><input type='checkbox' name='" . $deity['id'] . "'value='on'>
                <label>" . $deity['name'] . "</label></p>";
            }
            echo "<input type='submit' value='Delete'>"; ?>
        </form>
        <p>Be sure you've ticked the right boxes. There's no going back from this and these lot aren't the most forgiving types...</p>
    </main>
</body>
</html>