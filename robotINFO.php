<?php
$connection1 = new mysqli("localhost","root","","servomotors_db");
$connection2 = new mysqli("localhost","root","","robotmovement_db");
$sql1 = mysqli_query($connection1,"SELECT servoMotor1,servoMotor2,servoMotor3,servoMotor4,servoMotor5,servoMotor6 FROM servomotors_table WHERE SMID=(SELECT MAX(SMID) FROM servomotors_table)");
$sql2 = mysqli_query($connection1,"SELECT status FROM servomotorsstatus_table WHERE SMOOID=(SELECT MAX(SMOOID) FROM servomotorsstatus_table)");
$sql3 = mysqli_query($connection2,"SELECT movement FROM robotmovement_table WHERE MID=(SELECT MAX(MID) FROM robotmovement_table)");
$print_data1 = mysqli_fetch_row($sql1);
$print_data2 = mysqli_fetch_row($sql2);
$print_data3 = mysqli_fetch_row($sql3);

if($print_data1>0){
echo 'Servo Motor 1 Angle Value: ';
echo $print_data1[0];
echo '<br>';
echo 'Servo Motor 2 Angle Value: ';
echo $print_data1[1];
echo '<br>';
echo 'Servo Motor 3 Angle Value: ';
echo $print_data1[2];
echo '<br>';
echo 'Servo Motor 4 Angle Value: ';
echo $print_data1[3];
echo '<br>';
echo 'Servo Motor 5 Angle Value: ';
echo $print_data1[4];
echo '<br>';
echo 'Servo Motor 6 Angle Value: ';
echo $print_data1[5];
echo '<br>';
} else {
    echo "No angle value data have been saved<br>";
}

if($print_data3>0){
    echo "Current movement: ";
    echo $print_data3[0];
    echo '<br>';
    } else {
        echo "No movment button pressed yet<br>";
    }

    if($print_data2>0){
        echo "On/Off: ";
        echo $print_data2[0];
        echo '<br>';
        } else {
            echo "On/Off button have not triggered yet<br>";
        }        

?>