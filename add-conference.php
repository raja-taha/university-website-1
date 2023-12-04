<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Conference</title>
</head>

<body>

    <h1>Add New Conference</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assignment_projects";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $work = $_POST["work"];
        $date = $_POST["date"];

        $sql = "INSERT INTO conferences (title, work, date) VALUES ('$title', '$work', '$date')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <form action="" method="post">
        <label for="title">Conference Title: </label>
        <input type="text" name="title" id="title" required>

        <label for="work">Work Produced: </label>
        <textarea name="work" id="work" cols="30" rows="10" required></textarea>

        <label for="date">Conference Date: </label>
        <input type="date" name="date" id="date" required>

        <button type="submit">Submit</button>
    </form>

</body>

</html>