<!-- Les données se trouvent dans le modèle qui est géré par le controller -->

<?php
    $menu = [
        "Accueil" => "/repo/HTML_MVC", 
        "Catégories" => [
            "Hardware" => "?page=categories&categId=1", 
            "Reseau" => "?page=categories&categId=2", 
            "Front-end" => "?page=categories&categId=3",
            "Back-end" => [
                "MySQL" => "?page=categories&categId=4", 
                "PHP" => "?page=categories&categId=5", 
                "Python" => "?page=categories&categId=6"
            ]
        ], 
        "Contact" => "?page=contact",
        "FAQ" => "?page=faq"
    ];
?>