<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>TODO LIST</h1>

        <form action="submit.php" method="POST">
            <input type="text" name="add"> 
            <button type="submit">GO</button>

            <ul>
                <?php
                include 'database.php';
                $sql = 'SELECT * FROM `task`';
                $statement = $pdo->query($sql);
                
                foreach($statement->fetchAll() as $task){
                ?>
                <li>
                    <input type="checkbox" id="todo_<?= $task['id'];?>" name="task_<?= $task['id'];?>">
                    <label for="todo_<?= $task['id'];?>"><?= $task['label'];?></label>
                </li>
                <?php 
                }
                ?>
     
            </ul>
        </form>
    </main>
</body>
</html>