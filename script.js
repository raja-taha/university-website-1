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

  if (username.value === "taha" && password.value === "taha") {
    loginForm.style.visibility = "hidden";
    username.value = "";
    password.value = "";
    userTypeElement.innerHTML = "Admin";
    adminOption1.style.visibility = "visible";
    adminOption2.style.visibility = "visible";
  } else {
    alert("Incorrect username or password. Please try again.");
  }
}
