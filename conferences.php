<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_projects";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM conferences";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="conferences">';
        echo "ID: " . $row["id"] . "<br>";
        echo "Title:" . $row["title"] . "<br>";
        echo "Work Produced: " . $row["work"] . "<br>";
        echo "Date: " . $row["date"] . "<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
