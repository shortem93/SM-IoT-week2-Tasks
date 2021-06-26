<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servomotors_db";
$m1 = $_POST['motor1'];
$m2 = $_POST['motor2'];
$m3 = $_POST['motor3'];
$m4 = $_POST['motor4'];
$m5 = $_POST['motor5'];
$m6 = $_POST['motor6'];

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
    die("Connection to Database Failed: ". $connection->connect_error);
}
echo 'Connected to DataBase Successfully! <br>';

$sql = "INSERT INTO servomotors_table (servoMotor1, servoMotor2, servoMotor3, servoMotor4, servoMotor5, servoMotor6) VALUES ('$m1', '$m2', '$m3', '$m4', '$m5', '$m6')";

if($connection->query($sql)==TRUE){
    echo 'The vaules have been saved to Database!';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
header('location: robotcontrol.html');
?>
