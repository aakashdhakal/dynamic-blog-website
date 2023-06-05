/*  Dark Mode Toggle Code */

const icons = document.querySelector(".switch");
toggle = document.querySelector("#dark-mode-toggle");

toggle.addEventListener("change", () => {
	icons.classList.add("rotate");
	setTimeout(() => {
		icons.classList.remove("rotate");
	}, 1000);
});

const darkModeToggle = document.getElementById("dark-mode-toggle");
const bodyElement = document.getElementsByTagName("body")[0];
const localStorageKey = "theme";

// Set the initial theme based on the user's preference
const initialTheme = localStorage.getItem(localStorageKey);
if (initialTheme) {
	bodyElement.classList.add(initialTheme);
	if (initialTheme === "dark") {
		darkModeToggle.checked = true;
	}
} else if (
	window.matchMedia &&
	window.matchMedia("(prefers-color-scheme: dark)").matches
) {
	bodyElement.classList.add("dark");
	darkModeToggle.checked = true;
}

// Toggle the theme and save the user's preference to localStorage
darkModeToggle.addEventListener("change", () => {
	if (darkModeToggle.checked) {
		bodyElement.classList.add("dark");
		localStorage.setItem(localStorageKey, "dark");
	} else {
		bodyElement.classList.remove("dark");
		localStorage.setItem(localStorageKey, "light");
	}
});

/*  ---------------------------------------------------------------------------- */

/*  Scroll To Top Code */

let scrollToTop = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", () => {
	if (window.pageYOffset > 100) {
		scrollToTop.style.opacity = "1";
		scrollToTop.style.cursor = "pointer";
	} else {
		scrollToTop.style.opacity = "0";
		scrollToTop.style.cursor = "default";
	}
});

scrollToTop.addEventListener("click", () => {
	window.scrollTo({
		top: 0,
		left: 0,
		behavior: "smooth",
	});
});

/*  ---------------------------------------------------------------------------- */

/*  Followers Code */
let followBtn = document.querySelectorAll(".followBtn");

followBtn.forEach(function (button) {
	button.addEventListener("click", () => {
		let author = button.getAttribute("data-author");
		let action = button.classList.contains("not-followed")
			? "follow"
			: "unfollow";

		var xhr = new XMLHttpRequest();
		xhr.open("POST", "follow-config.php", true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				if (xhr.responseText === "success") {
					if (action === "follow") {
						button.classList.remove("not-followed");
						button.classList.add("followed");
						button.parentNode
							.querySelector(".followerStatus")
							.classList.remove("fa-user-plus");
						button.parentNode
							.querySelector(".followerStatus")
							.classList.add("fa-user-check");
					} else if (action === "unfollow") {
						button.classList.remove("followed");
						button.classList.add("not-followed");
						button.parentNode
							.querySelector(".followerStatus")
							.classList.remove("fa-user-check");
						button.parentNode
							.querySelector(".followerStatus")
							.classList.add("fa-user-plus");
					}
				} else if (xhr.responseText === "login") {
					alert("Please login to perform this action");
				} else {
					alert("Something went wrong: " + xhr.responseText);
				}
			}
		};
		xhr.send("author=" + author + "&action=" + action);
	});
});

/*  ---------------------------------------------------------------------------- */

/*  Hamburger Menu Code */
var nav = document.querySelector(".nav-links");
document.addEventListener("DOMContentLoaded", function () {
	var hamburgerMenu = document.querySelector(".hamburger-menu");
	var bars = document.querySelectorAll(".bar");

	hamburgerMenu.addEventListener("click", function () {
		// Toggle "active" class on hamburger menu
		hamburgerMenu.classList.toggle("active");

		// Toggle "open" class on bars to animate them
		bars[0].classList.toggle("active-bar-1");
		bars[1].classList.toggle("active-bar-2");
		bars[2].classList.toggle("active-bar-3");

		nav.classList.toggle("nav-extend");
		if (nav.classList.contains("nav-extend")) {
			document.body.style.overflow = "hidden";
		} else {
			document.body.style.overflow = "auto";
		}
	});
});

/*  ---------------------------------------------------------------------------- */

/*  Sub menu Code */
let menu = document.getElementById("subMenu");
let img = document.getElementById("userProfile");
img.addEventListener("click", () => {
	menu.classList.toggle("extend");
});
document.addEventListener("click", function (event) {
	if (event.target.closest("#subMenu") || event.target.closest("#userProfile"))
		return;
	menu.classList.remove("extend");
});
/*  ---------------------------------------------------------------------------- */
