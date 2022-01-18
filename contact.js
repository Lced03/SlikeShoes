function validate() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");

    error_message.style.padding = "10px";

    var text;
    if (name.length < 2) {
        text = "veuillez saisir un nom valide";
        error_message.innerHTML = text;
        return false;
    }
    if (isNaN(phone) || phone.length != 10) {
        text = "veuillez saisir un numéro de téléphone valide";
        error_message.innerHTML = text;
        return false;
    }
    if (email.indexOf("@") == -1 || email.length < 6) {
        text = "veuillez saisir votre mail";
        error_message.innerHTML = text;
        return false;
    }
    if (message.length <= 30) {
        text = "Veuillez saisir plus de 30 caractères";
        error_message.innerHTML = text;
        return false;
    }
    alert("Votre formulaire à été envoyée avec succès");
    return true;
}