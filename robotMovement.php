<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robotmovement_db";


$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection to Database Failed: " . $connection->connect_error);
}
echo 'Connected to DataBase Successfully! <br>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['forward'])) {
        $sql = "INSERT INTO robotmovement_table (movement) VALUES ('forward')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            header('location: robotcontrol.html');
        }
    }

    if (isset($_POST['left'])) {
        $sql = "INSERT INTO robotmovement_table (movement) VALUES ('left')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            header('location: robotcontrol.html');
        }
    }


    if (isset($_POST['stop'])) {
        $sql = "INSERT INTO robotmovement_table (movement) VALUES ('stop')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            header('location: robotcontrol.html');
        }
    }

    if (isset($_POST['right'])) {
        $sql = "INSERT INTO robotmovement_table (movement) VALUES ('right')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            header('location: robotcontrol.html');
        }
    }

    if (isset($_POST['backward'])) {
        $sql = "INSERT INTO robotmovement_table (movement) VALUES ('backward')";
        if ($connection->query($sql) == TRUE) {
            echo 'The vaule have been saved to Database!';
            header('location: robotcontrol.html');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            header('location: robotcontrol.html');
        }
    }
}
echo 'No movment was triggered';
header('location: robotcontrol.html');
?>
