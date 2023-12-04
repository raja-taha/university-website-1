<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>
</head>

<body>

    <h1>Add New Project</h1>

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
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $date = $_POST["date"];
        $submitTo = $_POST["submitTo"];

        $sql = "INSERT INTO projects (name, description, date, submitTo) VALUES ('$name', '$desc', '$date', '$submitTo')";

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
        <label for="name">Project Name: </label>
        <input type="text" name="name" id="name" required>

        <label for="desc">Project Description: </label>
        <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>

        <label for="date">Project Date: </label>
        <input type="date" name="date" id="date" required>

        <label for="submitTo">Submit To: </label>
        <input type="text" name="submitTo" id="submitTo" required>

        <button type="submit">Submit</button>
    </form>

</body>

</html>