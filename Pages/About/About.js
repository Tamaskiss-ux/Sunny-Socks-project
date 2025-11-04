const toggleBtn = document.getElementById("chatbot-toggle");
const chatPopup = document.getElementById("chatbot-popup");
const closeBtn = document.getElementById("chatbot-close");
const sendBtn = document.getElementById("send-btn");
const userInput = document.getElementById("user-input");
const chatBody = document.getElementById("chat-body");
const quickBtns = document.querySelectorAll(".quick-btn");

//   toggle open/close using class
toggleBtn.addEventListener("click", () => {
  chatPopup.classList.toggle("active");
});

closeBtn.addEventListener("click", () => {
  chatPopup.classList.remove("active");
});

//   Add Message Function
function addMessage(message, sender) {
  const msgDiv = document.createElement("div");
  msgDiv.classList.add(sender === "user" ? "user-msg" : "bot-msg");
  msgDiv.innerText = message;
  chatBody.appendChild(msgDiv);
  chatBody.scrollTop = chatBody.scrollHeight;
  return msgDiv;
}

//   Typing Effect + Bot Reply Function
function showTypingEffect(message) {
  const typingMsg = addMessage("Typing...", "bot");
  setTimeout(() => {
    typingMsg.remove();
    botReply(message);
  }, 1000); // reduced delay for faster response
}

//   Bot Reply Logic
function botReply(message) {
  const lower = message.toLowerCase();
  let reply = "";

  // --- basic responses ---
  if (lower.includes("hi") || lower.includes("hello") || lower.includes("hey"))
    reply = "Hello! 👋 How can I help you today?";
  else if (lower.includes("help"))
    reply = "Sure! You can ask about our shipping, returns, or products.";
  else if (lower.includes("about"))
    reply = "We’re an online store focused on quality and customer satisfaction.";
  else if (lower.includes("contact"))
    reply = "You can reach us via our contact page or email support@example.com.";
  else if (lower.includes("thank"))
    reply = "You're very welcome! 😊";
  else if (lower.includes("bye"))
    reply = "Goodbye! Have a wonderful day 🌸";

  // --- existing keyword replies ---
  else if (lower.includes("shipping"))
    reply = "We ship worldwide! Orders usually arrive within 5–7 days.";
  else if (lower.includes("return"))
    reply = "You can return your items within 30 days of purchase.";
  else if (lower.includes("pride"))
    reply = "Our Pride Collection celebrates inclusivity and love for all.";
  else if (lower.includes("sustain"))
    reply = "We focus on eco-friendly and sustainable products.";
  else if (lower === "ok")
    reply = "Thank you for confirming!";
  else
    reply = "Sorry, I didn’t quite understand that. Could you please rephrase?";

  addMessage(reply, "bot");
}

//   Send Message
sendBtn.addEventListener("click", () => {
  const message = userInput.value.trim();
  if (message) {
    addMessage(message, "user");
    userInput.value = "";
    showTypingEffect(message);
  }
});

//   Allow Enter key to send
userInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    e.preventDefault();
    sendBtn.click();
  }
});

//   Quick Question Clicks
quickBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    const text = btn.innerText;
    addMessage(text, "user");
    showTypingEffect(text);
  });
});
