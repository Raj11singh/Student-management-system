<?php
include 'db_config.php';

$student_id = $_POST['student_id'];

$sql = "DELETE FROM students WHERE student_id = $student_id";
if ($conn->query($sql) === TRUE) {
    echo "Student deleted successfully";
} else {
    echo "Error deleting student: " . $conn->error;
}


$conn->close();
?>