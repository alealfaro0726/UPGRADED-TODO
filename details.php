<?php
    include_once './includes/connect.php';
    include_once './components/navbar.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM task where id='$id'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $time = strtotime($row['due_date']);
        $myFormatForView = date("m/d/y g:i A", $time);

    
        echo "
            <div class='details-container'>
                <h1>Task Details</h1>
                
                <br>
                <label class='task-label'>Task</label>
                <div class = 'task-name-details'>
                    <div class = 'details-name'>
                        <span style = 'margin-left:10px;text-transform:capitalize;font-size:21px;'>{$row['task_name']}</span>
                    </div>
                </div>
                
                <br>
                <br>
                <label class ='label-desc'>Task Description</label>
                <div class = 'task-desc-details'>
                <div class = 'details-description'> 
                    <span style = 'margin-left:10px;text-transform:capitalize;font-size:21px;'>{$row['task_description']}</span>
                </div>
                    
                </div>
                <br>
                <br>
                <div class = 'task-date-details'>
                    <label class ='label-date'>Task Due Date</label>
                    <div class = 'details-date'><span style = 'margin-left:10px;text-transform:capitalize;font-size:21px;'>{$myFormatForView}</span> </div>
                </div>
                <a style = 'color:white; width:80px;font-size:16px; padding:5px; border-radius:10px;text-align:center;background-color:#2b52bd;margin-top:30px;margin-bottom:0px;'href = 'index.php'role='button'>Go Back</a>
            </div>
        
        ";
            


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>