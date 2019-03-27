<?php
    include 'conn.php';
    $data = $_POST;
    $data2=$_POST;
    $task = $data['name'];
    $name = $data['name'];
    $id = $data['id'];
    $sql = "INSERT INTO tasks(task) values('$task')";
    $sql2 = "DELETE FROM completed WHERE id='$id'";
    $result = $conn -> query($sql);
    $result2 = $conn -> query($sql2);
    if($result && $result2){
        echo 'success';
    }
   

   ?>