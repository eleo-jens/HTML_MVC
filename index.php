<!-- Point d'entrée: Dans l'index, on aura juste le mode dynamique avec une injection des différents fichiers -->
<?php
    require("./controllers/head.php");
    //on doit appeler le controller dans l'index car il gere le modele et la vue; ici on appelle tout le temps la navigation
    require("./controllers/navigation.php");
    //on appelle le router qui va dispacher l'utilisateur selon l'URL surlequel il veut aller
    require("./controllers/router.php");
    require("./views/foot.php");
?>