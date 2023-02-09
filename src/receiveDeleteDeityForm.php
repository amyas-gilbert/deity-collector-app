<?php

require 'db.php';
$db = connectToDb('deitybase');
$deities = getAllDeities($db);

deleteDeities($db, $deitiesToDelete);

echo '<h3>Such power in the hands of a mere mortal!</p>';
echo "<a href='../index.php'>See who's left...</a>";