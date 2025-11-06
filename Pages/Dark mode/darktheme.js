// Create button dynamically
const toggleButton = document.createElement("img");
toggleButton.classList.add("theme-toggle");

// Set initial image (light mode button)
toggleButton.src = "../../Fontsandimages/Theme/toggle-moon.png";
document.body.appendChild(toggleButton);

// load saved theme
const savedTheme = localStorage.getItem("theme");
if (savedTheme === "dark") {
  document.body.classList.add("dark-mode");
  toggleButton.src = "lightmode";
}

// Toggle theme + image on click
toggleButton.addEventListener("click", () => {
  const isDarkMode = document.body.classList.toggle("dark-mode");
  localStorage.setItem("theme", isDarkMode ? "dark" : "light");

  toggleButton.src = isDarkMode
    ? "lightmode"
    : "darkmode";
});