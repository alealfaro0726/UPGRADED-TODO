<?php
    include_once './components/navbar.php';
    include_once './includes/connect.php';
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
    
<div class="main-container">
<div class="top">    
<h1>My Tasks</h1>
<button onclick="window.location.href='createTask.php'">+</button>
</div>
    <div class="tasks-container">
    <table class = "table">
            <tr>
                <th>Task</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>

            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr><tr></tr><tr></tr>
                      
            <?php include_once './showtask.php'?>

            <br>
          
                
                
            
        </table>
    </div>
    
</div>

    
</body>
</html>