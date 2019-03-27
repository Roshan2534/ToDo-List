<?php 

function getalltasks(){
    include 'conn.php';
    $data=array();
    $sql="select * from tasks";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        array_push($data,$row);
    }
        return $data;
}
?>