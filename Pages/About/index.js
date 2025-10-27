function toggleVisibility() {
  const element = document.getElementById("myElement");
  if (element.style.display === "block") {
    element.style.opacity = "0";
    setTimeout(() => element.style.display = "none", 300);
  } else {
    element.style.display = "block";
    element.style.opacity = "0";
    setTimeout(() => element.style.opacity = "1", 10);
  }
}


// Chatbot Script

// Get all required HTML elements
const toggleBtn = document.getElementById("chatbot-toggle");
const chatPopup = document.getElementById("chatbot-popup");
const closeBtn = document.getElementById("chatbot-close");
const sendBtn = document.getElementById("send-btn");
const userInput = document.getElementById("user-input");
const chatBody = document.getElementById("chat-body");
const quickBtns = document.querySelectorAll(".quick-btn");

// Open or close the chat popup when toggle button is clicked
toggleBtn.addEventListener("click", function () {
  // If chat popup is visible, hide it
  if (chatPopup.style.display === "flex") {
    chatPopup.style.display = "none";
  } else {
    // Otherwise, show it
    chatPopup.style.display = "flex";
  }
});

// Close the chat popup when the close button is clicked
closeBtn.addEventListener("click", function () {
  chatPopup.style.display = "none";
});

// Function to add new messages to the chat window
function addMessage(message, sender) {
  // Create a new <div> element for the message
  const msgDiv = document.createElement("div");

  // Add class name based on sender type (user or bot)
  if (sender === "user") {
    msgDiv.classList.add("user-msg");
  } else {
    msgDiv.classList.add("bot-msg");
  }

  // Add the actual message text inside the div
  msgDiv.innerText = message;

  // Append the message div to the chat body
  chatBody.appendChild(msgDiv);

  // Always scroll to the latest message at the bottom
  chatBody.scrollTop = chatBody.scrollHeight;
}

// Function to generate bot replies based on user message
function botReply(message) {
  const lower = message.toLowerCase(); // Convert message to lowercase
  let reply = ""; // Variable to store the reply text

  // Check what the user message contains and set reply accordingly
  if (lower.includes("shipping")) {
    reply = "We ship worldwide! Orders usually arrive within 5–7 days.";
  } else if (lower.includes("return")) {
    reply = "You can return your items within 30 days of purchase.";
  } else if (lower.includes("pride")) {
    reply = "Our Pride Collection celebrates inclusivity and love for all.";
  } else if (lower.includes("sustain")) {
    reply = "We focus on eco-friendly and sustainable products.";
  } else if (lower === "ok") {
    reply = "Thank you for confirming!";
  } else {
    reply = "Sorry, I do not understand your message.";
  }

  // Add the bot reply to the chat window
  addMessage(reply, "bot");
}

// Send user message when the send button is clicked
sendBtn.addEventListener("click", function () {
  const message = userInput.value.trim(); // Get text from input field

  // Only send message if it’s not empty
  if (message !== "") {
    addMessage(message, "user"); // Display user message
    userInput.value = ""; // Clear the input field

    // Show bot reply after a small delay for realism
    setTimeout(function () {
      botReply(message);
    }, 600);
  }
});

// Quick button replies (predefined messages)
quickBtns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    const text = btn.innerText; // Get the text of the clicked button
    addMessage(text, "user"); // Show it as a user message

    // Respond with the bot message after a short delay
    setTimeout(function () {
      botReply(text);
    }, 500);
  });
});
