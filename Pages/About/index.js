var openButton = document.getElementById("chatbot-toggle");
var closeButton = document.getElementById("chatbot-close");
var chatPopup = document.getElementById("chatbot-popup");
var sendButton = document.getElementById("send-btn");
var userInput = document.getElementById("user-input");
var chatBody = document.getElementById("chat-body");
openButton.addEventListener("click", function () {
    chatPopup.style.display = "flex";
    userInput.focus();
});
closeButton.addEventListener("click", function () {
    chatPopup.style.display = "none";
});

function sendMessage() {
    var text = userInput.value;
    if (text.trim() === "") {
        return;
    }
    var userBubble = document.createElement("div");
    userBubble.className = "user-msg";
    userBubble.innerText = text;
    chatBody.appendChild(userBubble);
    userInput.value = "";
    var botBubble = document.createElement("div");
    botBubble.className = "bot-msg";
    botBubble.innerText = "Thanks for your message!";
    chatBody.appendChild(botBubble);

    chatBody.scrollTop = chatBody.scrollHeight;
}
sendButton.addEventListener("click", function () {
    sendMessage();
});
userInput.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});
console.log("Chatbot JavaScript loaded!");
