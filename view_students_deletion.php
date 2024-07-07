<!-- view_student.php -->
<?php
// Include database connection
include 'db_config.php';

// Fetch all student entries from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='student'>";
        echo "<p><strong>Student ID:</strong> " . $row["student_id"]. "</p>";
        echo "<p><strong>Name:</strong> " . $row["name"]. "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
        echo "<p><strong>Subject:</strong> " . $row["subject"]. "</p>";
        echo "<p><strong>Marks:</strong> " . $row["marks"]. "</p>";
        echo "<button class='delete-btn' data-student-id='" . $row["student_id"] . "'>Delete</button>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>