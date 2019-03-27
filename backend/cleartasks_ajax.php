<?php
    include 'conn.php';
    $data = $_POST;
    $data2=$_POST;
    
    $sql = "DELETE FROM tasks";
    $sql2 = "DELETE FROM completed";
    $result = $conn -> query($sql);
    $result2 = $conn -> query($sql2);
    if($result && $result2){
        echo 'success';
    }
   

   ?>