<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    
    $sql2 = "DELETE FROM tasks WHERE id='$id'";
    $result2 = $conn -> query($sql2);
    if($result2){
        echo 'success';
    }
   

   ?>