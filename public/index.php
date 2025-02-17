<?php
if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case 'contact':
            include("../pages/contact.php");
            break;
        case 'img':
            include("../pages/images.php");
            break;
        case 'livre':
            include("../pages/livreDor.php");
            break;
        default:
            echo "error 404";
            break;
    }
} else {
    include("../pages/accueil.php");
}
