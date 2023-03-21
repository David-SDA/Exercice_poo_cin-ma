<?php
    /* Fonction pour charger les classes nécessaires automatiquement */
    function chargerClasse($classe){
        require $classe . '.class.php';
    }
    spl_autoload_register('chargerClasse');

    /* Création du réalisateur Tim Burton */
    $timBurton = new Realisateur("Burton", "Tim", "Homme", "1958-08-25");

    /* Création de différents acteurs */
    $georgeClooney = new Acteur("Clooney", "George", "Homme", "1961-05-06");
    $valKilmer = new Acteur("Kilmer", "Val", "Homme", "1959-12-31");
    $michaelKeaton = new Acteur("Keaton", "Micheal", "Homme", "1951-09-05");

    /* Création du genre Super-Héros */
    $genreSuperHeros = new Genre("Super-héros");

    /* Listes des acteurs qui ont incarné Batman */
    $acteursBatman = [$georgeClooney, $valKilmer, $michaelKeaton];
    $acteursJoker = [$georgeClooney, $michaelKeaton];

    /* Création du film Batman */
    $filmBatman = new Film("Batman", "1989-09-13", 125, $timBurton, "Film Batman", $genreSuperHeros, [$michaelKeaton, $georgeClooney]);
    $filmBatman2 = new Film("Batman2", "1989-09-14", 125, $timBurton, "Film Batman2", $genreSuperHeros, [$michaelKeaton, $georgeClooney]);

    /* Création du rôle de Batman */
    $roleBatman = new Role("Batman", [$filmBatman, $filmBatman2], $acteursBatman);
    $roleJoker = new Role("Joker", [$filmBatman, $filmBatman2], $acteursJoker);

    /* Les différents tests de méthodes */
    echo $roleBatman->listerActeursRole();
    echo "<br>";
    echo $roleJoker->listerActeursRole();
    echo "<br>";

    /* PROBLEME A REGLER : 
        Méthode mauvaise car si on imagine que dans le film 1 :
        A incarne x
        B incarne y
        Mais dans le film 2 :
        A incarne y
        B incarne x
        Affiche dans chaque film que A incarne x et y, idem pour B
    */
    echo $filmBatman->listerActeursFilms();
    echo "<br>";
    echo $filmBatman2->listerActeursFilms();
    echo "<br>";

    echo $genreSuperHeros->listerFilmsGenre();
    echo "<br>";

    echo $michaelKeaton->listerFilmsParticipes();
    echo "<br>";
    echo $georgeClooney->listerFilmsParticipes();
    echo "<br>";

    echo $timBurton->listerFilmsRealises();
?>