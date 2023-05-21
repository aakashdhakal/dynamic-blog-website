let password = document.getElementById("password");
let username = document.getElementById("username");
let form = document.querySelector("form");
let errortext = document.querySelector(".error-text");
let errormessage = document.querySelector(".error-message");
let showPasswordBtn = document.getElementById("show-password");
let icon = showPasswordBtn.querySelector("i");
const rememberMeCheckbox = document.getElementById("remember-me");
let backBtn = document.getElementById("backBtn");

backBtn.addEventListener("click", function () {
	window.history.back();
});

showPasswordBtn.addEventListener("click", function () {
	if (password.type === "password") {
		password.type = "text";
		icon.classList.add("fa-eye");
		icon.classList.remove("fa-eye-slash");
	} else {
		password.type = "password";
		icon.classList.add("fa-eye-slash");
		icon.classList.remove("fa-eye");
	}
});

form.addEventListener("submit", function (e) {
	errormessage.style.visibility = "hidden";
	e.preventDefault();
	if (username.value === "" || password.value === "") {
		errormessage.style.visibility = "visible";
		errortext.innerHTML = "Username or Password field is empty";
		return;
	} else {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "login-config.php", true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (xhr.responseText === "success") {
					window.location.href = "index.php";
				} else if (xhr.responseText === "wrong") {
					errormessage.style.visibility = "visible";
					errortext.innerHTML = "Username or Password is incorrect";
					return;
				}
			}
		};
		xhr.send(
			"username=" +
				encodeURIComponent(username.value) +
				"&password=" +
				encodeURIComponent(password.value)
		);
	}
});
