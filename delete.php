<?php
    include_once './includes/connect.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM task where id='$id'";
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
?>