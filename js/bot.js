// scripts del bot
// scripts.js

function openChat() {
    document.getElementById("chatPopup").style.display = "block";
}

function closeChat() {
    document.getElementById("chatPopup").style.display = "none";
}

function sendMessage() {
    var userInput = document.getElementById("userInput").value;
    if (userInput === "") return;
    displayMessage(userInput, "user-message");
    document.getElementById("userInput").value = "";

    // Simular una respuesta del bot después de 1 segundo
    setTimeout(function() {
        var botResponse = getBotResponse(userInput);
        displayMessage(botResponse, "bot-message");
    }, 1000);
}

function displayMessage(message, className) {
    var chatBody = document.getElementById("chatBody");
    var messageElement = document.createElement("div");
    messageElement.textContent = message;
    messageElement.className = "message " + className;
    chatBody.appendChild(messageElement);
    chatBody.scrollTop = chatBody.scrollHeight;
}

function getBotResponse(userInput) {
    // Aquí puedes agregar lógica para diferentes respuestas
    var responses = {
        "What is your return policy?": "Our return policy is 30 days with a receipt.",
        "How do I track my order?": "You can track your order using the tracking number sent to your email.",
        "Can I purchase items online?": "Yes, all our items are available for online purchase.",
        "Do you offer customer support?": "Yes, we offer 24/7 customer support.",
        "Hola": "¡Hola! ¿Cómo puedo ayudarte hoy?",
        "Ayuda": "Claro, estoy aquí para ayudarte. ¿Qué necesitas saber?"
    };

    return responses[userInput] || "Sorry, I didn't understand that. Can you please rephrase?";
}

function checkEnter(event) {
    if (event.key === "Enter") {
        sendMessage();
        return false;
    }
}

function askQuestion(question) {
    displayMessage(question, "user-message");
    var botResponse = getBotResponse(question);
    setTimeout(function() {
        displayMessage(botResponse, "bot-message");
    }, 1000);
}