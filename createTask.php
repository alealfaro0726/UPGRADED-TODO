<?php

    include_once './components/navbar.php';
    include_once './includes/connect.php';

    if(isset($_POST['submit'])){
        $task = $_POST['task'];
        $due = $_POST['due'];
        $description = $_POST['description'];
        
        $sql = "INSERT INTO task(task_name, task_description, due_date) VALUE('$task','$description','$due')";

        $result = mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="container">
        <h1 class = "add-header">Add a Task</h1>
        <br>
        <br>

        <form class = "form-add" action="createTask.php" method = "POST">
            <input required name = "task" type = "text" placeholder = "Task.. " />

            <br><br>
            <input name = "description" type = "text" placeholder = "Task Description.. " />
            <br><br>
            <input  required name = "due" type = "datetime-local"/>
            <br>
            <br>
            <button name = "submit" type="submit">Create Task</button>
        </form>
    </div>

    
</body>
</html>