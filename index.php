<?php
    /* Fonction pour charger les classes nécessaires automatiquement */
    function chargerClasse($classe){
        require $classe . '.class.php';
    }
    spl_autoload_register('chargerClasse');

    
?>