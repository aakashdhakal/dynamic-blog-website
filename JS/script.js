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
