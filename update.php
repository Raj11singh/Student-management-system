<?php
include 'db_config.php';
$student_id = $_POST['student_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

$sql = "UPDATE students SET name='$name', email='$email', subject='$subject', marks=$marks WHERE student_id=$student_id";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>