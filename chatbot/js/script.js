const toggle = document.querySelector('.chatbot-toggle');
  const box = document.querySelector('.chatbot-box');
  const closeBtn = document.querySelector('.chatbot-close');
  const sendBtn = document.getElementById('send-btn');
  const input = document.getElementById('user-input');
  const messages = document.getElementById('chatbot-messages');

  const replies = {
    "return": "You can return your product within 30 days of purchase.",
    "refund": "Refunds are processed within 5 business days.",
    "defect": "If your item is defective, please contact support immediately.",
    "broken": "Sorry about that! Please send us a photo of the broken item.",
    "shipping": "Standard shipping takes 3-5 business days.",
    "hello": "Hi there! How can I assist you today?",
    "hi": "Hello 👋 How can I help you?",
    "price": "Our prices vary depending on the product category.",
    "order": "You can check your order status in your account dashboard.",
    "ok": "You're welcome 😊 Glad I could help!",
    "okay": "You're welcome 😊 Glad I could help!",
    "thanks": "You're welcome 😊",
    "thank you": "You're welcome 😊"
  };

  // 🔹 Chat toggle button click
  toggle.addEventListener('click', () => {
    box.style.display = 'flex';
    toggle.style.display = 'none';

    // Greeting message only shown when user opens chatbot manually
    if (messages.childElementCount === 0) {
      appendMessage("Hi 👋 I'm here to help! How can I assist you?", 'bot-msg');
    }
  });

  // 🔹 Close chatbot
  closeBtn.addEventListener('click', () => {
    box.style.display = 'none';
    toggle.style.display = 'flex';
  });
  
  // 🔹 Send message
  sendBtn.addEventListener('click', sendMessage);
  input.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') sendMessage();
  });

  function sendMessage() {
    const userText = input.value.trim();
    if (!userText) return;

    appendMessage(userText, 'user-msg');
    input.value = '';

    showTyping();

    setTimeout(() => {
      hideTyping();

      let reply = "Sorry, I didn’t understand that.";
      const userLower = userText.toLowerCase();

      for (let keyword in replies) {
        if (userLower.includes(keyword)) {
          reply = replies[keyword];
          break;
        }
      }

      appendMessage(reply, 'bot-msg');
    }, 1500);
  }

  function appendMessage(text, className) {
    const msg = document.createElement('div');
    msg.classList.add(className);
    msg.textContent = text;
    messages.appendChild(msg);
    messages.scrollTop = messages.scrollHeight;
  }

  function showTyping() {
    const typing = document.createElement('div');
    typing.classList.add('typing');
    typing.id = 'typing';
    typing.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
    messages.appendChild(typing);
    messages.scrollTop = messages.scrollHeight;
  }

  function hideTyping() {
    const typing = document.getElementById('typing');
    if (typing) typing.remove();
  }