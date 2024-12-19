<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="shortcut icon"
        href="../assets/images/logo-Art1.png"
        type="image/x-icon"
    >
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/output.css">
    <title>Art Culinaire</title>
</head>
<body>
    <!-- header -->
    <header class="fixed z-30 bg-gray-700 bg-opacity-80 w-full h-[4.5rem] flex justify-between items-center px-6">
        <a class="h-full cursor-pointer hover:scale-[1.03]" href="../index.php">
            <img class="h-full md:hidden" src="../assets/images/Art Culinaire logo-Mobile.png" alt="">
            <img class="h-full hidden md:block" src="../assets/images/Art Culinaire logo-Descktop.png" alt="">
        </a>

        <div class="w-auto h-[100%] flex justify-evenly gap-4 items-center">
            <img class="h-[50%] rounded-full hover:scale-105" src="../assets/images/admin-image.jpg" alt="Image d'user">
            <button class="h-[35%] hover:scale-110">
                <img class="h-full" src="../assets/images/sortie.png" alt="icone de sortie">
            </button>
        </div>
    </header>
    <section class="Accueil w-full h-full md:h-[100vh] bg-slate-500 pt-[4.5rem] flex flex-wrap">
        <!-- liste -->
        <nav class="bg-slate-200 w-full h-auto md:w-[25%] md:h-full flex flex-col items-center ">
            <a class="w-[50%] md:w-[80%]">
                <button id="Chefsbtn" class="bg-none w-full  h-[2.6rem] border-solid border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/logo-chefs.png" alt="logo des Chefs">
                    <span class="hover:scale-110">Chefs</span>
                </button>  
            </a>
            
            <a class="w-[50%] md:w-[80%]">
                <button id="Menubtn" class="bg-none w-full h-[2.6rem] border-solid border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/logo-menu.png" alt="logo des Menus">
                    <span class="hover:scale-110">Menus</span>
                </button>
            </a>
            
            <a class="w-[50%] md:w-[80%]">
                <button id="inscription" class="bg-none w-full h-[2.5rem] border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/Réservation-logo.png" alt="logo des user">
                    <span class="hover:scale-110">Clients inscrits</span>
                </button>
            </a>
        </nav>

        <!-- continaire des chefs -->
        <div class="Chefscontinaire w-full h-full md:w-[75%] flex flex-wrap justify-around p-[1vw] gap-y-[1.5vw] text-white overflow-y-auto hidden">
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
                <button id="Licenciement" class="text-orange-300 text-sm hover:scale-[1.01]">Licenciement</button>
            </div>
        </div>

        <!-- continaire des Menus -->
        <div id="Menuscontinaire " class="w-full h-[70vh] md:w-[75%] md:h-full flex flex-col items-center  text-white">
            <div class="w-[85%] h-[2.5rem] flex justify-center md:justify-end items-center">
                <button id="AjouterMenu" class="hover:scale-[1.01] hover:text-blue-200">Ajouter un Menu</button>
            </div>
            <div class="w-full h-full flex flex-wrap justify-center p-[1vw] overflow-y-auto">
                <!-- Menu -->
                <div class="relative sous-Menu w-[12rem] h-[18rem] md:w-[17rem] md:h-[24rem] flex flex-col justify-center items-center px-[0.5%] hover:scale-[1.01]">
                    <span class="absolute top-[8%] left-[36%] text-sm md:text-lg font-bold">Menu 1</span>
                    
                    <!-- continaire des Plats -->
                    <div class="ContinairePlats absolute left-[6.1%] w-[87%] md:w-[80%] h-[63%] flex flex-col items-center gap-y-[2%] overflow-y-auto py-[3.5%]">
                        <div class="plat bg-white bg-opacity-70 w-full h-[4.5rem] md:h-[5.5rem] rounded-md flex gap-y-1 hover:scale-[1.01]">
                            <div class="w-[40%] flex place-content-center">
                                <img class="h-[100%] col-span-1" src="../assets/images/deser.jpg" alt="">
                            </div>
                            <div class="w-[60%] py-[3%] justify-center  text-black">
                                <span class="text-sm font-bold md:text-lg">Deser</span>
                                <p class="text-[0.3rem] md:text-[0.4rem]">Un désert est un endroit très sec avec peu de pluie et peu de vie. Il y a souvent du sable ou des roches.</p>
                            </div>
                            <button id="platsuppr" class="absolute text-xl text-red-900 top-2 right-1">X</button>
                        </div>
                    </div>
                        
                    <div class="absolute w-full max-h-[8%] flex justify-around items-center bottom-[10%] px-[15%]">
                        <span class="text-sm md:text-lg font-bold mb-[3%]">20.00$</span>
                        <button id="AjouterPlatBtn" class="w-[20%] h-full self-end">
                            <img class="w-full" src="../assets/images/plus1.png" alt="icone de commande">
                        </button>
                    </div>
                </div>            
            </div>
        </div>

        <!-- Modal pour ajouter un Plat -->
        <div id="AjouterPlatModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-50 hidden">
            <div class="bg-white w-[80%] md:w-[30%] p-6 rounded-lg shadow-lg">
                <h2 class="text-lg font-bold mb-4">Ajouter un Plat</h2>
                <form id="addPlatForm">
                    <div class="mb-4">
                        <label for="platName" class="block text-sm font-semibold">Nom du Plat</label>
                        <input type="text" id="platName" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Nom du Plat" required>
                    </div>
                    <div class="mb-4">
                        <label for="platDescription" class="block text-sm font-semibold">Description</label>
                        <textarea id="platDescription" class="w-full p-2 border border-gray-300 rounded mt-1" rows="3" placeholder="Description du Plat" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="platPrice" class="block text-sm font-semibold">Prix</label>
                        <input type="number" id="platPrice" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Prix" required>
                    </div>
                    <div class="mb-4">
                        <label for="platImage" class="block text-sm font-semibold">Image du Plat</label>
                        <input type="text" id="platImage" class="w-full p-2 border border-gray-300 rounded mt-1"required>
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="closeModalBtn" class="text-red-500 hover:text-red-700">Annuler</button>
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Ajouter Plat</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- continaire des inscription -->
        <div id="inscricontinaire" class="w-full h-full md:w-[75%] flex flex-wrap justify-around p-[1vw] gap-y-[1.5vw] text-white overflow-y-auto hidden">
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
                <button id="suppressioninscri" class="text-orange-300 text-sm hover:scale-[1.01]">Supprime</button>
            </div>
        </div>

    </section>

    <!-- <script>
        // Ouvrir la modale lors du clic sur "Ajouter un Plat"
        document.getElementById("AjouterPlatBtn").addEventListener("click", function() {
            document.getElementById("AjouterPlatModal").classList.remove("hidden");
        });
    
        // Fermer la modale lors du clic sur "Annuler"
        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("AjouterPlatModal").classList.add("hidden");
        });
    
        // Ajouter un plat au menu et fermer la modale après l'ajout
        document.getElementById("addPlatForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche le rechargement de la page
    
            // Récupérer les données du formulaire
            const platName = document.getElementById("platName").value;
            const platDescription = document.getElementById("platDescription").value;
            const platPrice = document.getElementById("platPrice").value;
            const platImage = document.getElementById("platImage").files[0];
    
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
    
            // Ajouter le plat au conteneur de menu
            document.querySelector("#Menuscontinaire .w-full .flex").appendChild(newPlat);
    
            // Fermer la modale après l'ajout
            document.getElementById("AjouterPlatModal").classList.add("hidden");
    
            // Réinitialiser le formulaire
            document.getElementById("addPlatForm").reset();
        });
    </script> -->
</body>
</html>