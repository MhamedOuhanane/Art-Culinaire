// Cacher le continaire initialement
// document.getElementById("inscricontinaire").toggele
Menuscontinaire.classList.add("hidden");
Réservation.classList.add("hidden");

// affiche le continaire des chefs
Chefsbtn.addEventListener('click' , () => {
    Chefscontinaire.classList.remove("hidden");
    Menuscontinaire.classList.add("hidden");
    Reservecontinaire.classList.add("hidden");
});


// affiche le continaire des chefs
Menubtn.addEventListener('click' , () => {
    Chefscontinaire.classList.add("hidden");
    Menuscontinaire.classList.remove("hidden");
    Reservecontinaire.classList.add("hidden");
});


// affiche le continaire des chefs
Reservebtn.addEventListener('click' , () => {
    Chefscontinaire.classList.add("hidden");
    Menuscontinaire.classList.add("hidden");
    Reservecontinaire.classList.remove("hidden");
});
