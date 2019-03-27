<?php
    include 'conn.php';
    $data = $_POST;
    
    
    $sql2 = "DELETE FROM tasks";
    $result2 = $conn -> query($sql2);
    if($result2){
        echo 'success';
    }
   

   ?>