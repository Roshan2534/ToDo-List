<?php
    include 'conn.php';
    $data = $_POST;
    $data2=$_POST;
    $task = $data['task'];
    $name = $data['task'];
    $id = $data['id'];
    $sql = "INSERT INTO completed(name) values('$name')";
    $sql2 = "DELETE FROM tasks WHERE id='$id'";
    $result = $conn -> query($sql);
    $result2 = $conn -> query($sql2);
    if($result && $result2){
        echo 'success';
    }
   

   ?>