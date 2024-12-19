//  déclaration 
let inscriptionform = document.querySelector("#Modalinscription > div");
let connexionform = document.querySelector("#Modalconnexion > div");

// Cacher le continaire initialement
// document.getElementById("inscricontinaire").toggele
Modalinscription.classList.add("hidden");
Modalconnexion.classList.add("hidden");

// l'inscription 
document.querySelectorAll(".inscription").forEach(element => {
    // InputInisial();
    element.addEventListener("click" , () => {
        Modalinscription.classList.toggle("hidden");
        Modalconnexion.classList.add("hidden");
    });
});

// annuler l'affichage de modal d'inscription
Annuler.addEventListener("click" , () => {
    // InputInisial();
    Modalinscription.classList.toggle("hidden");
});

// la connexion
document.querySelectorAll(".connexion").forEach(element => {
    // InputInisial();
    element.addEventListener("click" , () => {
        Modalconnexion.classList.toggle("hidden");
        Modalinscription.classList.add("hidden");
    });
});

// annulation de l'affichage des form
Modalconnexion.addEventListener("click" , (element) => {
    
    // InputInisial();
    if (!connexionform.contains(element.target))  {
        Modalconnexion.classList.add("hidden");
    }
}); 

Modalinscription.addEventListener("click" , (element) => {
    
    // InputInisial();
    if ((!inscriptionform.contains(element.target)))  {
        Modalinscription.classList.add("hidden");
    };
});

let validationconne = false;
let validationinsert = false;

// regex pour le forme de connexion et inscription
//      pour la email 
document.querySelectorAll(".inputemail").forEach(element => {
    element.addEventListener("input" , () => {
        if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3}$/.test(element.value)) {
            element.style.backgroundColor = "rgb(254 202 202)";
            validationconne = false;
            validationinsert = false;
        } else {
            element.style.backgroundColor = "rgb(187 247 208)";
            validationconne = true;
            validationinsert = true;
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
            validationconne = false;
            validationinsert = false;
        } else {
            element.style.backgroundColor = "rgb(187 247 208)";
            validationconne = true;
            validationinsert = true;
        };
        if (element.value == '') {     
            element.style.backgroundColor = "";
        };
        if (cofpasswordinscription.value != passwordinscription.value) {
            cofpasswordinscription.style.backgroundColor = "rgb(254 202 202)";
            validationconne = false;
            validationinsert = false;
        } else if (cofpasswordinscription.value == '') {     
            cofpasswordinscription.style.backgroundColor = "";
        } else {
            cofpasswordinscription.style.backgroundColor = "rgb(187 247 208)";
            validationconne = true;
            validationinsert = true;
        }
    });
});

// confermation de mot de passe
cofpasswordinscription.addEventListener("input" , () => {
        if (cofpasswordinscription.value != passwordinscription.value) {
            cofpasswordinscription.style.backgroundColor = "rgb(254 202 202)";
            validationconne = false;
            validationinsert = false;
        } else {
            cofpasswordinscription.style.backgroundColor = "rgb(187 247 208)";
            validationconne = true;
            validationinsert = true;
        };
        if (cofpasswordinscription.value == '') {     
            cofpasswordinscription.style.backgroundColor = "";
        }
});

// pour username
username.addEventListener("input" , () => {
    if (!/^[a-zA-Zéèêàâùûîïöäüÿç\-\s]{6,}$/.test(username.value)) {
        username.style.backgroundColor = "rgb(254 202 202)";
        validationconne = false;
        validationinsert = false;
    } else {
        username.style.backgroundColor = "rgb(187 247 208)";
        validationconne = true;
        validationinsert = true;
    };
    if (username.value == '') {     
        username.style.backgroundColor = "";
    }
});

// pour de téléphone
téléphone.addEventListener("input" , () => {
    if (!/^(05|06|07)[0-9]{8}$/.test(téléphone.value)) {
        téléphone.style.backgroundColor = "rgb(254 202 202)";
        validationconne = false;
        validationinsert = false;
    } else {
        téléphone.style.backgroundColor = "rgb(187 247 208)";
        validationconne = true;
        validationinsert = true;
    };
    if (téléphone.value == '') {     
        téléphone.style.backgroundColor = "";
    }
});

// image d'user
userimage.addEventListener('input', () =>{
    if (/^(https?:\/\/)?([\w-]+\.)+[a-z]{2,6}\/[^\s]+(\.(jpg|jpeg|png|gif|bmp|webp))$/i.test(userimage.value)) {
        userimage.style.backgroundColor = "rgb(187 247 208)";
        validationconne = false;
        validationinsert = false;
    } else if (userimage.value == '') {
        userimage.style.backgroundColor = "";
    } else {
        userimage.style.backgroundColor = "rgb(254 202 202)";
        validationconne = true;
        validationinsert = true;
    }
});

// confermer l'inscription
confermeinser.addEventListener("click" , () => {
    document.querySelectorAll("#Modalinscription form input").forEach(element => {
        if (element.value == '') {
            validationinsert = false;
        };
    });

});

// confermer la connexion
document.querySelector("#Modalconnexion form").addEventListener("submit" , (ELEMENT) => {
    document.querySelectorAll("#Modalconnexion form input").forEach(element => {
        if (element.value == '') {
            validationconne = false;
            element.style.backgroundColor = "rgb(254 202 202)";
        };
    });
    if (validationconne == false) {
        console.log(confermeconne);
        ELEMENT.preventDefault();
    };
});

// confermer l'inscription
document.querySelector("#Modalinscription form").addEventListener("submit" , (ELEMENT) => {
    document.querySelectorAll("#Modalinscription form input").forEach(element => {
        if (element.value == '') {
            element.style.backgroundColor = "rgb(254 202 202)";
            validationinsert = false;
        };
    });
    if (validationinsert == false) {
        ELEMENT.preventDefault();
    };
});

// // initialiser valeur des inputs
// function InputInisial() {
//     console.log('tru1');
    
//     document.querySelectorAll(`#Modalinscription from input`).forEach(ele => {
//         ele.value = '';
//     });
//     document.querySelectorAll(`#Modalconnexion from input`).forEach(ele => {
//         ele.value = '';
//     });
// };
