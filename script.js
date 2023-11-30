let userTypeElement = document.getElementById("userType");
let adminOption = document.querySelector(".adminOption");

function switchUser() {
  let loginForm = document.getElementById("login-form");

  if (userTypeElement.innerHTML.toLowerCase() === "user") {
    loginForm.style.visibility = "visible";
    adminOption.style.visibility = "hidden";
  } else if (userTypeElement.innerHTML.toLowerCase() === "admin") {
    loginForm.style.visibility = "hidden";
    adminOption.style.visibility = "visible";
    userTypeElement.innerHTML = "User";
  } else {
    console.log("Invalid User");
  }
}

function loginSubmit(event) {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "taha" && password === "taha") {
    userTypeElement.innerHTML = "Admin";
    adminOption.style.visibility = "visible";
  } else {
    alert("Incorrect username or password. Please try again.");
  }

  event.preventDefault();
  return false;
}
