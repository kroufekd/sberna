<?php 

    include "db.php";

    $sql = '
        SELECT * FROM notifications where id_notification = 1
    ';

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo json_encode($row);
    
?>