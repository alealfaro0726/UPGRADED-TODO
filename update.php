<?php
    include_once './includes/connect.php';
    
    $id = $_POST['id'];
    $firstName = $_POST['name'];
    $lastName = $_POST['desc'];
    $studentid = $_POST['date'];


    $sql = "UPDATE task SET task_name = '$firstName', task_description = '$lastName',due_date = '$studentid' where id='$id'";
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
?>