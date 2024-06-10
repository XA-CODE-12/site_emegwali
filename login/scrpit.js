ocument.getElementById("login-form").addEventListener("submit", function(event) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerHTML = ""; // Efface les messages d'erreur précédents
    
    var username = this.elements["username"].value;
    var password = this.elements["password"].value;

    if (username.trim() === "" || password.trim() === "") {
        event.preventDefault(); // Empêche la soumission du formulaire
        errorMessage.innerHTML = "Veuillez remplir tous les champs.";
    }
});