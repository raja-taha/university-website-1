let userTypeElement = document.getElementById("userType");
let adminOption1 = document.getElementById("project-option");
let adminOption2 = document.getElementById("conference-option");
let loginForm = document.getElementById("login-form");

if (userTypeElement.innerHTML.toLowerCase() === "user") {
  adminOption1.style.visibility = "hidden";
  adminOption2.style.visibility = "hidden";
} else if (userTypeElement.innerHTML.toLowerCase() === "admin") {
  loginForm.style.visibility = "hidden";
  adminOption1.style.visibility = "visible";
  adminOption2.style.visibility = "visible";
} else {
  console.log("Invalid User");
}

function switchUser() {
  if (userTypeElement.innerHTML.toLowerCase() === "user") {
    loginForm.style.visibility = "visible";
  } else if (userTypeElement.innerHTML.toLowerCase() === "admin") {
    adminOption1.style.visibility = "hidden";
    adminOption2.style.visibility = "hidden";
    userTypeElement.innerHTML = "User";
  } else {
    console.log("Invalid User");
  }
}

function loginSubmit() {
  var username = document.getElementById("username");
  var password = document.getElementById("password");

  // Perform client-side validation
  if (username.value.trim() === "" || password.value.trim() === "") {
    alert("Please enter both username and password.");
    return;
  }

  // Perform server-side validation using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "login.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        // Successful response from the server
        var response = JSON.parse(xhr.responseText);

        if (response.success) {
          // Redirect to the main page on successful login
          window.location.href = "index.php";
        } else {
          // Display an error message for unsuccessful login
          alert(response.message);
        }
      } else {
        // Handle server errors or network issues
        console.log("Error: " + xhr.status);
      }
    }
  };

  // Send the data to the server
  var data =
    "username=" +
    encodeURIComponent(username.value) +
    "&password=" +
    encodeURIComponent(password.value);
  xhr.send(data);
}
