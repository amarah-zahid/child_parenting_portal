function toggleNavbar() {
    var navbar = document.getElementById("navbar");
    if (navbar.className === "navbar") {
        navbar.className += " responsive";
    } else {
        navbar.className = "navbar";
    }
}

var modal = document.getElementById("mymodal");
var minimizedChat = document.getElementById("minimizedChat");


window.onload = function() {
    modal.style.display = "block"; 
}


function minimizeChat() {
    modal.style.display = "none";  
     minimizedChat.style.display = "block"; 
    document.getElementById("userProblem").value = ""; 
}


document.getElementById("closeBtn").onclick = minimizeChat; 
document.getElementById("minimizeBtn").onclick = minimizeChat; 

function restoreModal() {
    minimizedChat.style.display = "none"; 
    modal.style.display = "block"; 
}


document.getElementById("submitBtn").onclick = function() {
    var problem = document.getElementById("userProblem").value;
    if (problem) {
        alert("Thank you for sharing your problem: " + problem);
        minimizeChat();
    } else {
        alert("Please enter your problem.");
    }
}


window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
} 

window.embeddedChatbotConfig = {
    chatbotId: "ZyjEgD_pNPTf4rEwgbI8x",
    domain: "www.chatbase.co"
}
var script = document.createElement('script');
script.src = "https://www.chatbase.co/embed.min.js";
script.setAttribute('chatbotId', "ZyjEgD_pNPTf4rEwgbI8x");
script.setAttribute('domain', "www.chatbase.co");
script.defer = true;
document.body.appendChild(script);