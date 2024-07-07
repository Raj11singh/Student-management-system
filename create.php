
<?php
include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

$sql = "INSERT INTO students (name, email, subject, marks) VALUES ('$name', '$email', '$subject', $marks)";

if ($conn->query($sql) === TRUE) {
    header('Location: frontend.html');
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
