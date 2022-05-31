<!-- la view va afficher la navigation -->
<nav role="navigation" class="menu">
    <?php
    print "<ul>";
    foreach ($menu as $key => $value)
    {
        // je dois différencier le sous-menu (un tableau) d'une string lien
        // retaper la lifne 8 à 19 pour rajouter un sous-sous-menu à la place de la ligne 14
        if(is_array($value))
        {
            print "<li>". $key ."</li>";
            
            print "<ul>";
            foreach ($value as $subKey => $subValue) {
                
                if(is_array($subValue))
                {
                    print "<li>". $subKey ."</li>";
                    
                    print "<ul>";
                    foreach ($subValue as $subsubKey => $subsubValue) {
                        print "<li><a href='" . $subsubValue . "'>" .$subsubKey. "</a></li>";
                    }
                    print "</ul>";
                }
                else
                    print "<li><a href='". $subValue ."'>" . $subKey . "</a></li>";
            }
            print "</ul>";
        }
        else
            print "<li><a href='". $value ."'>" . $key . "</a></li>";
    }
    print "</ul>";
    ?>
</nav>