<?php
    /* Fonction pour charger les classes nécessaires automatiquement */
    spl_autoload_register(function ($class) {
        require $class . '.class.php';
    });

    /* Création du réalisateur Tim Burton */
    $timBurton = new Realisateur("Burton", "Tim", "Homme", "1958-08-25");

    /* Création de différents acteurs */
    $georgeClooney = new Acteur("Clooney", "George", "Homme", "1961-05-06");
    $valKilmer = new Acteur("Kilmer", "Val", "Homme", "1959-12-31");
    $michaelKeaton = new Acteur("Keaton", "Micheal", "Homme", "1951-09-05");

    /* Création du genre Super-Héros */
    $genreSuperHeros = new Genre("Super-héros");

    /* Création du film Batman*/
    $filmBatman = new Film("Batman", "1989-09-13", 125, $timBurton, "Film Batman", $genreSuperHeros);
    /* Création d'un film Batman fictif */
    $filmBatman2 = new Film("Batman2", "1989-09-14", 125, $timBurton, "Film Batman2", $genreSuperHeros);

    /* Création du rôle de Batman et Joker */
    $roleBatman = new Role("Batman");
    $roleJoker = new Role("Joker");

    /* Création de différents rôle et acteurs fictifs dans les films */
    $castingBatmanBatman = new Casting ($michaelKeaton, $filmBatman, $roleBatman);
    $castingJokerBatman = new Casting ($georgeClooney, $filmBatman, $roleJoker);
    $castingBatmanBatman2 = new Casting ($georgeClooney, $filmBatman2, $roleBatman);
    $castingJokerBatman2 = new Casting ($michaelKeaton, $filmBatman2, $roleJoker);

    /* Les différents tests de méthodes */
    // Test du listage des acteurs ayant incarné un rôle précis 
    echo $roleBatman->listerActeursRole();
    echo "<br>";
    echo $roleJoker->listerActeursRole();
    echo "<br>";

    // Test du listage d'un casting d'un film
    echo $filmBatman->listerCastingFilm();
    echo "<br>";
    echo $filmBatman2->listerCastingFilm();
    echo "<br>";

    // Test du listage des films appartenant à un genre
    echo $genreSuperHeros->listerFilmsGenre();
    echo "<br>";

    // Test du listage de la filmographie d'un acteur
    echo $michaelKeaton->listerFilmsParticipes();
    echo "<br>";
    echo $georgeClooney->listerFilmsParticipes();
    echo "<br>";

    // Test du listage de la filmographie d'un réalisateur
    echo $timBurton->listerFilmsRealises();
?>