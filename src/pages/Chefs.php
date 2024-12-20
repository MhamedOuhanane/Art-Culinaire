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
            <button class="h-[50%]">
                <img class="h-full rounded-full hover:scale-105" src="../assets/images/admin-image.jpg" alt="Image d'user">
            </button>
            <button class="h-[35%] hover:scale-110">
                <img class="h-full" src="../assets/images/sortie.png" alt="icone de sortie">
            </button>
        </div>
    </header>

    <section class="Accueil w-full h-full md:h-[100vh] bg-slate-500 pt-[4.5rem] flex flex-wrap">
        <!-- liste -->
        <nav class="bg-slate-200 w-full h-auto md:w-[25%] md:h-full flex flex-col items-center py-2">
            
            <a class="w-[50%] md:w-[80%]">
                <button id="Menubtn" class="bg-none w-full h-[2.6rem] border-solid border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/logo-menu.png" alt="logo des Menus">
                    <span class="hover:scale-110">Menus</span>
                </button>
            </a>
            
            <a class="w-[50%] md:w-[80%] flex">
                <button id="Reservebtn" class="bg-none w-full h-[2.5rem] border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/Réservation-logo.png" alt="logo des Réservation">
                    <span class="hover:scale-110">Réservation</span>
                </button>
            </a>

            <div class="sitatuschaf w-full md:w-[80%] h-[2.5rem] border-b-[1px] border-black flex flex-col justify-center p-2">
                <button id="Reservebtn" class="bg-none w-[80%] h-[2.5rem] flex justify-center items-center gap-[2vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[70%]" src="../assets/images/Statistique-logo.png" alt="logo des Réservation">
                    <span class="hover:scale-110">Statistiques</span>
                </button>
                <div class="w-full h-full flex flex-wrap gap-y-[5%] p-2 overflow-y-auto">
                    <div class="bg-white w-full h-[5rem] rounded-md flex flex-col justify-evenly items-center">
                        <span class="text-sm md:text-[1.3vw] text-center">Demandes en attente</span>
                        <span>100</span>
                    </div>
                    <div class="bg-white w-full h-[5rem] rounded-md flex flex-col justify-evenly items-center gap-1">
                        <span class="text-sm md:text-[1.3vw] text-center">Demandes approuvées pour la journée</span>
                        <span>100</span>
                    </div>
                    <div class="bg-white w-full h-[5rem] rounded-md flex flex-col justify-evenly items-center gap-1">
                        <span class="text-sm md:text-[1.3vw] text-center">Demandes approuvées pour le jour suivant</span>
                        <span>100</span>
                    </div>
                </div>
            </div>

        </nav>

        <!-- continaire des Menus -->
        <div id="Menuscontinaire " class="w-full h-[70vh] md:w-[75%] md:h-full flex flex-col items-center  text-white hidden">
            <div class="w-[85%] h-[2.5rem] flex justify-center md:justify-end items-center">
                <button id="AjouterMenu" class="hover:scale-[1.01] hover:text-blue-200">Ajouter un Menu</button>
            </div>
            <div class="w-full h-full flex flex-wrap justify-center p-[1vw] overflow-y-auto">
                <!-- Menu -->
                <div class="relative sous-Menu w-[12rem] h-[18rem] md:w-[17rem] md:h-[24rem] flex flex-col justify-center items-center px-[0.5%] hover:scale-[1.01]">
                    <span class="absolute top-[8%] left-[36%] text-sm md:text-lg font-bold">Menu 1</span>
                    
                    <!-- continaire des Plats -->
                    <div class="ContinairePlats absolute left-[6.1%] w-[87%] md:w-[80%] h-[63%] flex flex-col items-center gap-y-[2%] overflow-y-auto py-[3.5%]">
                        <div class="plat bg-white bg-opacity-70 w-full h-[4.5rem] md:h-[5.5rem] rounded-md flex gap-y-1">
                            <div class="w-[40%] flex place-content-center">
                                <img class="h-[100%] col-span-1" src="../assets/images/deser.jpg" alt="">
                            </div>
                            <div class="w-[60%] py-[3%] justify-center  text-black">
                                <span class="text-sm font-bold md:text-lg">Deser</span>
                                <p class="text-[0.3rem] md:text-[0.4rem]">Un désert est un endroit très sec avec peu de pluie et peu de vie. Il y a souvent du sable ou des roches.</p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="absolute w-full max-h-[8%] flex justify-around items-center bottom-[10%] px-[15%]">
                        <span class="text-sm md:text-lg font-bold mb-[3%]">20.00$</span>
                        <button id="réserve" class="w-[20%] h-full self-end">
                            <img class="w-full" src="../assets/images/plus1.png" alt="icone de commande">
                        </button>
                    </div>
                </div>            
            </div>
        </div>

        <!-- continaire des Réservation -->
        <div id="Reservecontinaire" class="w-full h-[70vh] md:w-[75%] md:h-full flex justify-around gap-5 p-[2vw] overflow-y-auto">

            <div class="relative Resetvation  w-[10rem] h-[12rem] md:w-[13rem] md:h-[15.5rem] flex flex-col items-center py-[2.5%] p-[0.5%] hover:scale-[1.01]">
                <div class="w-[98%] h-[10%] flex justify-around content-around">
                    <span class="text-sm md:text-lg">00:00</span>
                    <span class="text-sm md:text-lg">01/01/2025</span>
                </div>
                <div class="w-[98%] min-h-[70%] flex justify-around flex-col gap-[5%]">
                    <span class="w-[95%] text-sm md:text-lg text-center font-bold">Clients</span>
                    <span class="w-[95%] text-sm md:text-lg text-center font-bold">Menu 1</span>
                </div>
                <div class="w-full flex justify-evenly">
                    <button class="w-auto bg-red-400 text-white rounded-lg py-1 px-2 text-sm md:text-lg">Sup</button>
                    <button class="w-auto bg-green-400 text-white rounded-lg py-1 px-2 text-sm md:text-lg">Acc</button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>