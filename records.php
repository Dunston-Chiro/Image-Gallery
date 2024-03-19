<?php

    ini_set("display_errors",1);

    include 'server.php';

    $sql = "SELECT * FROM `image` WHERE `deleted`='0' ORDER BY created_date DESC";

    $result = get_query($sql) or die("0");

    // echo json_encode($result);

    $records = [];

    $inc = 0;

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $records[$inc++] = $row;
        }
    }
    else die('0');

    echo json_encode($records);

?>