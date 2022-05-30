<?php
$title;

if(isset($_GET["page"]))
{
    if($_GET["page"] == "contact")
        $title = "Page de contact";

    elseif($_GET["page"] == "faq")
      $title = "Page de Foire aux questions";

    elseif($_GET["page"] == "categories")
       $title ="Présentation des catégories";
}
else{
    $title = "Page d'acceuil";
}

require("./views/head.php");
?>