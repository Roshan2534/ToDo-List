<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $task=$data['task'];
    
    $sql2 = "UPDATE tasks SET task='$task' WHERE id='$id'";
    $result2 = $conn -> query($sql2);
    if($result2){
        echo 'success';
    }
   

   ?>