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

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="project">';
        echo "ID: " . $row["id"] . "<br>";
        echo "Name:" . $row["name"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "Date: " . $row["date"] . "<br>";
        echo "SubmitTo: " . $row["submitTo"] . "<br>";
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
