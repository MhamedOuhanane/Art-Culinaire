<?php
    include("./pages/connection.php");

    // l'insert des donner dans database
    if (isset($_POST['username'])) {
        $password = $_POST['passwordinscription'];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $name = $_POST['username'];
        $Adress = $_POST['emailinscription'];
        $telep = $_POST['téléphone'];
        $image = $_POST['user-image'];

        $verification = NULL;
        $verification = "SELECT Adress FROM inscription WHERE Adress = ?";
        $stmt = $con->prepare($verification);
        $stmt->bind_param('s', $Adress);
        $stmt->execute();
        $verification = $stmt->get_result();
        $verification = mysqli_fetch_assoc($verification);

        if ($verification == NULL) {
            if ($image != '') {
                $insertuser = "INSERT INTO inscription( Username, Adress, téléphone, Password, UserImage) VALUES ('$name', '$Adress', '$telep', '$password', '$image')";
            } else {
                $insertuser = "INSERT INTO inscription( Username, Adress, téléphone, Password) VALUES ('$name', '$Adress', '$telep', '$password')";
            };
            
            if (mysqli_query($con,$insertuser)) {
                header("Location: ./pages/Accueil.php");
            } else {
                header("Location: index.php?Erreur=". mysqli_error($con));
            };
        } else {
            echo '<script>location.replace("index.php?Erreur= Ce compte est déjà enregistré. Veuillez utiliser un autre identifiant.")</script>';
        };
    };

    // le connexion
    if (isset($_POST['emailconnexion'])) {
        $email = $_POST['emailconnexion'];

        $verification = '';
        $verification = "SELECT * FROM inscription i, role r WHERE Adress = ? && i.id_role = r.id_Role";
        $stmt = $con->prepare($verification);
        $stmt ->bind_param('s', $email);
        $stmt->execute();
        $verification = $stmt->get_result();
        $verification = mysqli_fetch_assoc($verification);
        if ($verification != '') {
            $validation = false;
            if (password_verify($_POST['passwordconnexion'], $verification['Password'])) {
                if ($verification['role'] == 'Admine') {
                    header("location: ./pages/Admin.php");
                } else if ($verification['role'] == 'Chef') {
                    header("location: ./pages/Chefs.php");
                } else if ($verification['role'] == 'Client') {
                    header("location: ./pages/Accueil.php");
                } 
                $validation = true;
            } else {
                header("location: index.php?Erreur=Mot de passe incorrect. Vérifiez votre entrée et réessayez.");
            };
        } else {
            header("location: index.php?Erreur=Ce compte n'existe pas. Vérifiez vos informations.");
        }
    };

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="shortcut icon"
        href="assets/images/logo-Art1.png"
        type="image/x-icon"
    >
    <link rel="stylesheet" href="./assets/css/input.css">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>Art Culinaire</title>
</head>
<body>
    <!-- header -->
    <header class="fixed z-50 bg-gray-700 bg-opacity-80 w-full h-[4.5rem] flex justify-between px-3">
        <a class="h-full cursor-pointer hover:scale-[1.03]" href="index.php">
            <img class="h-full md:hidden" src="assets/images/Art-Culinaire-logo-Mobile.png" alt="">
            <img class="h-full hidden md:block" src="assets/images/Art-Culinaire-logo-Descktop.png" alt="">
        </a>

        <div class="w-[50%] md:w-[30vw] flex justify-end gap-2 items-center">
            <button class="inscription w-auto h-auto text-white rounded-md px-4 py-1 hover:text-blue-100 hover:scale-105">Sign in</button>
            <button class="connexion w-auto h-auto text-white rounded-md px-4 py-1 hover:text-blue-100 hover:scale-105">Sign up</button>
        </div>
    </header>

    <!-- section de connexion -->
    <section class="relative ">
        <!-- Moda d'inscription -->
        <div id="Modalinscription" class="fixed z-30 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white w-[82%] h-[90%] md:w-[70%] md:h-[70%] rounded-md  flex flex-col justify-evenly items-center py-6">
                <span class="text-center w-[90%]"><strong>Veuillez entrer vos informations de inscription pour accéder à votre compte :</strong></span>
                <form action="index.php" method="post" class="w-full h-[80%] grid justify-center md:grid-cols-[60%_30%] md:grid-rows-4 md:px-[5vw] md:justify-items-center px-5 gap-5">

                    <input id="username" class=" inputinsc col-span-2 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="username" type="text" placeholder="Non d'utilisateur">

                    <input class="inputemail inputinsc  col-span-1 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="emailinscription" type="email" placeholder="Adress Email">
                    
                    <input id="téléphone" class=" inputinsc col-span-1 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="téléphone" type="text" placeholder="Téléphone">
                    
                    <input id="passwordinscription" class="inputpassword inputinsc  col-span-1 w-full row-span-1 h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="passwordinscription" type="password" placeholder="Mot de passe">
                    
                    <input id="cofpasswordinscription" class=" inputinsc col-span-1 w-full row-span-1 h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="cof-password-inscription" type="password" placeholder="Confirmer le mot de passe">
                    
                    <input id="userimage" class="col-span-2 row-span-1 w-full h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="user-image" type="text" placeholder="Image source">
                    
                    <div class="w-full col-span-2 flex flex-col justify-start md:justify-end md:flex-row gap-2 mr-3 mt-3">
                        <input id="Annuler" class="col-span-2   text-red-600 md:self-end px-3 py-1 rounded-[3px]" type="button" value="Annuler">
                        <input id="confermeinser" class="col-span-2  bg-blue-600 text-white md:self-end px-3 py-1 rounded-[3px] " name="submit" type="submit" value="Conferme">
                    </div>
                </form>
            </div>
        </div>

        <!-- Moda de connexion -->
        <div id="Modalconnexion" class="fixed z-30 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white w-[82%] h-[65%] md:w-[60%] md:h-[55%] rounded-md  flex flex-col justify-evenly items-center">
                <span class="text-center w-[90%]"><strong>Veuillez entrer vos informations de connexion pour accéder à votre compte :</strong></span>
                <form action="index.php" method="post" class="flex flex-wrap justify-center md:justify-end px-[2vw] md:px-[5vw] place-content-evenly gap-y-[2vh]">
                    <label class="md:w-[40%]"  for="#emailconnexion">Email</label>
                    <input id="emailconnexion" class="inputemail w-[95%] md:w-[60%] h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="emailconnexion" type="email" placeholder="exemple@gmail.com">
                    <label class="md:w-[40%]" for="#passwordconnexion">Mot de passe</label>
                    <input id="passwordconnexion" class="inputpassword w-[95%] md:w-[60%] h-[2.5rem] border-solid border-2 px-2 rounded-sm" name="passwordconnexion" type="password" placeholder="********">
                    <div class="w-full flex justify-center md:justify-end gap-3 mt-4">
                        <input class="inscription bg-blue-400 px-3 py-1 rounded-[3px]" type="button" value="Sign in">
                        <input id="confermeconne" class="bg-blue-400 px-3 py-1 rounded-[3px]" name="submit" type="submit" value="Conferme">
                    </div>
                </form>
            </div>
        </div>
        
        <!-- contenu du page About-->
        <div class="relative  w-full h-[100vh] flex flex-col justify-center items-center ">
            <img class="absolute -z-20 md:-z-10 w-full h-full object-center " src="assets/images/background3.jpg" alt="">
            <img class="absolute -z-10 md:-z-20 w-full h-full object-center " src="assets/images/background4.jpg" alt="">
            <div class="w-[95%] md:w-[80%] h-[100%] md:h-[70%] flex flex-col justify-evenly items-center text-white pt-[4.5rem] md:pt-0">
                <div></div><h1 class="text-[5.5vw] w-[50%] md:text-[4vw] md:text-start text-center md:self-start flex flex-col">Bienvenue sur <span class="md:text-end">Art Culinaire</span></h1>
                <span  class="text-center  text-sm md:text-lg w-[90%] md:w-[70%]">
                    <strong>Art Culinaire</strong> est une plateforme qui permet de 
                    réserver un chef à domicile pour préparer des repas sur mesure. 
                    Que ce soit pour une occasion spéciale, un dîner intime ou simplement 
                    pour savourer une cuisine raffinée à la maison, vous pouvez choisir 
                    parmi différents menus personnalisés et fixer l'heure de la 
                    préparation et du service.
                </span>
                <button class="connexion w-auto md:self-end bg-red-500 bg-opacity-70 py-2 px-3 md:px-10 rounded-sm  md:mr-5">Voir Plus</button>
            </div>
        </div>

        <script src="./assets/js/script.js"></script>
    </section>
</body>
</html>