<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servomotors_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Failed to connect to database");
} else {
    echo "Connected to database! <br>";
}

$sql = "SELECT status FROM servomotorsstatus_table WHERE SMOOID=(SELECT MAX(SMOOID) FROM servomotorsstatus_table);";

$result = mysqli_query($connection, $sql);

$stausOFF = FALSE;

while ($row = mysqli_fetch_assoc($result)) {
    $status = $row["status"];
    if ($status == 1) {
        $insert = "INSERT INTO servomotorsstatus_table (status) VALUES (0);";
        if ($connection->query($insert) == TRUE) {
            echo 'The motors now are OFF!';
            $stausOFF = TRUE;
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $insert . "<br>" . $connection->error;
        }
    }
}

if ($stausOFF == FALSE) {
    $insert = "INSERT INTO servomotorsstatus_table (status) VALUES (1);";
    if ($connection->query($insert) == TRUE) {
        echo 'The motors now are ON!';
    } else {
        echo "Error: " . $insert . "<br>" . $connection->error;
    }
    header('location: robotcontrol.html');
}
