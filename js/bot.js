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
        "¿Cuáles son los principales lugares turísticos para visitar en Tijuana?": "Algunos de los lugares turísticos más destacados de Tijuana incluyen la Avenida Revolución, el Mercado Hidalgo, el Centro Cultural Tijuana (CECUT), la Playa de Tijuana y el Parque Morelos.",
        "¿Qué actividades recreativas puedo hacer en Tijuana durante el fin de semana?": "Durante el fin de semana en Tijuana, puedes disfrutar de actividades como visitas a museos, recorridos gastronómicos, tours por la ciudad, degustaciones de vino en el Valle de Guadalupe, y eventos culturales y artísticos.",
        "¿Cuál es la mejor manera de llegar a la frontera entre Tijuana y San Diego?": "La forma más común de llegar a la frontera entre Tijuana y San Diego es a través del cruce peatonal de San Ysidro, que conecta directamente con la estación de trolley de San Diego. También puedes llegar en automóvil a través de la autopista 5.",
        "¿Cuáles son los restaurantes más populares de Tijuana y qué tipo de comida ofrecen?": "Algunos de los restaurantes más populares de Tijuana ofrecen una amplia variedad de cocina, incluyendo mariscos frescos, tacos de carne asada, comida gourmet mexicana e internacional. Algunos lugares destacados son el restaurante Caesar's, la taquería Tacos El Franc, y el restaurante Mision 19.",
        "¿Cuál es la mejor época del año para visitar Tijuana en términos de clima y eventos?": "La mejor época para visitar Tijuana es durante la primavera y el verano, cuando el clima es más cálido y hay una mayor cantidad de eventos culturales y festivales en la ciudad.",
        "¿Cuáles son las opciones de transporte público disponibles en Tijuana?": "Tijuana cuenta con una red de transporte público que incluye autobuses urbanos, taxis, y servicios de transporte por aplicación como Uber y Didi. También puedes utilizar el trolley para viajar entre Tijuana y San Diego.",
        "¿Dónde puedo obtener información sobre la historia y cultura de Tijuana?": "Puedes obtener información sobre la historia y cultura de Tijuana en museos como el Museo de Historia de Tijuana y el CECUT, así como en bibliotecas y centros culturales de la ciudad.",
        "¿Qué medidas de seguridad debo tomar al visitar Tijuana como turista?": "Al visitar Tijuana, es importante tomar precauciones básicas de seguridad como evitar áreas poco iluminadas por la noche, mantener tus pertenencias seguras, y seguir las recomendaciones de las autoridades locales. También es recomendable mantenerse informado sobre la situación de seguridad en la ciudad antes de viajar.",
        "Hola": "¡Hola! ¿Cómo puedo ayudarte hoy?",
        "Ayuda": "Claro, estoy aquí para ayudarte. ¿Qué necesitas saber?"
    };

    return responses[userInput] || "Lo siento, no entendí eso. ¿Puedes reformularlo?";
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