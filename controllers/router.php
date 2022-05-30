<!-- Le router appelle toujours le controller jamais les vues; c'est le controller qui appelle les vues -->
<?php

if(isset($_GET["page"]))
{
    if($_GET["page"] == "contact")
        require("./controllers/contact.php");

    elseif($_GET["page"] == "faq")
        require("./controllers/faq.php");

    elseif($_GET["page"] == "categories")
        require("./controllers/categories.php");
}
else{
    require("./controllers/home_page.php");
}
?>