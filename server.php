<?php
    ini_set("display_errors",1);

    function get_query($sql)
    {
        $HOSTNAME = "10.10.10.11:3306";
        $USERNAME = "root";
        $PASS = "c0relynx"; 
        $DATABASE = "sampledb";

        // Create connection
        $conn = mysqli_connect($HOSTNAME, $USERNAME, $PASS, $DATABASE);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);

        return $result;
    }
?>