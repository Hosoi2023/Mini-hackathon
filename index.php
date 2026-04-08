<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TO-DO List:</h1>

    <form action="submit.php" method="POST">
        <input type="text" name="add">
        <button type="submit">GO</button>

        <ul>
            <?php
            include 'databse.php';
            $sql = 'SELECT * FROM `task`';
            $statement = $pdo->query($sql);
            while($task = $statement->fetch()){
                echo '<li>
                <input type="checkbox" id="todo1" name="task" >
                <label for="todo1">.$task['label'].'</label>
                </li>';
            }
            ?>
            <li>
                <input type="checkbox" id="todo1" name="task" >
                <label for="todo1">Terminer HTML</label>
            </li>
            <li>
                <input type="checkbox" id="todo2" name="task2" >
                <label for="todo2">Ecrire PHP</label>
            </li>
        </ul>
    </form>

</body>
</html>