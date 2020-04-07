<?php
    $mysqli = new mysqli('127.0.0.1:3306', 'root', '','photosave');
    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
        exit;
    }

    $query = "SELECT * FROM `images`";
    $result = $mysqli->query($query);
    if ($mysqli->errno) {
        echo $mysqli->error;
        exit;
    }

    while ($row = $result->fetch_assoc()) {
        ?>
        <img scr="<?php echo $row[`id`]; ?>">
        <?php
    }
?>