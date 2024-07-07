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
        echo "<input type='text' class='name-input' value='" . $row["name"] . "'>";
        echo "<input type='email' class='email-input' value='" . $row["email"] . "'>";
        echo "<input type='text' class='subject-input' value='" . $row["subject"] . "'>";
        echo "<input type='number' class='marks-input' value='" . $row["marks"] . "'>";
        echo "<button class='update-btn' data-student-id='" . $row["student_id"] . "'>Update</button>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>