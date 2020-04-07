<?php
    $uploadFile = "/imageSave/" . basename($_FILES['photo']['name']);
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . $uploadFile;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir)) {
        $mysqli = new mysqli('127.0.0.1:3306', 'root', '','photosave');
        if ($mysqli->connect_errno) {
            echo $mysqli->connect_error;
            exit;
        }
        $query = "INSERT INTO `images` (`id`) VALUES ('$uploadDir')";
        $mysqli->query($query);
        if ($mysqli->errno) {
            echo $mysqli->error;
            exit;
        }

        echo "Нормально";
    } else {
        echo "Плохо";
    }
?>
