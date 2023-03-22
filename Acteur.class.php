<?php
    class Acteur extends Personne{
        private array $_castingsActeur = [];

        /* Méthode __construct de la classe */
        public function __construct($nom, $prenom, $sexe, $dateNaissance){
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        }

        /* Getter et Setter des différents rôles incarné par l'acteur dans différents films */
        public function getCastingActeur() : array{
            return $this->_castingsActeur;
        }
        public function setCastingActeur(Casting $castingActeur){
            array_push($this->_castingsActeur, $castingActeur);
        }

        /* Méthode pour lister la filmographie de l'acteur */
        public function listerFilmsParticipes(){
            $result = "$this a joué dans ces films :<br>";
            foreach($this->_castingsActeur as $casting){
                $result .= "- " . $casting->getFilmCasting()->getTitre() . "<br> ";
            }
            return $result;
        }
    }
?>