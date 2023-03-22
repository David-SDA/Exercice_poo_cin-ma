<?php
    class Role{
        private string $_nomRole;
        private array $_castingsRole = [];
        
        /* Méthode __construct de la classe */
        public function __construct(string $nomRole){
            $this->_nomRole = $nomRole;
        }

        /* Getter et Setter du nom du rôle */
        public function getNomRole() : string{
            return $this->_nomRole;
        }
        public function setNomRole(string $nomrole){
            $this->_nomRole = $nomrole;
        }

        /* Getter et Setter des différents acteurs qui ont incarnés ce rôle dans différents films */
        public function getCastingRole() : array{
            return $this->_castingsRole;
        }
        public function setCastingRole(Casting $castingRole){
            array_push($this->_castingsRole, $castingRole);
        }

        /* Méthode pour afficher la liste des acteurs qui ont incarné ce rôle */
        public function listerActeursRole(){
            $result = "Les acteurs ayant joué le rôle de " . $this->_nomRole . " :<br>";
            foreach($this->_castingsRole as $casting){
                $result .= "- " . $casting->getActeurCasting() . "<br>";
            }
            return $result;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nomRole;
        }
    }
?>