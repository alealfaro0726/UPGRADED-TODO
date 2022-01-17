<?php
    include_once './includes/connect.php';

    $sql = "SELECT * FROM task";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $time = strtotime($row['due_date']);
        $myFormatForView = date("m/d/y g:i A", $time);

        if($row['id'] == $_GET['id']){
            echo '<form action = "update.php" method ="POST">
                    <td ><input placeholder = "Task Name..."style = "border:none;background-color:white;border-bottom:1px solid black;width:220px;height:25px;"  class = ""type = "text" name = "name" value ="' .$row['task_name'] .'"></td>
                    <td ><input placeholder = "Task Description..."style = "border:none;background-color:white;border-bottom:1px solid black;width:220px;height:25px;" type = "text" name = "desc" value ="' .$row['task_description'] .'"></td>
                    <td ><input style = "outline:none;border:none;background-color:white;border-bottom:1px solid black;width:220px;height:25px;" type = "datetime-local" name = "date" required value ="' .$myFormatForView .'"></td>
                    <td  ><button style = "color:white; font-size:16px;width:130px; cursor:pointer;padding:5px; border-radius:10px;background-color:#3b42c4;border:none;margin-bottom:5px;" type = "submit">Save</button></td>
                    <input type = "hidden" name = "id" value = "' .$row['id'] .'">
            </form>';
        } else{
            echo "<tr style = 'padding:20px;'>";
                echo "<td >{$row['task_name']}</td>";
                echo "<td>{$myFormatForView}</td>";
                echo "<td><a href='details.php?id=".$row['id']. "' role = 'button'>View Details</a></td>";
                echo "<td><a class = 'update-btn'href='index.php?id=".$row['id']. "' role = 'button'>Edit Task</a></td>";
                echo "<td><a style = 'border:1px solid #FF4433; background-color:#FF4433;color:white;'href='delete.php?id=".$row['id']. "' role = 'button'>Delete Task</a></td>";
                echo "</tr>";

        }

    }

?>

