<?php
    include 'conn.php';
    $data = $_POST;
    $task = $data['task'];
    $sql = "INSERT INTO tasks(task)values('$task')";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
   

   ?>