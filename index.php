<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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
            <p id="userType">User</p>
            <button onclick="switchUser()">Switch User</button>
        </div>
    </header>
    <main>
        <div>
            <h1>Main Menu</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li id="project-option"><a href="#">Add Project</a></li>
                <li id="conference-option"><a href="#">Add Conference</a></li>
            </ul>
            <p>No. of users visited:</p>
            <p>1</p>
        </div>
        <div>
            <div>
                <h1>Projects</h1>
                <?php include('projects.php'); ?>
            </div>
            <div>
                <h1>Conferences</h1>
                <!-- <?php include('projects.php'); ?> -->
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

    <!-- Login Form -->
    <div id="login-form">
        <h1>Login as Admin</h1>
        <form>
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="Username" />
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Password" />
            </div>

            <input type="button" onclick="loginSubmit()" value="Submit" />
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>