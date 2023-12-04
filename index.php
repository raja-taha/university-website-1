<?php
session_start();

// Read the current count from the counter file
$counterFile = 'counter.txt';
$count = (file_exists($counterFile)) ? (int)file_get_contents($counterFile) : 0;

// Increment the count for each visit
$count++;

// Update the counter file with the new count
file_put_contents($counterFile, $count);

// Get the user type from the session
$userType = isset($_SESSION["userType"]) ? $_SESSION["userType"] : "User";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>My Webpage</title>
</head>

<body>
    <header>
        <div><img src="taha.jpg" alt="logo" /></div>
        <div>
            <div>
                <h1>Skills</h1>
                <ul>
                    <li>C++</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                </ul>
            </div>
            <div>
                <h1>Experience</h1>
                <ul>
                    <li>C++</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
        <div>
            <p>Logged in as:</p>
            <p id="userType"><?php echo $userType; ?></p>
            <a href="/login.php">Switch User</a>
        </div>
    </header>
    <main>
        <div>
            <h1>Main Menu</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li id="add-projects"><a href="/add-project.php">Add Project</a></li>
                <li id="add-conferences"><a href="/add-conference.php">Add Conference</a></li>
            </ul>
            <p>No. of users visited:</p>
            <p><?php echo $count; ?></p>
        </div>
        <div>
            <div>
                <h1>Projects</h1>
                <div class="projects-section">
                    <?php include('projects.php'); ?>
                </div>
            </div>
            <div>
                <h1>Conferences</h1>
                <div class="projects-section">
                    <?php include('conferences.php'); ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <div>
                <img src="taha.jpg" alt="Taha" />
                <h1>Muhammad Taha</h1>
                <div>
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                </div>
            </div>
            <div>
                <img src="talha.jpg" alt="Talha" />
                <h1>Muhammad Talha</h1>
                <div>
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                </div>
            </div>
            <div>
                <img src="saif.jpg" alt="Saif" />
                <h1>Saif Ullah</h1>
                <div>
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
        <p>Welcome to My Webpage. © All Rights Reserved!</p>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var userType = document.getElementById("userType").textContent;

            var projects = document.getElementById("add-projects");
            var conferences = document.getElementById("add-conferences");
            console.log(userType);

            if (userType === "admin") {
                projects.style.display = "block";
                conferences.style.display = "block";
            } else {
                projects.style.display = "none";
                conferences.style.display = "none";
            }
        });
    </script>

</body>

</html>