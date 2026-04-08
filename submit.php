<?php

var_dump($_POST);

include 'database.php';

$sql = 'SELECT * FROM `task`';

$statement = $pdo->query($sql);
$task = $statement->fetch();

var_dump($task);