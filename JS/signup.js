document.addEventListener("DOMContentLoaded", function () {
	let username = document.getElementById("username");
	let form = document.getElementById("form");
	let exists = false;
	let password = document.getElementById("password");
	let passwordConfirm = document.getElementById("confirm_password");
	let email = document.getElementById("email");
	let first_name = document.getElementById("first_name");
	let last_name = document.getElementById("last_name");
	let profilepic = document.getElementById("profile_picture");
	let errormessage = document.querySelector(".error-message");
	let file = true;

	username.addEventListener("input", function () {
		let xhr = new XMLHttpRequest();
		xhr.open("POST", "signup-config.php", true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (xhr.responseText === "exists") {
					console.log("Username already exists.");
					exists = true;
				}
			}
		};
		xhr.send("username=" + encodeURIComponent(username.value));

		if (username.value.length < 6) {
			console.log("Username must be at least 6 characters long.");
			errormessage.innerHTML = "Username must be at least 6 characters long.";
			exists = true;
			return;
		} else if (username.value.length > 20) {
			console.log("Username cannot be longer than 20 characters.");
			errormessage.innerHTML = "Username cannot be longer than 20 characters.";
			exists = true;
			return;
		} else if (username.value.match(/[^a-zA-Z0-9-_]/)) {
			console.log("Username can only contain letters, numbers and _.");
			errormessage.innerHTML =
				"Username can only contain letters, numbers and _.";
			exists = true;
			return;
		} else if (username.value.match(/\s/)) {
			console.log("Username cannot contain spaces.");
			errormessage.innerHTML = "Username cannot contain spaces.";
			exists = true;
			return;
		} else {
			exists = false;
			console.log("Username is valid.");
		}
	});

	password.addEventListener("input", function () {
		let lowerCase = password.value.match(/[a-z]/);
		let upperCase = password.value.match(/[A-Z]/);
		let numbers = password.value.match(/[0-9]/);
		let specialCharacters = password.value.match(
			/[\!\~\@\&\#\$\%\^\&\*\(\)\{\}\?\-\_\+\=]/
		);

		if (password.value.length < 8) {
			console.log("Password must be at least 8 characters long.");
			errormessage.innerHTML = "Password must be at least 8 characters long.";
			exists = true;
			return;
		} else if (password.value.length > 20) {
			console.log("Password cannot be longer than 20 characters.");
			errormessage.innerHTML = "Password cannot be longer than 20 characters.";
			exists = true;
			return;
		} else if (!lowerCase || !upperCase || !numbers || !specialCharacters) {
			console.log(
				"Password must contain at least one lowercase letter, one uppercase letter, one number, and one special character."
			);
			errormessage.innerHTML =
				"Password must contain at least one lowercase letter, one uppercase letter, one number, and one special character.";

			exists = true;
			return;
		} else if (password.value.match(/\s/)) {
			console.log("Password cannot contain spaces.");
			errormessage.innerHTML = "Password cannot contain spaces.";
			exists = true;
			return;
		} else {
			exists = false;
			console.log("Password is valid.");
		}
	});

	passwordConfirm.addEventListener("input", function () {
		if (password.value !== passwordConfirm.value) {
			console.log("Passwords do not match.");
			errormessage.innerHTML = "Passwords do not match.";
			exists = true;
			return;
		} else {
			exists = false;
			console.log("Passwords match.");
		}
	});
	form.addEventListener("submit", function (event) {
		event.preventDefault();
		if (exists) {
			return;
		} else if (username.value === "") {
			alert("Username cannot be empty.");
			return;
		} else if (password.value === "") {
			alert("Password cannot be empty.");
			return;
		} else if (email.value === "") {
			alert("Email cannot be empty.");
			return;
		} else if (first_name.value === "") {
			alert("First name cannot be empty.");
			return;
		} else if (last_name.value === "") {
			alert("Last name cannot be empty.");
			return;
		} else {
			form.submit();
		}
	});
});
