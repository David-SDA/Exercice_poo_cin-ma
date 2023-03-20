<?php
    class Role{
        private string $_nomRole;
        private array $_filmsConcernes = [];
        private array $_acteursIncarne = [];
        
        /* Méthode __construct de la classe */
        public function __construct(string $nomRole, array $filmsConcernes, array $acteursIncarne){
            $this->_nomRole = $nomRole;
            array_push($this->_filmsConcernes, $filmsConcernes);//un role apparait dans plusieurs films : on le sait
            array_push($this->_acteursIncarne, $acteursIncarne);//un role peut etre incarne par plusieurs acteurs : on le sait
            for($i=0; $i < count($this->_acteursIncarne); $i++){
                $this->_acteursIncarne[$i]->setRole($this);//pour chaque acteurs qui a incarné ce role, on met le role dans l'array $_roles de l'acteur
            }
        }

        /* Getter et Setter du nom du role */
        public function getRole() : string {
            return $this->_nomRole;
        }
        public function setRole(string $role){
            $this->_nomRole = $role;
        }
    }
?>