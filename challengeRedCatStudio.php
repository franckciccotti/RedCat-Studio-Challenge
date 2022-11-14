<?php

// ENVOIE FORMULAIRE TEST1
// if (isset($_POST['message'])) {
//     $entete = 'MIME-Version: 1.0' ."\r\n";
//     $entete .= 'Content-type: text/html; charset=utf-8' ."\r\n";
//     $entete .= 'From: postmaster@franckciccotti.fr' ."\r\n"; 
//     $entete .= 'Reply-to:' .$_POST['email'];

//     $message = ' <h1>Message envoyé depuis la page Challenge de franckciccotti.fr</h1>
//     <p><b>Email : </b>' .$_POST['email'] .'<br>
//     <b>Message : </b>' .htmlspecialchars($_POST['message']) .'</p>';

//     $retour = mail('franckciccotti@me.com', 'Envoi depuis la page RedCat Studio Challenge', $message, $entete);
//     if ($retour)
//         echo '<p>Votre message a bien été envoyé.</p>';    
// }

// ENVOIE FORMULAIRE TEST2
    if (isset($_POST['message'])) {
        $message = "Ce message vous a été envoyé via la page RedCat Studio Challenge du site franckciccotti.fr 
        Nom : " .$_POST["nom"] . "
        Prénom : " .$_POST["prenom"] . "
        Téléphone : " .$_POST["telephone"] . "
        Email : " .$_POST["email"] . "
        Message : " . $_POST["message"];

        $retour = mail("contact@redcat-studio.fr", 'Envoi depuis la page RedCat Studio Challenge', $message, "From:postmaster@franckciccotti.fr" ."\r\n" ."Reply-to:" .$_POST["email"]);
        if ($retour) {
            echo "<p>Votre message a bien été envoyé. </p>";
        }  

    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/style.css">

    <title>Challenge RedCat Studio</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <!-- LE MENU -->

        <nav id="navHeader">
            <!-- ICONES FACEBOOK & INSTAGRAM -->
            <div id="logos">
                <a id="logoFacebook" href="#" target="_blank"><i class="fa-brands fa-facebook-f" alt="logo facebook"></i></a>
                <a id="logoInstagram" href="#" target="_blank"><i class="fa-brands fa-instagram" alt="logo instagram"></i></a>
            </div>
            <!-- LISTE -->
            <ul>
                <li><a href="#">philosophie</a></li>
                <li><a href="#">cbd attitude</a></li>
                <li><a href="#">malls communauté</a></li>
            </ul>
            
            <!-- LOGO -->
            <a href="#">malls</a>

            <ul>
                <li><a href="#">mallshop</a></li>
            </ul>

            <!-- RECHERCHE -->
            <form action="">
                <i class="fa-solid fa-magnifying-glass"></i>
                <p> <input type="text" id="search" class="search" name="search" placeholder="Rechercher" /> </p>
            </form>

            <!-- ICONES USER & BASKET -->
            <div id="logos2">
                <a id="iconUser" href="#"><i class="fa-solid fa-user"></i></a>
                <a id="iconBasket" href="#"><i class="fa-solid fa-basket-shopping"></i></a>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        
        <!-- BLOC HERO -->
        <div id="hero">
            <div id="calque"></div>
            <h1>the new lifestyle</h1>
            <h3>Des produits cbd de qualité</h3>
            <a href="#">Shop</a>
        </div>

        <!-- BLOC PRESENTATION -->
        <div id="presentation">
            <div id="blocPresentation1" >
                <h2>Produits CBD de qualité.</h2>
                <h3>Apaisez le corps et l'esprit</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a href="#">En savoir plus</a>
            </div>

            <div id="image1">
                <img src="./Images/cdb1.png" alt="image cbd1">
            </div>
            
            <div id="blocPresentation2">
                <img src="./Images/cdb2.jpg" alt="image cbd2">
                <img src="./Images/MallS.png" alt="image malls">
                <h2>Vision.</h2>
                <h3>Passion & Bien-être</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'sen.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <p id="produitCBD">produits cbd</p>
            
        <!-- BLOC CATEGORIES -->
        <div id="categories">
            <h2>catégories.</h2>
            <h3>des produits au quotidien</h3>

            <div id="cards">
                <div class="blocCard">
                    <a id="card1"  href="#"><img src="./Images/cdb1.png" alt="CBD product1"></a>
                    <div id="card4"><img src="./Images/rowan-freeman-4u9LSRrZusc-unsplash.jpg" alt="illustration2"></div>
                </div>
                
                <div class="blocCard">
                    <div id="card2">
                        <img src="./Images/portrait-of-fashion-girl-in-a-black-sweater-with-a-LY8D6QR_2-768x1024.jpg" alt="illustration3">
                    </div> 
                        <a id="card5" href="#"><img src="./Images/cdb3.jpg" alt="CBD product3"></a>
                </div>
                
                <div class="blocCard">
                    <a id="card3" href="#"><img src="./Images/cdb2.jpg" alt="CBD produc2"></a>
                    <div id="card6"><img src="./Images/portrait-of-fashion-girl-in-a-black-sweater-with-a-LY8D6QR_2-768x1024.jpg" alt="illustration3"></div>
                </div>

            </div>

        </div>

        <!-- BLOC FORMULAIRE -->
        <form id="form" action="" method="post" enctype="application/x-www-form-urlencoded" name="message"> 
                <input id="nom" class="input" type="text" name="nom" placeholder="Nom" required/>              
                <input id="prenom" class="input" type="text" name="prenom" placeholder="Prénom" required/>              
                <input id="telephone" class="input" type="text" name="telephone" placeholder="Téléphone" required/>              
                <input id="email" class="input" type="email" name="email" placeholder="E-mail" required/>              
                <textarea id="message" class="input" rows="6" cols="100" name="message" placeholder="Message" required></textarea>              
                <input id="envoyer" class="input" type="submit" name="envoyer" value="Envoyer"/> 
        </form> 

        <div id="FS">
            <div id="FS1"></div>
            <div>
                <p id="followUs">Follow us.</p> 
            </div>
        </div>
        
        <!-- BLOC FOLLOW US -->
        <div id="blocFollowUs">
            <a href="#" target="_blank"><img src="./Images/sirisvisual-IcwAKUhNGXs-unsplash.jpg" alt="image1"></a>
            <a href="#" target="_blank"><img src="./Images/ian-dooley-y_CSTKJ0bEs-unsplash-1024x1024.jpg" alt="image2"></a>
            <a href="#" target="_blank"><img src="./Images/portrait-of-fashion-girl-in-a-black-sweater-with-a-LY8D6QR_2-768x1024.jpg" alt="image3"></a>
            <a href="#" target="_blank"><img src="./Images/melnychuk-nataliya-51sGDpm5S78-unsplash_3-768x1024.jpg" alt="image4"></a>
        </div>

   </main>

   <!-- FOOTER -->
    <footer id="footer">
        <nav id="navFooter">
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Bubble Zen</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <a href="#">malls</a>
        <p>11 boulevard sebastopol, Paris 75001</p>     
    </footer>

</body>

    <script></script>

</html>