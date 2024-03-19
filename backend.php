<?php

    ini_set("display_errors",1);

    include 'server.php';

    if (!isset($_POST)) die("Unable to Fetch Data");

    $name = $_POST['name'];

    // echo $name;
    $uid = uniqid();
    $cdate = date(DATE_ATOM);
    
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        
        $filepath = "user" . $uid . "/";
        $imagename = date("Ymd_His");

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        if(in_array($filetype, $allowed)){
            if(file_exists($filepath . $filename)){
                echo $filename . " is already exists.";
            } else{
                $imagename = $imagename . "." . $ext;
                $newfilename = $filepath . $imagename;
                if (!file_exists($filepath)) {
                    mkdir($filepath);
                }
                move_uploaded_file($_FILES["photo"]["tmp_name"], $newfilename);
                // echo "File Saved"."<br>";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
            exit();
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
        exit();
    }
    
    if($_FILES["photo"]["error"] > 0){
        echo "Error: " . $_FILES["photo"]["error"] . "<br>";
        exit();
    }
    else{
        // RESIZE

        // list($width, $height) = getimagesize($newfilename);
        // $thumb = imagecreatetruecolor(60, 60);
        // $source = imagecreatefromjpeg($newfilename);
        // imagecopyresized($thumb, $source, 0, 0, 0, 0, 60, 60, $width, $height);

        // move_uploaded_file($thumb, $newfilename."_thmb");
    }

    $sql =
    "INSERT INTO `image`(
        `id`,
        `name`,
        `image`,
        `created_date`,
        `created_by`
    )
    VALUES(
        '$uid',
        '$name',
        '$imagename',
        '$cdate',
        '$uid'
    )";

    get_query($sql) or die ("Unable to Inse0rt Data");

    echo "Data Entered";

?>