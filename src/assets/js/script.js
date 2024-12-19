//  déclaration 
let inscriptionform = document.querySelector("#Modalinscription > div");
let connexionform = document.querySelector("#Modalconnexion > div");

// Cacher le continaire initialement
// document.getElementById("inscricontinaire").toggele
Modalinscription.classList.add("hidden");
Modalconnexion.classList.add("hidden");

// l'inscription 
document.querySelectorAll(".inscription").forEach(element => {
    element.addEventListener("click" , () => {
        Modalinscription.classList.toggle("hidden");
        Modalconnexion.classList.add("hidden");
    });
});

// annuler l'affichage de modal d'inscription
Annuler.addEventListener("click" , () => {
    Modalinscription.classList.toggle("hidden");
});

// la connexion
document.querySelectorAll(".connexion").forEach(element => {
    element.addEventListener("click" , () => {
        Modalconnexion.classList.toggle("hidden");
        Modalinscription.classList.add("hidden");
    });
});

// annulation de l'affichage des form
Modalconnexion.addEventListener("click" , (element) => {
    
    if (!connexionform.contains(element.target))  {
        Modalconnexion.classList.add("hidden");
    }
}); 

Modalinscription.addEventListener("click" , (element) => {
    
    if ((!inscriptionform.contains(element.target)))  {
        Modalinscription.classList.add("hidden");
    }
});

// regex pour le forme de connexion et inscription
//      pour la email 
document.querySelectorAll(".inputemail").forEach(element => {
    element.addEventListener("input" , () => {
        if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3}$/.test(element.value)) {
            element.style.backgroundColor = "rgb(254 202 202)";
        } else {
            element.style.backgroundColor = "rgb(187 247 208)";
        };
        if (element.value == '') {     
            element.style.backgroundColor = "";
        }
    });
});

// pour passeword
document.querySelectorAll(".inputpassword").forEach(element => {
    element.addEventListener("input" , () => {
        if (!/^[a-zA-Z0-9éèêàâùûîïöäüÿç\-\s]{8,}$/.test(element.value)) {
            element.style.backgroundColor = "rgb(254 202 202)";
        } else {
            element.style.backgroundColor = "rgb(187 247 208)";
        };
        if (element.value == '') {     
            element.style.backgroundColor = "";
        };
        if (cofpasswordinscription.value != passwordinscription.value) {
            cofpasswordinscription.style.backgroundColor = "rgb(254 202 202)";
        } else if (cofpasswordinscription.value == '') {     
            cofpasswordinscription.style.backgroundColor = "";
        } else {
            cofpasswordinscription.style.backgroundColor = "rgb(187 247 208)";
        }
    });
});

// confermation de mot de passe
cofpasswordinscription.addEventListener("input" , () => {
        if (cofpasswordinscription.value != passwordinscription.value) {
            cofpasswordinscription.style.backgroundColor = "rgb(254 202 202)";
        } else {
            cofpasswordinscription.style.backgroundColor = "rgb(187 247 208)";
        };
        if (cofpasswordinscription.value == '') {     
            cofpasswordinscription.style.backgroundColor = "";
        }
});

// pour username
username.addEventListener("input" , () => {
    if (!/^[a-zA-Zéèêàâùûîïöäüÿç\-\s]{6,}$/.test(username.value)) {
        username.style.backgroundColor = "rgb(254 202 202)";
    } else {
        username.style.backgroundColor = "rgb(187 247 208)";
    };
    if (username.value == '') {     
        username.style.backgroundColor = "";
    }
});

// pour de téléphone
téléphone.addEventListener("input" , () => {
    if (!/^(05|06|07)[0-9]{8}$/.test(téléphone.value)) {
        téléphone.style.backgroundColor = "rgb(254 202 202)";
    } else {
        téléphone.style.backgroundColor = "rgb(187 247 208)";
    };
    if (téléphone.value == '') {     
        téléphone.style.backgroundColor = "";
    }
});

// image d'user
userimage.addEventListener('input', () =>{
    if (/^(https?:\/\/)?([\w-]+\.)+[a-z]{2,6}\/[^\s]+(\.(jpg|jpeg|png|gif|bmp|webp))$/i.test(userimage.value)) {
        userimage.style.backgroundColor = "rgb(187 247 208)";
    } else if (userimage.value == '') {
        userimage.style.backgroundColor = "";
    } else {
        userimage.style.backgroundColor = "rgb(254 202 202)";
    }
});
