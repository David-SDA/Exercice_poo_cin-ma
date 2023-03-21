<?php
    class Role{
        private string $_nomRole;
        private array $_filmsConcernes = [];
        private array $_acteursIncarne = [];
        
        /* Méthode __construct de la classe */
        public function __construct(string $nomRole, array $filmsConcernes, array $acteursIncarne){
            $this->_nomRole = $nomRole;
            foreach($filmsConcernes as $film){
                array_push($this->_filmsConcernes, $film);//un role apparait dans plusieurs films : on le sait
            }
            foreach($acteursIncarne as $acteur){
                array_push($this->_acteursIncarne, $acteur);//un role peut etre incarne par plusieurs acteurs : on le sait
            }
            foreach($this->_acteursIncarne as $acteur){
                $acteur->setRoles($this);//pour chaque acteurs qui a incarné ce role, on met le role dans l'array $_roles de l'acteur
            }
        }

        /* Getter et Setter du nom du role */
        public function getNomRole() : string{
            return $this->_nomRole;
        }
        public function setNomRole(string $nomrole){
            $this->_nomRole = $nomrole;
        }

        /* Getter et Setter des films qui ont ce rôle a l'interieur */
        public function getFilmsConcernes() : array{
            return $this->_filmsConcernes;
        }
        public function setFilmsConcernes(array $filmsConcernes){
            array_push($this->_filmsConcernes, $filmsConcernes);
        }

        /* Getter et Setter des acteurs qui ont incarné ce rôle */
        public function getActeursIncarne() : array{
            return $this->_acteursIncarne;
        }
        public function setActeursIncarne(array $acteursIncarne){
            array_push($this->_acteursIncarne, $acteursIncarne);
        }

        /* Méthode pour afficher la liste des acteurs qui ont incarné ce rôle */
        public function listerActeursRole(){
            $result = "Les acteurs ayant joué le rôle de " . $this->_nomRole . " :<br>";
            foreach($this->_acteursIncarne as $acteur){
                $result .= "- $acteur<br>";
            }
            return $result;
        }
    }
?>