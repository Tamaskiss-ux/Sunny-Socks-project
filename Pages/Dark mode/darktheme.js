// Create button dynamically if not already in HTML
const toggleButton = document.createElement("button");
toggleButton.classList.add("theme-toggle");
toggleButton.textContent = "🌙";
document.body.appendChild(toggleButton);

// Apply saved theme preference (from previous visits)
const savedTheme = localStorage.getItem("theme");
if (savedTheme === "dark") {
  document.body.classList.add("dark-mode");
  toggleButton.textContent = "☀️";
}

// Toggle theme on button click
toggleButton.addEventListener("click", () => {
  const isDarkMode = document.body.classList.toggle("dark-mode");
  localStorage.setItem("theme", isDarkMode ? "dark" : "light");
  toggleButton.textContent = isDarkMode ? "☀️" : "🌙";
});