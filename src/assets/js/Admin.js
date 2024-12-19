// cacher la modale Ajouter un Plat initialement
AjouterPlatModal.classList.add("hidden");

// Ouvrir la modale lors du clic sur "Ajouter un Plat"
document.getElementById("AjouterPlatBtn").addEventListener("click", function() {
    AjouterPlatModal.classList.remove("hidden");
});

// Fermer la modale lors du clic sur "Annuler"
document.getElementById("closeModalBtn").addEventListener("click", function() {
    AjouterPlatModal.classList.add("hidden");
});

// Ajouter un plat au menu et fermer la modale après l'ajout
document.getElementById("addPlatForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    // Récupérer les données du formulaire
    const platName = document.getElementById("platName").value;
    const platDescription = document.getElementById("platDescription").value;
    const platPrice = document.getElementById("platPrice").value;
    const platImage = document.getElementById("platImage").value;

    // Créer un nouvel élément pour le plat
    const newPlat = document.createElement("div");
    newPlat.classList.add("relative", "sous-Menu", "w-[12rem]", "h-[18rem]", "md:w-[17rem]", "md:h-[24rem]", "flex", "flex-col", "justify-center", "items-center", "px-[0.5%]", "hover:scale-[1.01]");

    // Ajout du contenu HTML pour le plat
    newPlat.innerHTML = `
        <span class="absolute top-[8%] left-[36%] text-sm md:text-lg font-bold">${platName}</span>
        <div class="ContinairePlats absolute left-[6.1%] w-[87%] md:w-[80%] h-[63%] flex flex-col items-center gap-y-[2%] overflow-y-auto py-[3.5%]">
            <div class="plat bg-white bg-opacity-70 w-full h-[4.5rem] md:h-[5.5rem] rounded-md flex gap-y-1 hover:scale-[1.01]">
                <div class="w-[40%] flex place-content-center">
                    <img class="h-[100%]" src="${URL.createObjectURL(platImage)}" alt="Plat Image">
                </div>
                <div class="w-[60%] py-[3%] justify-center text-black">
                    <span class="text-sm font-bold md:text-lg">${platName}</span>
                    <p class="text-[0.3rem] md:text-[0.4rem]">${platDescription}</p>
                </div>
            </div>
        </div>
        <div class="absolute w-full max-h-[8%] flex justify-around items-center bottom-[10%] px-[15%]">
            <span class="text-sm md:text-lg font-bold mb-[3%]">${platPrice}$</span>
            <button id="réserve" class="w-[20%] h-full self-end">
                <img class="w-full" src="../assets/images/plus1.png" alt="icone de commande">
            </button>
        </div>
    `;

    // Ajouter le plat au continaire de menu
    document.querySelector("#Menuscontinaire .w-full .flex").appendChild(newPlat);

    // Fermer la modale après l'ajout
    AjouterPlatModal.classList.add("hidden");

    // Réinitialiser le formulaire
    document.getElementById("addPlatForm").reset();
});