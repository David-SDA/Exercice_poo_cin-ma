<?php
    class Realisateur extends Personne{
        private array $_filmsRealises = [];

        /* Méthode __construct de la classe */
        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        }

        /* Getter et Setter des films realises par le realisateur */
        public function getFilmsRealises(){
            return $this->_filmsRealises;
        }
        public function setFilmsRealises(Film $filmRealise){
            array_push($this->_filmsRealises, $filmRealise);
        }

        /* Méthode pour lister la filmographie du réalisateur */
        public function listerFilmsRealises(){
            $result = "$this a réalisé ces films :<br>";
            foreach($this->_filmsRealises as $film){
                $result .= "- $film<br>";
            }
            return $result;
        }
    }
?>