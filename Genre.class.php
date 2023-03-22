<?php
    class Genre{
        private string $_nomGenre;
        private array $_filmsGenre = [];

        /* Méthode __construct de la classe */
        public function __construct(string $nomGenre){
            $this->_nomGenre = $nomGenre;
        }

        /* Getter et Setter du nom de ce genre cinématographique */
        public function getNomGenre() : string{
            return $this->_nomGenre;
        }
        public function setNomGenre(string $nomGenre){
            $this->_nomGenre = $nomGenre;
        }

        /* Getter et Setter des films dans ce genre cinématographique */
        public function getFilmsGenre() : array{
            return $this->_filmsGenre;
        }
        public function setFilmsGenre(Film $filmsGenre){
            array_push($this->_filmsGenre, $filmsGenre);
        }

        /* Méthode pour lister les films du genre cinématographique */
        public function listerFilmsGenre(){
            $result = "Le genre $this est associé à " . count($this->_filmsGenre) . " films :<br>";
            foreach($this->_filmsGenre as $film){
                $result .= "- $film<br>";
            }
            return $result;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nomGenre;
        }
    }
?>