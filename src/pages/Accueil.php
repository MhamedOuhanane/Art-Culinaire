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
                <button id="Reservebtn" class="bg-none w-full h-[2.5rem] border-b-[1px] border-black flex items-center gap-[1vw] pl-[10vw] md:pl-[1.5vw]">
                    <img class="h-[100%]" src="../assets/images/Réservation-logo.png" alt="logo des Réservation">
                    <span class="hover:scale-110">Réservation</span>
                </button>
            </a>
        </nav>

        <!-- continaire des chefs -->
        <div id="Chefscontinaire" class="w-full h-full md:w-[75%] flex flex-wrap justify-around p-[1vw] gap-y-[1.5vw] text-white overflow-y-auto">
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center hover:scale-[1.02]">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
            </div>
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
            </div>
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
            </div>
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
            </div>
            <div class="chef w-[10rem] h-auto md:w-[13rem] bg-inherit flex flex-col items-center">
                <img class="w-full" src="../assets/images/image-chef.png" alt="icone chefs">
                <span class="text-sm md:text-lg">Gordon Ramsay</span>
            </div>
        </div>

        <!-- continaire des Menus -->
        <div id="Menuscontinaire" class="w-full h-[70vh] md:w-[75%] md:h-full flex flex-wrap justify-center p-[1vw] overflow-y-auto">
            <!-- Menu -->
            <div class="relative sous-Menu w-[12rem] h-[18rem] md:w-[17rem] md:h-[24rem] flex flex-col justify-center items-center px-[0.5%] text-white hover:scale-[1.01]">
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
                    </div>
                </div>
                    
                <div class="absolute w-full max-h-[8%] flex justify-around items-center bottom-[9%] px-[15%]">
                    <span class="text-sm md:text-lg font-bold mb-[3%]">20.00$</span>
                    <button id="réserve" class="h-full">
                        <img class="h-full" src="../assets/images/commande.png" alt="icone de commande">
                    </button>
                </div>
            </div>            
        </div>

        <!-- Modal de réservation -->
        <div id="Modalréserve" class="fixed z-30 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white w-[82%] h-[65%] md:w-[60%] md:h-[55%] rounded-md  flex flex-col justify-evenly items-start">
                <span class="text-center w-[90%]"><strong>Veuillez remplir la date de réservation.</strong></span>
                <form action="Accueil.php" method="post" class="w-full h-[80%] grid justify-center md:grid-cols-2 md:grid-rows-3 md:justify-items-center px-5 gap-5">

                    <input class="col-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="reservechef" type="text" value="Chef" disabled>

                    <input class="col-span-1 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="reservemenu" type="text" value="Menu" disabled>

                    <input class="col-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="reservetime" type="time" placeholder="Time">

                    <input class="col-span-1 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="reservedate" type="date" placeholder="Date">
                    
                    <div class="w-full col-span-2 flex flex-col justify-start md:justify-end md:flex-row gap-2">
                        <input id="AnnuleReservation" class="col-span-2  bg-blue-600 text-white md:self-end px-3 py-1 rounded-[3px]" type="button" value="Annuler">
                        <input id="confermeReserve" class="col-span-2  bg-blue-600 text-white md:self-end px-3 py-1 rounded-[3px] " name="submitreserve" type="submit" value="Réserve">
                    </div>
                </form>
            </div>
        </div>
        
        <!-- continaire des reservation -->
        <div id="Reservecontinaire" class="w-full h-[70vh] md:w-[75%] md:h-full flex flex-col items-center p-[2%]">
            <div class="bg-gray-200 bg-opacity-95 w-full h-[2.5rem] border-gray-500 border-[1px] grid grid-cols-[10%_20%_20%_10%_15%_10%_10%] items-center justify-items-center">
                <span class=" font-bold">Id</span>
                <span class="text-xs md:text-sm font-bold">Chef</span>
                <span class="text-xs md:text-sm font-bold">Menu</span>
                <span class="text-xs md:text-sm font-bold">Time</span>
                <span class="text-xs md:text-sm font-bold">Date</span>
            </div>
            <div class="bg-white bg-opacity-95 w-full h-[2.5rem] border-gray-500 border-[1px] grid grid-cols-[10%_20%_20%_10%_15%_10%_10%] items-center justify-items-center">
                <span class=" font-bold">Id</span>
                <span class="text-xs md:text-sm font-bold">Chef</span>
                <span class="text-xs md:text-sm font-bold">Menu</span>
                <span class="text-xs md:text-sm font-bold">Time</span>
                <span class="text-xs md:text-sm font-bold">Date</span>
                <button class="MOdifierVille w-[30%]">
                        <img class="w-full" src="../assets/images/Modi.png" alt="bouton de modification">
                </button>
                <button  class="DeleteVille w-[30%]">
                        <img class="w-full" src="../assets/images/x-button.png" alt="bouton de suppression">
                </button>
            </div>
        </div>
    </section>
    
    <script src="../assets/js/Accueil.js"></script>

</body>
</html>