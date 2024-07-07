<?php

include 'db_config.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<div class='student'>";
        echo "<p><strong>Name:</strong> " . $row["name"]. "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"]. "</p>";
        echo "<p><strong>Subject:</strong> " . $row["subject"]. "</p>";
        echo "<p><strong>Marks:</strong> " . $row["marks"]. "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
